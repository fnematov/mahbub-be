<?php

namespace Database\Factories;

use App\Enums\BaseStatusEnum;
use App\Models\Article;
use App\Models\Media;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<Article>
 */
class ArticleFactory extends Factory
{
    public function definition(): array
    {
        return [
            'title_uz' => $this->faker->sentence() . ' (UZ)',
            'title_ru' => $this->faker->sentence() . ' (RU)',
            'title_en' => $this->faker->sentence() . ' (EN)',
            'description_uz' => $this->faker->paragraph() . ' (UZ)',
            'description_ru' => $this->faker->paragraph() . ' (RU)',
            'description_en' => $this->faker->paragraph() . ' (EN)',
            'content_uz' => $this->faker->text(500) . ' (UZ)',
            'content_ru' => $this->faker->text(500) . ' (RU)',
            'content_en' => $this->faker->text(500) . ' (EN)',
            'status' => BaseStatusEnum::ACTIVE,
        ];
    }

    public function configure(): ServicesFactory|Factory
    {
        return $this->afterCreating(function (Article $services) {
            Media::factory(mt_rand(1, 5))->create(['model_id' => $services->id, 'model_type' => Article::class]);
        });
    }
}
