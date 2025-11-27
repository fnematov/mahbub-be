<?php

namespace Database\Seeders;

use App\Models\AboutUs;
use App\Models\Address;
use App\Models\Article;
use App\Models\Contact;
use App\Models\Location;
use App\Models\Order;
use App\Models\Partner;
use App\Models\QuestionAnswer;
use App\Models\Review;
use App\Models\Settings;
use App\Models\Tour;
use App\Models\TourGroup;
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
        Location::factory()->count(10)->create();
        Tour::factory()->count(50)->create();
        TourGroup::factory()->count(5)->create();

        AboutUs::factory()->create();
        Article::factory()->count(25)->create();
        Contact::factory()->count(5)->create();
        Address::factory()->create();
        QuestionAnswer::factory()->count(20)->create();
        Order::factory()->count(15)->create();
        Review::factory()->count(15)->create();
        Partner::factory()->count(10)->create();
        Settings::factory()->count(1)->create();

        User::factory()->create([
            'name' => 'Admin',
            'email' => 'admin@gmail.com',
        ]);

        $this->call([
            ServicesSeeder::class
        ]);
    }
}
