<?php

namespace App\Nova;

use Laravel\Nova\Fields\ID;
use Laravel\Nova\Fields\Text;
use Laravel\Nova\Fields\Textarea;
use Laravel\Nova\Http\Requests\NovaRequest;

class Address extends Resource
{

    public static string $model = \App\Models\Address::class;

    public static $title = 'id';

    public static $search = [
        'id',
    ];

    public static function label(): string
    {
        return 'Адресные данные';
    }

    public function fields(NovaRequest $request): array
    {
        return [
            ID::make()->sortable(),

            Text::make('Адрес – UZ', 'address_uz')
                ->maxlength(255)
                ->rules('required')
                ->hideFromIndex()
                ->sortable(),
            Text::make('Адрес – RU', 'address_ru')
                ->maxlength(255)
                ->rules('required')
                ->sortable(),
            Text::make('Адрес – EN', 'address_en')
                ->maxlength(255)
                ->rules('required')
                ->hideFromIndex()
                ->sortable(),
            Textarea::make('Встроенная карта', 'embed_map')
                ->onlyOnForms()
                ->sortable(),
            Text::make('Встроенная карта', 'embed_map')
                ->onlyOnDetail()
                ->hideFromIndex()
                ->asHtml()
                ->sortable(),
        ];
    }
}
