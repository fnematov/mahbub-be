<?php

namespace Database\Factories;

use App\Models\Address;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<Address>
 */
class AddressFactory extends Factory
{
    public function definition(): array
    {
        return [
            'address_uz' => $this->faker->address() . ' (UZ)',
            'address_ru' => $this->faker->address() . ' (RU)',
            'address_en' => $this->faker->address() . ' (EN)',
            'location' => ['lat' => $this->faker->latitude(), 'lng' => $this->faker->longitude()],
        ];
    }
}
