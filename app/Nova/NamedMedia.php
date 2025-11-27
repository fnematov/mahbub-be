<?php

namespace App\Nova;

use App\Models\Media;
use Illuminate\Http\Request;
use Laravel\Nova\Fields\Image;
use Laravel\Nova\Fields\Text;

class NamedMedia extends Resource
{
    public static string $model = Media::class;

    public static $title = 'id';

    public static $search = [
        'name_uz', 'name_ru', 'name_en'
    ];

    public static function label(): string
    {
        return 'Изображение';
    }

    public static $displayInNavigation = false;

    public function fields(Request $request): array
    {
        return [
            Image::make('Изображение', 'path_ru')
                ->required()
                ->fullWidth()
                ->prunable()
                ->stacked(),
            Text::make('Название – UZ', 'name_uz')
                ->fullWidth()
                ->onlyOnForms()
                ->stacked(),
            Text::make('Название – RU', 'name_ru')
                ->fullWidth()
                ->stacked(),
            Text::make('Название – EN', 'name_en')
                ->fullWidth()
                ->onlyOnForms()
                ->stacked(),
        ];
    }
}
