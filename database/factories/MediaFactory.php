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
            'storage/img.png',
            'storage/img_1.png',
            'storage/img_2.png',
            'storage/img_3.png',
            'storage/img_4.png',
            'storage/img_5.png',
            'storage/img_6.png',
            'storage/img_7.png',
            'storage/img_8.png',
            'storage/img_9.png',
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
