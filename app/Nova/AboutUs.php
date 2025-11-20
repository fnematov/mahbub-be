<?php

namespace App\Nova;

use App\Models\AboutUs as AboutUsModel;
use App\Nova\Repeater\MediaRepeatable;
use Illuminate\Http\Request;
use Laravel\Nova\Fields\ID;
use Laravel\Nova\Fields\Repeater;
use Laravel\Nova\Fields\Textarea;
use Laravel\Nova\Panel;

class AboutUs extends Resource
{
    public static string $model = AboutUsModel::class;

    public static $title = 'id';

    public static $search = [
        'id', 'main_info_uz', 'main_info_ru', 'main_info_en'
    ];

    public static function label(): string
    {
        return 'О нас';
    }


    public function fields(Request $request): array
    {
        return [
            ID::make()->sortable(),

            Panel::make("Основная информация", [
                Textarea::make('Текстовая поля – UZ', 'main_info_uz')
                    ->sortable()
                    ->rules('required'),

                Textarea::make('Текстовая поля – RU', 'main_info_ru')
                    ->sortable()
                    ->rules('required'),

                Textarea::make('Текстовая поля – EN', 'main_info_en')
                    ->sortable()
                    ->rules('required'),
            ]),

            Panel::make("Дополнительная информация", [
                Textarea::make('Текстовая поля – UZ', 'add_info_uz')
                    ->sortable()
                    ->rules('nullable'),

                Textarea::make('Текстовая поля – RU', 'add_info_ru')
                    ->sortable()
                    ->rules('nullable'),

                Textarea::make('Текстовая поля – EN', 'add_info_en')
                    ->sortable()
                    ->rules('nullable'),
            ]),

            Repeater::make('Media', 'media')
                ->repeatables([
                    MediaRepeatable::make()
                ])
                ->asHasMany(ArticleMedia::class),
        ];
    }
}
