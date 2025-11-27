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
        $paths = [
            'img.png',
            'img_1.png',
            'img_2.png',
            'img_3.png',
            'img_4.png',
            'img_5.png',
            'img_6.png',
            'img_7.png',
            'img_8.png',
            'img_9.png',
        ];
        return [
            'model_type' => 'App\\Models\\Article',
            'model_id' => 1,

            'path_uz' => $this->faker->randomElement($paths),
            'path_ru' => $this->faker->randomElement($paths),
            'path_en' => $this->faker->randomElement($paths),

            'name_uz' => $this->faker->word() . ' (UZ)',
            'name_ru' => $this->faker->word() . ' (RU)',
            'name_en' => $this->faker->word() . ' (EN)',
        ];
    }
}
