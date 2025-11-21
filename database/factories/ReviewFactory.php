<?php

namespace Database\Factories;

use App\Models\Review;
use App\Models\Tour;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<Review>
 */
class ReviewFactory extends Factory
{
    public function definition(): array
    {
        return [
            'full_name' => $this->faker->name(),
            'phone' => $this->faker->phoneNumber(),
            'rating' => $this->faker->numberBetween(1, 5),
            'tour_id' => Tour::inRandomOrder()->first()?->id ?? Tour::factory(),
            'moderator_rate' => $this->faker->optional()->numberBetween(1, 10),
            'comment_uz' => $this->faker->sentence(10),
            'comment_ru' => $this->faker->sentence(10),
            'comment_en' => $this->faker->sentence(10),
        ];
    }
}
