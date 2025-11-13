<?php

namespace Database\Factories;

use App\Models\Tour;
use App\Models\TourRoute;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<TourRoute>
 */
class TourRouteFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'tour_id' => Tour::inRandomOrder()->first()?->id ?? Tour::factory(),
            'name_uz' => $this->faker->city() . ' marshruti',
            'name_ru' => 'Маршрут ' . $this->faker->city(),
            'name_en' => $this->faker->city() . ' route',
            'add_price_adult' => $this->faker->randomFloat(2, 50, 300),
            'add_price_child' => $this->faker->randomFloat(2, 20, 150),
            'description_tour_uz' => $this->faker->sentence(10),
            'description_tour_ru' => $this->faker->sentence(10),
            'description_tour_en' => $this->faker->sentence(10),
        ];
    }
}
