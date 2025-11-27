<?php

namespace App\Enums;

use App\Traits\EvolvedEnumsTrait;

enum ReviewStatusEnum: string
{
    use EvolvedEnumsTrait;

    case NEW = 'new';
    case ACTIVE = 'active';
    case INACTIVE = 'inactive';

    public static function iconMap(): array
    {
        return [
            self::ACTIVE->value => 'success',
            self::INACTIVE->value => 'warning',
            self::NEW->value => 'info',
        ];
    }
}
