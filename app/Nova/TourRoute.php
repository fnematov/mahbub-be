<?php

namespace App\Nova;

use Laravel\Nova\Fields\Currency;
use Laravel\Nova\Fields\ID;
use Laravel\Nova\Fields\Text;
use Laravel\Nova\Fields\Textarea;
use Laravel\Nova\Http\Requests\NovaRequest;

class TourRoute extends Resource
{
    public static string $model = \App\Models\TourRoute::class;

    public static $title = 'id';

    public static $search = [
        'id', 'name_uz', 'name_ru', 'name_en'
    ];

    public static function label(): string
    {
        return "Маршрут";
    }

    public function fields(NovaRequest $request): array
    {
        return [
            ID::make()->sortable(),

            Text::make('Название – UZ', 'name_uz')
                ->maxlength(255)
                ->required()
                ->hideFromIndex()
                ->size('w-1/3'),
            Text::make('Название – RU', 'name_ru')
                ->maxlength(255)
                ->required()
                ->size('w-1/3'),
            Text::make('Название – EN', 'name_en')
                ->maxlength(255)
                ->required()
                ->hideFromIndex()
                ->size('w-1/3'),

            Currency::make('Дополнительная цена для взрослых', 'add_price_adult')
                ->currency('UZS')
                ->rules('nullable', 'numeric')
                ->size('w-1/3'),
            Currency::make('Дополнительная цена для детей', 'add_price_child')
                ->currency('UZS')
                ->rules('nullable', 'numeric')
                ->size('w-1/3'),

            Textarea::make('Описание маршрута – UZ', 'description_tour_uz')
                ->size(),
            Textarea::make('Описание маршрута – RU', 'description_tour_ru')
                ->size(),
            Textarea::make('Описание маршрута – EN', 'description_tour_en')
                ->size()
        ];
    }
}
