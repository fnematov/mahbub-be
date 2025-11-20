<?php

namespace App\Nova;

use Laravel\Nova\Fields\Select;
use Laravel\Nova\Fields\Text;
use Laravel\Nova\Fields\Textarea;
use Laravel\Nova\Http\Requests\NovaRequest;
use Laravel\Nova\Panel;

class Review extends Resource
{

    public static string $model = \App\Models\Review::class;

    public static $title = 'id';


    public static $search = [
        'id',
    ];

    public static function label(): string
    {
        return 'Отзывы от туристов';
    }

    public function fields(NovaRequest $request)
    {
        return [
            Panel::make('Название тура', [
                Text::make('Имя туриста', 'full_name')
                    ->maxlength(255)
                    ->required()
                    ->sortable()
                    ->size('w-1/3'),
                Text::make('Дата оставления отзыва', 'created_at')
                    ->maxlength(255)
                    ->required()
                    ->sortable()
                    ->size('w-1/3'),
                Text::make('Номер телефона туриста', 'phone')
                    ->maxlength(255)
                    ->required()
                    ->sortable()
                    ->hideFromIndex()
                    ->size('w-1/3'),

                Select::make('Рейтинг', 'rating')
                    ->options([
                        1 => '1',
                        2 => '2',
                        3 => '3',
                        4 => '4',
                        5 => '5',
                    ])
                    ->displayUsingLabels() // admin panelda label ko‘rinadi
                    ->sortable()
                    ->rules('required', 'integer', 'min:1', 'max:5')
                    ->size('w-1/3'),
                Text::make('ID тура', 'tour_id')
                    ->maxlength(255)
                    ->required()
                    ->sortable()
                    ->size('w-1/3'),
                Text::make('Оценка модератора', 'moderator_rate')
                    ->maxlength(255)
                    ->required()
                    ->sortable()
                    ->hideFromIndex()
                    ->size('w-1/3'),

                Textarea::make('Содержание отзыва – UZ (Оригинал)', 'comment_uz')
                    ->rules('required')
                    ->hideFromIndex()
                    ->size(),

                Textarea::make('Содержание отзыва – RU (Оригинал)', 'comment_ru')
                    ->rules('required')
                    ->hideFromIndex()
                    ->size(),

                Textarea::make('Содержание отзыва – EN (Оригинал)', 'comment_en')
                    ->rules('required')
                    ->hideFromIndex()
                    ->size(),
            ])
        ];
    }
}

