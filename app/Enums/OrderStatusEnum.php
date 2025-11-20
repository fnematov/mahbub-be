<?php


namespace App\Enums;

use App\Traits\EvolvedEnumsTrait;

enum OrderStatusEnum: string
{
    use EvolvedEnumsTrait;

    case NEW = 'new';
    case SOLD = 'sold';
    case CANCELED = 'canceled';
    case ARCHIVE = 'archive';

    public static function labels(): array
    {
        return [
            self::NEW->value => 'Новый',
            self::SOLD->value => 'Продан',
            self::CANCELED->value => 'Отменен',
            self::ARCHIVE->value => 'Архив'
        ];
    }

    public static function iconMap(): array
    {
        return [
            OrderStatusEnum::ARCHIVE->value => 'warning',
            OrderStatusEnum::SOLD->value => 'success',
            OrderStatusEnum::CANCELED->value => 'danger',
            OrderStatusEnum::NEW->value => 'info',
        ];
    }

    public function title(): string
    {
        return self::labels()[$this->value];
    }

}
