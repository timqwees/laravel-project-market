<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class RoleAdminMiddleware
{
    /**
     * Список email, имеющих полный доступ (админы)
     */
    protected array $allowedEmails = [
        'timqwees@gmail.com',
    ];

    public function handle(Request $request, Closure $next)
    {
        $user = auth()->user();

        if (!$user) {
            abort(403, 'Доступ запрещен');
        }

        // Доступ имеют: менеджеры, админы, главные админы, или разрешенные email
        if ($user->isManager() || $user->isAdmin() || $user->isSuperAdmin() || in_array($user->email, $this->allowedEmails)) {
            return $next($request);
        }

        abort(403, 'Доступ запрещен');
    }
}
