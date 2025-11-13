<?php

namespace Database\Factories;

use App\Models\AboutUs;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<AboutUs>
 */
class AboutUsFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'main_info_uz' => $this->faker->paragraph(),
            'main_info_ru' => $this->faker->paragraph(),
            'main_info_en' => $this->faker->paragraph(),
            'add_info_uz' => $this->faker->optional()->paragraph(),
            'add_info_ru' => $this->faker->optional()->paragraph(),
            'add_info_en' => $this->faker->optional()->paragraph(),
        ];
    }
}
