<?php

namespace App\Nova\Repeater;

use App\Models\Location;
use Laravel\Nova\Fields\Repeater\Repeatable;
use Laravel\Nova\Fields\Text;
use Laravel\Nova\Http\Requests\NovaRequest;

class LocationRepeatable extends Repeatable
{
    public static $model = Location::class;

    public static function label(): string
    {
        return 'город';
    }

    public function fields(NovaRequest $request): array
    {
        return [
            Text::make('Название города – UZ', 'name_uz')
                ->maxlength(255)
                ->required(),
            Text::make('Название города – RU', 'name_ru')
                ->maxlength(255)
                ->required(),
            Text::make('Название города – EN', 'name_en')
                ->maxlength(255)
                ->required(),
        ];
    }
}
