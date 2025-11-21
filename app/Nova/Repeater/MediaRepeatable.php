<?php

namespace App\Nova\Repeater;

use App\Models\Media;
use Laravel\Nova\Fields\Image;
use Laravel\Nova\Fields\Repeater\Repeatable;
use Laravel\Nova\Fields\Text;
use Laravel\Nova\Http\Requests\NovaRequest;

class MediaRepeatable extends Repeatable
{
    public static $model = Media::class;

    public static function label(): string
    {
        return "изображения";
    }

    public function fields(NovaRequest $request): array
    {
        return [
            Image::make('Изображение – UZ', 'path_uz')
                ->required()
                ->fullWidth()
                ->prunable()
                ->stacked(),
            Text::make('Название – UZ', 'name_uz')
                ->fullWidth()
                ->stacked(),
            Text::make('Название – RU', 'name_ru')
                ->fullWidth()
                ->stacked(),
            Text::make('Название – EN', 'name_en')
                ->fullWidth()
                ->stacked(),
        ];
    }
}
