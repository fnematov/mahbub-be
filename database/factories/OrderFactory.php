<?php

namespace Database\Factories;

use App\Models\Order;
use App\Models\Tour;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<Order>
 */
class OrderFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'tour_id' => Tour::inRandomOrder()->value('id') ?? Tour::factory(),
            'name' => $this->faker->name(),
            'phone' => $this->faker->phoneNumber(),
            'month' => $this->faker->monthName(),
            'adult_count' => $this->faker->numberBetween(1, 5),
            'child_count' => $this->faker->optional()->numberBetween(0, 3),
            'status' => $this->faker->randomElement(['pending', 'confirmed', 'cancelled']),
        ];
    }
}
