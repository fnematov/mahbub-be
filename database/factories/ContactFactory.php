<?php

namespace Database\Factories;

use App\Models\Contact;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<Contact>
 */
class ContactFactory extends Factory
{
    public function definition(): array
    {
        $working_days = $this->faker->randomElements(
            [1, 2, 3, 4, 5, 6, 7],
            rand(4, 6)
        );
        sort($working_days);
        return [
            'position_uz' => $this->faker->jobTitle() . ' (UZ)',
            'position_ru' => $this->faker->jobTitle() . ' (RU)',
            'position_en' => $this->faker->jobTitle() . ' (EN)',
            'manager_name' => $this->faker->name(),
            'phone1' => $this->faker->phoneNumber(),
            'phone2' => $this->faker->phoneNumber(),
            'working_days' => $working_days,
            'from' => $this->faker->time('H:i', '09:00'),
            'to' => $this->faker->time('H:i', '18:00'),
        ];
    }
}
