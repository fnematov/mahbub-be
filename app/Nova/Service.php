<?php

namespace App\Nova;

use App\Models\Services;
use App\Nova\Repeater\MediaRepeatable;
use Fnematov\CustomRepeater\CustomRepeater;
use Laravel\Nova\Fields\MorphMany;
use Laravel\Nova\Fields\Text;
use Laravel\Nova\Fields\Textarea;
use Laravel\Nova\Fields\URL;
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

    public function fields(NovaRequest $request): array
    {
        return [
            Panel::make('Заголовок', [
                Text::make('Заголовок – UZ', 'title_uz')
                    ->required()
                    ->maxlength(255)
                    ->size('w-1/2')
                    ->hideFromIndex(),
                Text::make('Заголовок – RU', 'title_ru')
                    ->required()
                    ->size('w-1/2')
                    ->maxlength(255),
                Text::make('Заголовок – EN', 'title_en')
                    ->hideFromIndex()
                    ->required()
                    ->size('w-1/2')
                    ->maxlength(255),

                URL::make('Ссылка', 'url')
                    ->help('Введите любой URL с сайта')
                    ->size('w-1/2')
                    ->nullable()
            ]),

            Panel::make('Основная информация', [
                Textarea::make('Основная информация – UZ', 'main_info_uz')
                    ->required()
                    ->size(),
                Textarea::make('Основная информация – RU', 'main_info_ru')
                    ->size()
                    ->required(),
                Textarea::make('Основная информация – EN', 'main_info_en')
                    ->size()
                    ->required(),
            ]),

            Panel::make('Дополнительная информация', [
                Textarea::make('Дополнительная информация – UZ', 'add_info_uz')
                    ->required()
                    ->size(),
                Textarea::make('Дополнительная информация – RU', 'add_info_ru')
                    ->size()
                    ->required(),
                Textarea::make('Дополнительная информация – EN', 'add_info_en')
                    ->size()
                    ->required(),
            ]),

            MorphMany::make('Изображение', 'media', NamedMedia::class)
                ->onlyOnDetail(),

            CustomRepeater::make('Media', 'media')
                ->repeatables([
                    MediaRepeatable::make()
                ])
                ->uniqueField('name_ru')
                ->stacked()
                ->fullWidth()
                ->asMorphMany(NamedMedia::class)
                ->withMeta([
                    'fieldClass' => 'about-us-wrapper',
                    'fieldComponentClass' => 'about-us-item'
                ]),
        ];
    }
}
