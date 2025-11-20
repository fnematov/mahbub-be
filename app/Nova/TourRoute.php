<?php

namespace App\Nova;

use Laravel\Nova\Fields\ID;
use Laravel\Nova\Http\Requests\NovaRequest;

class TourRoute extends Resource
{
    public static string $model = \App\Models\TourRoute::class;

    public static $title = 'id';

    public static $search = [
        'id',
    ];

    public function fields(NovaRequest $request): array
    {
        return [
            ID::make()->sortable(),
        ];
    }
}
