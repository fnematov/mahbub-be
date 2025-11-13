<?php

namespace Database\Factories;

use App\Models\Location;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Location>
 */
class LocationFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $hasParent = $this->faker->boolean(30); // 30% holatda child bo'ladi
        $parentId = $hasParent ? Location::inRandomOrder()->value('id') : null;

        return [
            'parent_id' => $parentId,
            'name_uz' => $this->faker->city(),
            'name_ru' => $this->faker->city(),
            'name_en' => $this->faker->city(),
            'status' => $this->faker->randomElement(['active', 'inactive']),
        ];

    }
}
