<?php

namespace Database\Factories;

use App\Models\Media;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<Media>
 */
class MediaFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'model_type' => 'App\\Models\\Article', // sinov uchun bitta model turi
            'model_id' => 1, // sinov uchun 1, seederda random qilamiz

            'path_uz' => 'storage/media/' . $this->faker->uuid() . '.jpg',
            'path_ru' => 'storage/media/' . $this->faker->uuid() . '.jpg',
            'path_en' => 'storage/media/' . $this->faker->uuid() . '.jpg',

            'name_uz' => $this->faker->word() . ' (UZ)',
            'name_ru' => $this->faker->word() . ' (RU)',
            'name_en' => $this->faker->word() . ' (EN)',
        ];
    }
}
