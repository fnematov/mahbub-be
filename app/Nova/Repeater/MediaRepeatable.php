<?php

namespace App\Nova\Repeater;

use App\Models\Media;
use DigitalCreative\Filepond\Filepond;
use Laravel\Nova\Fields\Repeater\Repeatable;
use Laravel\Nova\Fields\Text;
use Laravel\Nova\Http\Requests\NovaRequest;

class MediaRepeatable extends Repeatable
{
    public static $model = Media::class;

    public function fields(NovaRequest $request): array
    {
        return [
            Filepond::make('Изображение – UZ', 'path_uz')
                ->rules('required')
                ->prunable()
                ->size('w-100'),
            Text::make('Название – UZ', 'name_uz'),
            Text::make('Название – RU', 'name_ru'),
            Text::make('Название – EN', 'name_en'),
        ];
    }
}
