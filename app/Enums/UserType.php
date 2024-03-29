<?php

namespace App\Enums;

enum UserType: string
{
    case USER = 'user';

    case ADMIN = 'admin';

    public function isAdmin(): bool
    {
        return $this === self::ADMIN;
    }

    public function isUser(): bool
    {
        return $this === self::USER;
    }
}
