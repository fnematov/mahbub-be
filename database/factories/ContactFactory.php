<?php

namespace Database\Factories;

use App\Models\Contact;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<Contact>
 */
class ContactFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'position_uz' => $this->faker->jobTitle() . ' (UZ)',
            'position_ru' => $this->faker->jobTitle() . ' (RU)',
            'position_en' => $this->faker->jobTitle() . ' (EN)',
            'manager_name' => $this->faker->name(),
            'phone1' => [$this->faker->phoneNumber()],
            'phone2' => $this->faker->optional()->randomElement([
                [$this->faker->phoneNumber()],
                null
            ]),
            'working_days' => $this->faker->randomElements(
                ['Mon', 'Tue', 'Wed', 'Thu', 'Fri', 'Sat'],
                rand(4, 6)
            ),
            'from' => $this->faker->time('H:i', '09:00'),
            'to' => $this->faker->time('H:i', '18:00'),
        ];
    }
}
