<?php

namespace Database\Seeders;

use App\Models\Partner;
use App\Models\Settings;
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
        $this->call(LocationsSeeder::class);
        $this->call(ToursSeeder::class);
        $this->call(TourGroupsSeeder::class);

        $this->call(AboutUsSeeder::class);
        $this->call(ArticlesSeeder::class);
        $this->call(ContactsSeeder::class);
        $this->call(AddressesSeeder::class);
        $this->call(QuestionAnswerSeeder::class);
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
