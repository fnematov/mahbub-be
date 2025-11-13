<?php

namespace Database\Seeders;

use App\Models\Location;
use App\Models\Tour;
use Illuminate\Database\Seeder;

class TourSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        if (Location::count() === 0) {
            Location::factory()->count(10)->create();
        }

        // Har bir location uchun 3 ta tour
        $locations = Location::all();
        foreach ($locations as $location) {
            Tour::factory()->count(3)->create([
                'location_id' => $location->id,
            ]);
        }
    }
}
