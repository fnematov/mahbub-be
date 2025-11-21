<?php

namespace App\Nova;

use App\Models\AboutUs as AboutUsModel;
use App\Nova\Repeater\MediaRepeatable;
use Fnematov\CustomRepeater\CustomRepeater;
use Illuminate\Http\Request;
use Laravel\Nova\Fields\MorphMany;
use Laravel\Nova\Panel;
use Mostafaznv\NovaCkEditor\CkEditor;

class AboutUs extends Resource
{
    public static string $model = AboutUsModel::class;

    public static $title = 'id';

    public static $search = [
        'id', 'main_info_uz', 'main_info_ru', 'main_info_en'
    ];

    public static function label(): string
    {
        return 'О нас';
    }


    public function fields(Request $request): array
    {
        return [
            Panel::make("Основная информация", [
                CkEditor::make('Текстовая поля – UZ', 'main_info_uz')
                    ->stacked()
                    ->rules('required'),

                CkEditor::make('Текстовая поля – RU', 'main_info_ru')
                    ->stacked()
                    ->rules('required'),

                CkEditor::make('Текстовая поля – EN', 'main_info_en')
                    ->stacked()
                    ->rules('required'),

            ]),

            MorphMany::make('Изображение', 'media', NamedMedia::class)
                ->onlyOnDetail(),

            CustomRepeater::make('Media', 'media')
                ->repeatables([
                    MediaRepeatable::make()
                ])
                ->uniqueField('name_ru')
                ->stacked()
                ->fullWidth()
                ->asMorphMany(NamedMedia::class)
                ->withMeta([
                    'fieldClass' => 'about-us-wrapper',
                    'fieldComponentClass' => 'about-us-item'
                ]),
        ];
    }
}
