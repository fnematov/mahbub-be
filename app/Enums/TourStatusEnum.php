<?php

namespace App\Enums;

use App\Traits\EvolvedEnumsTrait;

enum TourStatusEnum: string
{
    use EvolvedEnumsTrait;

    case ACTIVE = 'active';
    case INACTIVE = 'inactive';
    case ARCHIVE = 'archive';

    public static function labels(): array
    {
        return [
            self::ACTIVE->value => 'Активный',
            self::INACTIVE->value => 'Не активный',
            self::ARCHIVE->value => 'В архиве'
        ];
    }

    public static function iconMap(): array
    {
        return [
            TourStatusEnum::ACTIVE->value => 'success',
            TourStatusEnum::INACTIVE->value => 'warning',
            TourStatusEnum::ARCHIVE->value => 'danger',

        ];
    }

    public function title(): string
    {
        return self::labels()[$this->value];
    }

}
