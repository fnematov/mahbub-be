<?php

namespace App\Nova;

use App\Enums\ReviewStatusEnum;
use Laravel\Nova\Fields\Badge;
use Laravel\Nova\Fields\BelongsTo;
use Laravel\Nova\Fields\DateTime;
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
        'id', 'full_name'
    ];

    public static function label(): string
    {
        return 'Отзывы от туристов';
    }

    public function fields(NovaRequest $request)
    {
        return [
            Panel::make('Название тура', [
                BelongsTo::make('Тур', 'tour', Tour::class)
                    ->required()
                    ->sortable()
                    ->size('w-1/3'),
                Text::make('Имя туриста', 'full_name')
                    ->maxlength(255)
                    ->required()
                    ->sortable()
                    ->size('w-1/3'),
                DateTime::make('Дата оставления отзыва', 'created_at')
                    ->required()
                    ->sortable()
                    ->size('w-1/3'),
                Text::make('Номер телефона туриста', 'phone')
                    ->maxlength(255)
                    ->required()
                    ->sortable()
                    ->hideFromIndex()
                    ->size('w-1/4'),

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
                    ->size('w-1/4'),
                Select::make('Оценка модератора', 'moderator_rate')
                    ->options([
                        0 => '0',
                        200 => '200',
                        400 => '400',
                        600 => '600',
                        800 => '800',
                        1000 => '1000',
                    ])
                    ->required()
                    ->sortable()
                    ->hideFromIndex()
                    ->size('w-1/4'),

                Select::make('Статус', 'status')
                    ->options(ReviewStatusEnum::selectOptions())
                    ->required()
                    ->sortable()
                    ->hideFromIndex()
                    ->size('w-1/4'),

                Badge::make('Статус', 'status')
                    ->map(ReviewStatusEnum::iconMap())
                    ->label(fn() => $this->status->title())
                    ->withIcons()
                    ->size('w-1/4'),

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

