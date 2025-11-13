<?php

namespace Database\Seeders;

use App\Models\Article;
use App\Models\Media;
use App\Models\Services;
use Illuminate\Database\Seeder;

class MediaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $articles = Article::all();
        foreach ($articles as $article) {
            Media::factory()->count(2)->create([
                'model_type' => Article::class,
                'model_id' => $article->id,
            ]);
        }

        $services = Services::all();
        foreach ($services as $service) {
            Media::factory()->count(2)->create([
                'model_type' => Services::class,
                'model_id' => $service->id,
            ]);
        }
    }
}
