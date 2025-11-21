<?php

namespace App\Nova;

use App\Helpers\Helper;
use Laravel\Nova\Fields\Text;
use Laravel\Nova\Http\Requests\NovaRequest;
use Laravel\Nova\Panel;
use Oneduo\NovaTimeField\Time;
use Outl1ne\MultiselectField\Multiselect;

class Contact extends Resource
{
    public static string $model = \App\Models\Contact::class;


    public static $title = 'id';

    public static $search = [
        'id',
    ];

    public static function label(): string
    {
        return 'Контакты';
    }


    public function fields(NovaRequest $request)
    {
        return [
            Panel::make('Контактные данные', [
                Text::make('Позиция – UZ', 'position_uz')
                    ->maxlength(255)
                    ->required()
                    ->sortable()
                    ->hideFromIndex()
                    ->size('w-1/3'),
                Text::make('Позиция – RU', 'position_ru')
                    ->maxlength(255)
                    ->required()
                    ->sortable()
                    ->size('w-1/3'),
                Text::make('Позиция – EN', 'position_en')
                    ->maxlength(255)
                    ->required()
                    ->sortable()
                    ->hideFromIndex()
                    ->size('w-1/3'),

                Text::make('Имя менеджера', 'manager_name')
                    ->maxlength(255)
                    ->required()
                    ->sortable()
                    ->size('w-1/3'),
                Text::make('1-номер телефона', 'phone1')
                    ->maxlength(255)
                    ->required()
                    ->sortable()
                    ->size('w-1/3'),
                Text::make('2-номер телефона', 'phone2')
                    ->maxlength(255)
                    ->required()
                    ->sortable()
                    ->hideFromIndex()
                    ->size('w-1/3'),

                Multiselect::make('График работы', 'working_days')
                    ->options(Helper::getWeekDays())
                    ->saveAsJSON()
                    ->hideFromIndex()
                    ->size('w-4/6'),

                Time::make('С', 'from')
                    ->required()
                    ->sortable()
                    ->size('w-1/6'),
                Time::make('До', 'to')
                    ->required()
                    ->sortable()
                    ->size('w-1/6'),

            ]),
        ];
    }
}
