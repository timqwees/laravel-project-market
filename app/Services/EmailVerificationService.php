<?php

namespace App\Services;

use App\Models\EmailVerificationCode;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Mail;

class EmailVerificationService
{
  /**
   * Отправляет код подтверждения на email
   */
  public static function sendVerificationCode(string $email): string
  {
    // Очищаем просроченные коды
    EmailVerificationCode::cleanupExpired();

    // Генерируем новый код
    $code = EmailVerificationCode::generateCode($email);

    // Отправляем код
    Mail::raw("Ваш код подтверждения: {$code}", function ($message) use ($email) {
      $message->to($email)
        ->subject('Код подтверждения');
    });

    return $code;
  }

  /**
   * Проверяет код подтверждения
   */
  public static function verifyCode(string $email, string $code): bool
  {
    return EmailVerificationCode::verifyCode($email, $code);
  }

  /**
   * Проверяет код подтверждения без пометки как использованный (для реальной проверки)
   */
  public static function checkCode(string $email, string $code): bool
  {
    return EmailVerificationCode::checkCode($email, $code);
  }
}
