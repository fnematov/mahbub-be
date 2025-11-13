<?php

namespace Database\Seeders;

use App\Models\Location;
use Illuminate\Database\Seeder;

class LocationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $parents = Location::factory()->count(10)->create([
            'parent_id' => null,
        ]);

        $parents->each(function (Location $parent) {
            Location::factory()->count(5)->create([
                'parent_id' => $parent->id,
            ]);
        });
    }
}
