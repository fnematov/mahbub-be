<?php

namespace App\Nova;

use App\Models\TourGroup as TourGroupModel;
use Illuminate\Http\Request;
use Laravel\Nova\Fields\BelongsToMany;
use Laravel\Nova\Fields\Text;
use Outl1ne\MultiselectField\Multiselect;

class TourGroup extends Resource
{
    public static string $model = TourGroupModel::class;

    public static $title = 'id';

    public static $search = [
        'id', 'name_uz', 'name_ru', 'name_en'
    ];

    public static function label(): string
    {
        return 'Тур группы';
    }

    public function fields(Request $request): array
    {
        return [
            Text::make('Название Uz', 'name_uz')
                ->sortable()
                ->size('w-1/3')
                ->rules('required'),

            Text::make('Название Ru', 'name_ru')
                ->sortable()
                ->size('w-1/3')
                ->rules('required'),

            Text::make('Название En', 'name_en')
                ->sortable()
                ->size('w-1/3')
                ->rules('required'),

            Text::make('Описание Uz', 'description_uz')
                ->sortable()
                ->size('w-1/3')
                ->rules('nullable'),

            Text::make('Описание Ru', 'description_ru')
                ->sortable()
                ->size('w-1/3')
                ->rules('nullable'),

            Text::make('Описание En', 'description_en')
                ->sortable()
                ->size('w-1/3')
                ->rules('nullable'),

            Multiselect::make('Туры', 'tours')
                ->options(\App\Models\Tour::all()->pluck('name_ru', 'id'))
                ->asyncResource(Tour::class)
                ->belongsToMany(Tour::class)
                ->hideFromIndex()
                ->onlyOnForms()
                ->size('w-4/6'),

            BelongsToMany::make('Туры', 'tours', Tour::class)
                ->onlyOnDetail(),
        ];
    }
}
