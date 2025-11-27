<?php

namespace Database\Factories;

use App\Models\Settings;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Carbon;

class SettingsFactory extends Factory
{
    protected $model = Settings::class;

    public function definition(): array
    {
        return [
            'banner_title_uz' => 'O\'zbekistonga <br>xush kelibsiz',
            'banner_title_ru' => 'Добро пожаловать <br>в Узбекистан',
            'banner_title_en' => 'Welcome to <br>Uzbekistan',
            'banner_description_uz' => 'O\'zingizga mos sayohatni osonlik bilan toping va turingizni hoziroq bron qiling',
            'banner_description_ru' => 'Найдите свой идеальный путешествие с легкостью и забронируйте ваш тур прямо сейчас',
            'banner_description_en' => 'Find your perfect trip with ease and book your tour now',
            'contact_phone' => '+998 (88) 800 9000',
            'contact_email' => 'info@mahbub.uz',
            'website_title' => 'Mahbub Tour',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ];
    }
}
