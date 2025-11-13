<?php

namespace Database\Seeders;

use App\Models\AboutUs;
use App\Models\Address;
use App\Models\Article;
use App\Models\Contact;
use App\Models\Order;
use App\Models\QuestionAnswer;
use App\Models\Review;
use App\Models\Services;
use App\Models\TourRoute;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    use WithoutModelEvents;

    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call([
            LocationSeeder::class,
            TourSeeder::class,
            MediaSeeder::class,
        ]);
        TourRoute::factory()->count(20)->create();

        AboutUs::factory()->create();
        Article::factory()->count(5)->create();
        Contact::factory()->count(5)->create();
        Address::factory()->create();
        QuestionAnswer::factory()->count(20)->create();
        Services::factory()->count(15)->create();
        Order::factory()->count(15)->create();
        Review::factory()->count(15)->create();

        User::factory()->create([
            'name' => 'Test User',
            'email' => 'test@example.com',
        ]);
    }
}
