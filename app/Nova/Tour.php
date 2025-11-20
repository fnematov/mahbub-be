<?php

namespace App\Nova;

use App\Enums\BaseStatusEnum;
use App\Enums\TourStatusEnum;
use App\Nova\Flexible\Resolvers\TourRouteResolver;
use Eminiarts\Tabs\Tab;
use Eminiarts\Tabs\Tabs;
use Eminiarts\Tabs\Traits\HasTabs;
use Laravel\Nova\Fields\Badge;
use Laravel\Nova\Fields\Currency;
use Laravel\Nova\Fields\FormData;
use Laravel\Nova\Fields\Number;
use Laravel\Nova\Fields\Select;
use Laravel\Nova\Fields\Text;
use Laravel\Nova\Fields\Textarea;
use Laravel\Nova\Http\Requests\NovaRequest;
use Laravel\Nova\Panel;
use Whitecube\NovaFlexibleContent\Flexible;

class Tour extends Resource
{
    use HasTabs;

    public static string $model = \App\Models\Tour::class;

    public static $title = 'id';

    public static $search = [
        'id',
    ];

    public function fields(NovaRequest $request): array
    {
        return [

            Panel::make('Данные о туре', [
                Text::make('Название – UZ', 'name_uz')
                    ->rules('required', 'max:255')
                    ->hideFromIndex()
                    ->size('w-1/3'),
                Text::make('Название – RU', 'name_ru')
                    ->rules('required', 'max:255')
                    ->size('w-1/3'),
                Text::make('Название – EN', 'name_en')
                    ->rules('required', 'max:255')
                    ->hideFromIndex()
                    ->size('w-1/3'),
                Select::make('Страна', 'country')
                    ->rules('required')
                    ->hideFromIndex()
                    ->options(
                        \App\Models\Location::all()
                            ->whereNull('parent_id')
                            ->pluck('name_ru', 'id')
                    )
                    ->size('w-1/3'),


                Select::make('Город', 'location_id')
                    ->options([])
                    ->rules('required')
                    ->hideFromIndex()
                    ->dependsOn('country', function (Select $field, NovaRequest $request, FormData $formData) {
                        if ($formData->country) {
                            $options = \App\Models\Location::all()
                                ->where('parent_id', $formData->country)
                                ->pluck('name_ru', 'id');

                            $field->options($options);
                        }
                    })->size('w-1/3'),

                Select::make('Статус', 'status')
                    ->options(TourStatusEnum::selectOptions())
                    ->required()
                    ->size('w-1/3'),

                Badge::make('Статус', 'status')
                    ->map(BaseStatusEnum::iconMap())
                    ->label(fn() => $this->status->title())
                    ->withIcons(),

                Currency::make('Цена для взрослых', 'price_adult')
                    ->rules('required', 'numeric')
                    ->hideFromIndex()
                    ->size('w-1/3'),
                Currency::make('Цена для детей', 'price_child')
                    ->rules('required', 'numeric')
                    ->hideFromIndex()
                    ->size('w-1/3'),
                Number::make('Дней', 'days_count')
                    ->sortable()
                    ->rules('required', 'integer')
                    ->size('w-1/6'),
                Number::make('Ночей', 'nights_count')
                    ->sortable()
                    ->rules('required', 'integer')
                    ->size('w-1/6'),
            ]),

            Tabs::make('Tabs', [
                Tab::make('Информация о туре', [
                    Textarea::make('Информация о туре – UZ', 'info_tour_uz')
                        ->required()
                        ->size(),
                    Textarea::make('Информация о туре – RU', 'info_tour_ru')
                        ->required()
                        ->size(),
                    Textarea::make('Информация о туре – EN', 'info_tour_en')
                        ->required()
                        ->size()
                ])->name('tab-1'),
                Tab::make('Маршрут тура', [
                    Flexible::make(null)
                        ->addLayout('день', 'tour_routes', [
                            Text::make('Название – UZ', 'name_uz')
                                ->maxlength(255)
                                ->required()
                                ->hideFromIndex()
                                ->size('w-1/3'),
                            Text::make('Название – RU', 'name_ru')
                                ->maxlength(255)
                                ->required()
                                ->size('w-1/3'),
                            Text::make('Название – EN', 'name_en')
                                ->maxlength(255)
                                ->required()
                                ->hideFromIndex()
                                ->size('w-1/3'),

                            Currency::make('Дополнительная цена для взрослых', 'add_price_adult')
                                ->currency('UZS')
                                ->rules('required', 'numeric')
                                ->size('w-1/3'),
                            Currency::make('Дополнительная цена для детей', 'add_price_child')
                                ->currency('UZS')
                                ->rules('required', 'numeric')
                                ->size('w-1/3'),

                            Textarea::make('Описание маршрута – UZ', 'description_tour_uz')
                                ->size(),
                            Textarea::make('Описание маршрута – RU', 'description_tour_ru')
                                ->size(),
                            Textarea::make('Описание маршрута – EN', 'description_tour_en')
                                ->size()
                        ])
                        ->button('Добавить день')
                        ->withMeta([
                            'wrapperClass' => 'my-flexible-wrapper',
                        ])
                        ->resolver(TourRouteResolver::class)
                        ->fullWidth(),
                ])->name('tab-2')->addBodyClass('custom-tab'),
            ]),
        ];
    }
}
