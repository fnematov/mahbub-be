<?php

namespace App\Nova;

use Laravel\Nova\Fields\ID;
use Laravel\Nova\Fields\Text;
use Laravel\Nova\Fields\Textarea;
use Laravel\Nova\Http\Requests\NovaRequest;
use Laravel\Nova\Panel;

class QuestionAnswer extends Resource
{

    public static $model = \App\Models\QuestionAnswer::class;


    public static $title = 'title_ru';


    public static $search = [
        'id', 'title_uz', 'title_ru', 'title_en',
    ];

    public static function label(): string
    {
        return 'Вопросы и ответы';
    }

    public function fields(NovaRequest $request)
    {
        return [
            ID::make()->sortable(),

            Panel::make('Вопросы и ответы', [
                Text::make('Вопрос – UZ', 'question_uz')
                    ->required()
                    ->maxlength(255)
                    ->hideFromIndex(),
                Textarea::make('Ответ – UZ', 'answer_uz')
                    ->required()
                    ->hideFromIndex(),
                Text::make('Вопрос – RU', 'question_ru')
                    ->required()
                    ->maxlength(255),
                Textarea::make('Ответ – RU', 'answer_ru')
                    ->required(),
                Text::make('Вопрос – EN', 'question_en')
                    ->hideFromIndex()
                    ->required()
                    ->maxlength(255),
                Textarea::make('Ответ – EN', 'answer_en')
                    ->required()
                    ->hideFromIndex(),
            ]),


        ];
    }

}
