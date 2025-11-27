<?php

namespace App\Nova;

use App\Models\Settings as ModelsSettings;
use Illuminate\Http\Request;
use Laravel\Nova\Fields\ID;
use Laravel\Nova\Fields\Image;
use Laravel\Nova\Fields\MorphOne;
use Laravel\Nova\Fields\Text;
use Laravel\Nova\Panel;

class Settings extends Resource
{
    public static string $model = ModelsSettings::class;

    public static $title = 'id';

    public static $search = [
        'id'
    ];

    public function fields(Request $request): array
    {
        return [
            ID::make()->sortable()->hide(),

            MorphOne::make('Загрузка изображения', 'media', SettingsMedia::class)
                ->required()
                ->hideFromIndex()
                ->asPanel(),

            Panel::make('Настройки', [
                Text::make('Заголовок баннера - UZ', 'banner_title_uz')
                    ->maxlength(255)
                    ->required()
                    ->sortable()
                    ->hideFromIndex()
                    ->size('w-1/3'),
                Text::make('Заголовок баннера - RU', 'banner_title_ru')
                    ->maxlength(255)
                    ->required()
                    ->sortable()
                    ->size('w-1/3'),
                Text::make('Заголовок баннера - EN', 'banner_title_en')
                    ->maxlength(255)
                    ->required()
                    ->sortable()
                    ->hideFromIndex()
                    ->size('w-1/3'),

                Text::make('Описание баннера - UZ', 'banner_description_uz')
                    ->maxlength(255)
                    ->hideFromIndex()
                    ->sortable()
                    ->size('w-1/3'),
                Text::make('Описание баннера - RU', 'banner_description_ru')
                    ->maxlength(255)
                    ->sortable()
                    ->hideFromIndex()
                    ->size('w-1/3'),
                Text::make('Описание баннера - EN', 'banner_description_en')
                    ->maxlength(255)
                    ->sortable()
                    ->hideFromIndex()
                    ->size('w-1/3'),

                Text::make('Контактный телефон', 'contact_phone')
                    ->maxlength(255)
                    ->sortable()
                    ->hideFromIndex()
                    ->size('w-1/3'),
                Text::make('Электронная почта', 'contact_email')
                    ->maxlength(255)
                    ->sortable()
                    ->hideFromIndex()
                    ->size('w-1/3'),
                Text::make('Название сайта', 'website_title')
                    ->maxlength(255)
                    ->sortable()
                    ->hideFromIndex()
                    ->size('w-1/3'),

                Text::make('API ключ Google Maps', 'google_map_api_key')
                    ->maxlength(255)
                    ->sortable()
                    ->hideFromIndex()
                    ->size('w-1/3'),

            ]),

            Image::make('изображения', 'media.path_ru')
                ->onlyOnIndex(),
        ];
    }
}
