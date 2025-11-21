<?php

namespace Database\Factories;

use App\Enums\OrderStatusEnum;
use App\Models\Order;
use App\Models\Tour;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<Order>
 */
class OrderFactory extends Factory
{
    public function definition(): array
    {
        return [
            'tour_id' => Tour::inRandomOrder()->value('id') ?? Tour::factory(),
            'name' => $this->faker->name(),
            'phone' => $this->faker->phoneNumber(),
            'month' => $this->faker->numberBetween(1, 12),
            'adult_count' => $this->faker->numberBetween(1, 5),
            'child_count' => $this->faker->optional()->numberBetween(0, 3),
            'status' => $this->faker->randomElement(OrderStatusEnum::values()),
        ];
    }
}
