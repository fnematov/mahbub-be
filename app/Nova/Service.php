<?php

namespace App\Nova;

use App\Models\Services;
use Laravel\Nova\Fields\ID;
use Laravel\Nova\Fields\Text;
use Laravel\Nova\Fields\Textarea;
use Laravel\Nova\Http\Requests\NovaRequest;
use Laravel\Nova\Panel;

class Service extends Resource
{

    public static string $model = Services::class;


    public static $title = 'title_ru';


    public static $search = [
        'id', 'title_uz', 'title_ru', 'title_en',
    ];

    public static function label(): string
    {
        return 'Услуги';
    }

    public function fields(NovaRequest $request)
    {
        return [
            ID::make()->sortable(),

            Panel::make('Заголовок', [
                Text::make('Заголовок – UZ', 'title_uz')
                    ->required()
                    ->maxlength(255)
                    ->hideFromIndex(),
                Text::make('Заголовок – RU', 'title_ru')
                    ->required()
                    ->maxlength(255),
                Text::make('Заголовок – EN', 'title_en')
                    ->hideFromIndex()
                    ->required()
                    ->maxlength(255),
            ]),

            Panel::make('Основная информация', [
                Textarea::make('Основная информация – UZ', 'main_info_uz')
                    ->required()
                    ->hideFromIndex(),
                Textarea::make('Основная информация – RU', 'main_info_ru')
                    ->required(),
                Textarea::make('Основная информация – EN', 'main_info_en')
                    ->hideFromIndex()
                    ->required(),
            ]),

            Panel::make('Дополнительная информация', [
                Textarea::make('Дополнительная информация – UZ', 'add_info_uz')
                    ->required()
                    ->hideFromIndex(),
                Textarea::make('Дополнительная информация – RU', 'add_info_ru')
                    ->required(),
                Textarea::make('Дополнительная информация – EN', 'add_info_en')
                    ->hideFromIndex()
                    ->required(),
            ]),
        ];
    }
}
