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
            'banner_title_uz' => $this->faker->word(),
            'banner_title_ru' => $this->faker->word(),
            'banner_title_en' => $this->faker->word(),
            'banner_description_uz' => $this->faker->text(),
            'banner_description_ru' => $this->faker->text(),
            'banner_description_en' => $this->faker->text(),
            'contact_phone' => $this->faker->phoneNumber(),
            'contact_email' => $this->faker->unique()->safeEmail(),
            'website_title' => $this->faker->word(),
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ];
    }
}
