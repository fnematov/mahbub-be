<?php

namespace Database\Factories;

use App\Models\Services;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<Services>
 */
class ServicesFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'main_info_uz' => $this->faker->sentence() . ' (UZ)',
            'main_info_ru' => $this->faker->sentence() . ' (RU)',
            'main_info_en' => $this->faker->sentence() . ' (EN)',
            'add_info_uz' => $this->faker->optional()->paragraph() . ' (UZ)',
            'add_info_ru' => $this->faker->optional()->paragraph() . ' (RU)',
            'add_info_en' => $this->faker->optional()->paragraph() . ' (EN)',
        ];
    }
}
