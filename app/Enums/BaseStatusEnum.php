<?php

namespace App\Enums;

use App\Traits\EvolvedEnumsTrait;

enum BaseStatusEnum: string
{
    use EvolvedEnumsTrait;

    case ACTIVE = 'active';
    case INACTIVE = 'inactive';

    public static function labels(): array
    {
        return [
            self::ACTIVE->value => 'Активный',
            self::INACTIVE->value => 'Не активный',
        ];
    }

    public static function iconMap(): array
    {
        return [
            BaseStatusEnum::ACTIVE->value => 'success',
            BaseStatusEnum::INACTIVE->value => 'warning',
        ];
    }

    public function title(): string
    {
        return self::labels()[$this->value];
    }
}
