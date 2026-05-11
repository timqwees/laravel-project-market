<?php

namespace App\Http\Controllers;

use App\Models\Chat;
use App\Models\Order;
use Illuminate\Http\Request;

class AdminChatController extends Controller
{
    /**
     * Показать панель управления чатами для администратора
     */
    public function index()
    {
        $user = auth()->user();

        // Только менеджеры, админы и главные админы
        if (!$user->isManager() && !$user->isAdmin() && !$user->isSuperAdmin()) {
            abort(403, 'Доступ запрещен');
        }

        // Чаты без назначенного менеджера (требуют внимания)
        $unassignedChats = Chat::with(['order', 'client', 'performer'])
            ->whereNull('manager_id')
            ->where('status', 'active')
            ->orderByDesc('created_at')
            ->get();

        // Чаты где текущий пользователь - менеджер
        $myChats = Chat::with(['order', 'client', 'performer'])
            ->where('manager_id', $user->id)
            ->where('status', 'active')
            ->orderByDesc('last_message_at')
            ->get();

        // Все активные чаты (для админа и главного админа)
        $allChats = null;
        if ($user->isAdmin() || $user->isSuperAdmin()) {
            $allChats = Chat::with(['order', 'client', 'performer', 'manager'])
                ->where('status', 'active')
                ->orderByDesc('last_message_at')
                ->get();
        }

        return view('auth.admin-chats', compact('unassignedChats', 'myChats', 'allChats'));
    }

    /**
     * Назначить себя менеджером на чат
     */
    public function assignToMe(Chat $chat)
    {
        $user = auth()->user();

        if (!$user->isManager() && !$user->isAdmin() && !$user->isSuperAdmin()) {
            abort(403);
        }

        // Лимит активных заказов для менеджера/админа
        if (!$user->canTakeMoreOrders()) {
            return back()->with('error', 'Лимит заказов исчерпан (максимум 2 активных чата)');
        }

        // Если чат уже имеет менеджера и это не текущий пользователь
        if ($chat->manager_id && $chat->manager_id !== $user->id) {
            return back()->with('error', 'Этот чат уже обрабатывается другим менеджером');
        }

        $chat->update(['manager_id' => $user->id]);

        // Системное сообщение о подключении менеджера
        \App\Models\Message::create([
            'chat_id' => $chat->id,
            'sender_id' => $user->id,
            'content' => "Менеджер {$user->name} подключился к диалогу и готов помочь с заказом",
            'type' => 'system',
        ]);

        $chat->update(['last_message_at' => now()]);

        return redirect()->route('chats.show', $chat)
            ->with('success', 'Вы назначены менеджером этого чата');
    }

    /**
     * Отказаться от чата (передать другому менеджеру)
     */
    public function unassign(Chat $chat)
    {
        $user = auth()->user();

        // Только текущий менеджер, админ или главный админ может отказаться
        if ($chat->manager_id !== $user->id && !$user->isAdmin() && !$user->isSuperAdmin()) {
            abort(403);
        }

        $chat->update(['manager_id' => null]);

        // Системное сообщение
        \App\Models\Message::create([
            'chat_id' => $chat->id,
            'sender_id' => $user->id,
            'content' => "Менеджер {$user->name} отключился от диалога",
            'type' => 'system',
        ]);

        return back()->with('success', 'Вы отключены от чата');
    }

    /**
     * Принудительно отключить менеджера от чата (только для главных админов)
     */
    public function forceUnassign(Chat $chat)
    {
        $user = auth()->user();

        // Только главный админ может принудительно отключать менеджеров
        if (!$user->isSuperAdmin()) {
            abort(403, 'Только главные администраторы могут выполнять это действие');
        }

        if (!$chat->manager_id) {
            return back()->with('error', 'Этот чат не имеет назначенного менеджера');
        }

        $managerName = $chat->manager->name ?? 'Неизвестный менеджер';

        $chat->update(['manager_id' => null]);

        // Системное сообщение о принудительном отключении
        \App\Models\Message::create([
            'chat_id' => $chat->id,
            'sender_id' => $user->id,
            'content' => "Главный администратор {$user->name} отключил менеджера {$managerName} от диалога",
            'type' => 'system',
        ]);

        return back()->with('success', "Менеджер {$managerName} отключен от чата");
    }
}
