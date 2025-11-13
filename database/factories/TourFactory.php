<?php

namespace Database\Factories;

use App\Models\Location;
use App\Models\Tour;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<Tour>
 */
class TourFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'location_id' => Location::inRandomOrder()->first()?->id ?? Location::factory(),
            'name_uz' => $this->faker->sentence(3) . ' (UZ)',
            'name_ru' => $this->faker->sentence(3) . ' (RU)',
            'name_en' => $this->faker->sentence(3) . ' (EN)',
            'status' => $this->faker->randomElement(['active', 'inactive']),
            'price_adult' => $this->faker->randomFloat(2, 100, 2000),
            'price_child' => $this->faker->randomFloat(2, 50, 1000),
            'days_count' => $this->faker->numberBetween(1, 14),
            'nights_count' => $this->faker->numberBetween(1, 13),
            'info_tour_uz' => $this->faker->paragraph(),
            'info_tour_ru' => $this->faker->paragraph(),
            'info_tour_en' => $this->faker->paragraph(),
        ];
    }
}
