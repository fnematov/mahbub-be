<?php

namespace App\Nova;

use Laravel\Nova\Fields\ID;
use Laravel\Nova\Fields\Text;
use Laravel\Nova\Http\Requests\NovaRequest;
use Naoray\NovaJson\JSON;

class Address extends Resource
{

    public static $model = \App\Models\Address::class;


    public static $title = 'id';


    public static $search = [
        'id',
    ];


    public static function label(): string
    {
        return 'Адресные данные';
    }

    public function fields(NovaRequest $request)
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

            JSON::make('Расположение', 'location', [
                Text::make('Широта', 'lat')->rules(['numeric', 'required'])
                    ->hideFromIndex(),
                Text::make('Долгота', 'lng')->rules(['numeric', 'required'])
                    ->hideFromIndex(),
            ]),
        ];
    }
}
