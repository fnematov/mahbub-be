<?php

namespace App\Nova;

use App\Models\Media;
use Laravel\Nova\Fields\Image;
use Laravel\Nova\Http\Requests\NovaRequest;

class SettingsMedia extends Resource
{
    public static string $model = Media::class;

    public static $title = 'id';

    public static $search = [];

    public function fields(NovaRequest $request): array
    {
        return [
            Image::make('Изображение', 'path_ru')
                ->rules('dimensions:min_width=900,min_height=600')
                ->fullWidth()
                ->prunable()
                ->stacked(),
        ];
    }
}
