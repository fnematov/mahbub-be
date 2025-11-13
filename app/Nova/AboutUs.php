<?php

namespace App\Nova;

use App\Models\AboutUs as AboutUsModel;
use App\Nova\Repeater\MediaRepeatable;
use Illuminate\Http\Request;
use Laravel\Nova\Fields\ID;
use Laravel\Nova\Fields\Repeater;
use Laravel\Nova\Fields\Text;

class AboutUs extends Resource
{
    public static string $model = AboutUsModel::class;

    public static $title = 'id';

    public static $search = [
        'id', 'main_info_uz', 'main_info_ru', 'main_info_en'
    ];

    public function fields(Request $request): array
    {
        return [
            ID::make()->sortable(),

            Text::make('Main Info Uz')
                ->sortable()
                ->rules('required'),

            Text::make('Main Info Ru')
                ->sortable()
                ->rules('required'),

            Text::make('Main Info En')
                ->sortable()
                ->rules('required'),

            Text::make('Add Info Uz')
                ->sortable()
                ->rules('nullable'),

            Text::make('Add Info Ru')
                ->sortable()
                ->rules('nullable'),

            Text::make('Add Info En')
                ->sortable()
                ->rules('nullable'),

            Repeater::make('Media', 'media')
                ->initialRows(6)
                ->repeatables([
                    MediaRepeatable::make()
                ])
        ];
    }
}
