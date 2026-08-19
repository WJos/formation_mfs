<?php

namespace Database\Seeders;

use App\Models\Region;
use App\Models\Province;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProvinceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Province::factory()->count(15)->create();

        $regions = Region::factory()
            ->count(17)
            ->create();

        Province::factory()
            ->count(47)
            ->recycle($regions)
            ->create();

    }
}
