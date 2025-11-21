<?php

namespace Database\Factories;

use App\Models\AboutUs;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<AboutUs>
 */
class AboutUsFactory extends Factory
{
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

    public function configure(): Factory|AboutUsFactory
    {
        return $this->afterCreating(function (AboutUs $aboutUs) {
            $aboutUs->media()->saveMany(MediaFactory::new()->count(3)->make());
        });
    }
}
