<?php

namespace App\Nova;

use App\Enums\BaseStatusEnum;
use App\Nova\Repeater\LocationRepeatable;
use Arr;
use Illuminate\Database\Eloquent\Builder;
use Laravel\Nova\Fields\Badge;
use Laravel\Nova\Fields\HasMany;
use Laravel\Nova\Fields\Repeater;
use Laravel\Nova\Fields\Select;
use Laravel\Nova\Fields\Text;
use Laravel\Nova\Http\Requests\NovaRequest;

class Location extends Resource
{
    public static string $model = \App\Models\Location::class;

    public static $title = 'name_ru';

    public static $search = [
        'id', 'name_ru', 'name_en', 'name_uz'
    ];

    public static function label(): string
    {
        return 'Страны';
    }

    public static function indexQuery(NovaRequest $request, $query): Builder
    {
        if ($request->viaResource() === null && $request->isResourceIndexRequest()) {
            return $query->whereNull('parent_id');
        }

        return parent::indexQuery($request, $query);
    }

    public function fields(NovaRequest $request): array
    {
        return [
            Text::make('Название страны – UZ', 'name_uz')
                ->maxlength(255)
                ->required()
                ->sortable()
                ->hideFromIndex()
                ->size('w-1/3'),
            Text::make('Название страны – RU', 'name_ru')
                ->maxlength(255)
                ->required()
                ->sortable()
                ->size('w-1/3'),
            Text::make('Название страны – EN', 'name_en')
                ->maxlength(255)
                ->required()
                ->sortable()
                ->hideFromIndex()
                ->size('w-1/3'),

            Text::make('Города', fn() => Arr::join($this->children->pluck('name_ru')->toArray(), ', ')),

            Badge::make('Статус', 'status')
                ->map(BaseStatusEnum::iconMap())
                ->label(fn() => $this->status->title())
                ->withIcons()
                ->size('w-1/4'),

            Select::make('Статус', 'status')
                ->options(BaseStatusEnum::selectOptions())
                ->onlyOnForms()
                ->size('w-1/3'),

            HasMany::make('Городи в этом стране', 'children', self::class),

            Repeater::make('Городи в этом стране', 'children')
                ->repeatables([
                    LocationRepeatable::make()
                ])
                ->uniqueField('name_ru')
                ->size()
                ->asHasMany(self::class)
        ];
    }
}
