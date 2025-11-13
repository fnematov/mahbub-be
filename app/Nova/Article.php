<?php

namespace App\Nova;

use Illuminate\Database\Eloquent\Builder;
use Laravel\Nova\Fields\ID;
use Laravel\Nova\Fields\Image;
use Laravel\Nova\Fields\MorphOne;
use Laravel\Nova\Fields\Text;
use Laravel\Nova\Fields\Textarea;
use Laravel\Nova\Http\Requests\NovaRequest;
use Laravel\Nova\Panel;

class Article extends Resource
{
    public static string $model = \App\Models\Article::class;

    public static $title = 'title_ru';

    public static $search = [
        'id', 'title_uz', 'title_ru', 'title_en'
    ];

    public static function indexQuery(NovaRequest $request, $query): Builder
    {
        return $query->with('media');
    }

    public function fields(NovaRequest $request): array
    {
        return [
            ID::make()->sortable()->hide(),

            Image::make('изображения', 'media.path_ru')
                ->onlyOnIndex(),

            MorphOne::make('Загрузка изображения', 'media', ArticleMedia::class)
                ->required()
                ->asPanel(),

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

            Panel::make('Краткое описание', [
                Textarea::make('Краткое описание – UZ', 'description_uz')
                    ->required()
                    ->maxlength(512)
                    ->rows(1)
                    ->hideFromIndex(),
                Textarea::make('Краткое описание – RU', 'description_ru')
                    ->required()
                    ->maxlength(512)
                    ->rows(1)
                    ->hideFromIndex(),
                Textarea::make('Краткое описание – EN', 'description_en')
                    ->required()
                    ->maxlength(512)
                    ->rows(1)
                    ->hideFromIndex(),
            ]),

            Panel::make('Содержание', [
                Textarea::make('Содержание – UZ', 'content_uz')
                    ->required(),
                Textarea::make('Содержание – RU', 'content_ru')
                    ->required(),
                Textarea::make('Содержание – EN', 'content_en')
                    ->required(),
            ]),

        ];
    }
}
