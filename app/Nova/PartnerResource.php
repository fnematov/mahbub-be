<?php

namespace App\Nova;

use App\Models\Partner;
use DigitalCreative\Filepond\Filepond;
use Illuminate\Http\Request;
use Laravel\Nova\Fields\ID;
use Laravel\Nova\Fields\Text;

class PartnerResource extends Resource
{
    public static string $model = Partner::class;

    public static $title = 'name';

    public static $search = [
        'id', 'name'
    ];

    public function fields(Request $request): array
    {
        return [
            ID::make()->sortable(),

            Text::make('Name')
                ->sortable()
                ->stacked()
                ->fullWidth()
                ->rules('required'),

            Filepond::make('Logo')
                ->sortable()
                ->rules('required'),
        ];
    }
}
