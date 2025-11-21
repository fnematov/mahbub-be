<?php

namespace Database\Factories;

use App\Models\Location;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<Location>
 */
class LocationFactory extends Factory
{
    public function definition(): array
    {
        $paths = [
            'storage/uzb-flag.svg',
            'storage/turkie-flug.svg',
            'storage/egypt-flag.svg',
            'storage/georgia-flag.svg',
        ];
        return [
            'name_uz' => $this->faker->city(),
            'name_ru' => $this->faker->city(),
            'name_en' => $this->faker->city(),
            'flag' => $this->faker->randomElement($paths),
            'status' => $this->faker->randomElement(['active', 'inactive']),
        ];
    }

    public function configure(): LocationFactory|Factory
    {
        return $this->afterCreating(function (Location $location) {
            $location->children()->saveMany(Location::factory(mt_rand(3, 6))->make());
        });
    }
}
