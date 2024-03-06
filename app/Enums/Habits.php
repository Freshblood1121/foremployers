<?php

namespace App\Enums;

enum Habits: string
{

    case SMOKING = "smoking";
    case PROCRASTINATION = "Procrastination";
    case BITING = "Biting";

    public static function all(): array
    {
        return [
            self::SMOKING->value,
            self::PROCRASTINATION->value,
            self::BITING->value,
        ];
    }
}
