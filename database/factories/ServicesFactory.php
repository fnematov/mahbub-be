<?php

namespace Database\Factories;

use App\Models\Media;
use App\Models\Services;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<Services>
 */
class ServicesFactory extends Factory
{
    public function definition(): array
    {
        return [
            'title_uz' => $this->faker->word() . '(UZ)',
            'title_ru' => $this->faker->word() . ' (RU)',
            'title_en' => $this->faker->word() . '(EN)',
            'main_info_uz' => $this->faker->sentence() . ' (UZ)',
            'main_info_ru' => $this->faker->sentence() . ' (RU)',
            'main_info_en' => $this->faker->sentence() . ' (EN)',
            'add_info_uz' => $this->faker->optional()->paragraph() . ' (UZ)',
            'add_info_ru' => $this->faker->optional()->paragraph() . ' (RU)',
            'add_info_en' => $this->faker->optional()->paragraph() . ' (EN)',
            'url' => url(route('tours')),
        ];
    }

    public function configure(): Factory
    {
        return $this->afterCreating(function (Services $services) {
            Media::factory(mt_rand(1, 5))->create(['model_id' => $services->id, 'model_type' => Services::class]);
        });
    }
}
