<?php

namespace App\Nova;

use App\Models\Media;
use DigitalCreative\Filepond\Filepond;
use Illuminate\Http\Request;
use Laravel\Nova\Fields\ID;

class ArticleMedia extends Resource
{
    public static string $model = Media::class;

    public static $title = 'id';

    public static $search = [
        ''
    ];

    public static $displayInNavigation = false;

    public function fields(Request $request): array
    {
        return [
            ID::make()->sortable(),
            Filepond::make('Изображение – UZ', 'path_uz')
                ->rules('required')
                ->prunable()
                ->size('w-1/3'),
            Filepond::make('Изображение – RU', 'path_ru')
                ->rules('required')
                ->prunable()
                ->size('w-1/3'),
            Filepond::make('Изображение – EN', 'path_en')
                ->rules('required')
                ->prunable()
                ->size('w-1/3'),
        ];
    }
}
