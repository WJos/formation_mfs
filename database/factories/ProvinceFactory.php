<?php

namespace Database\Factories;

use App\Models\Region;
use App\Models\Province;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<Province>
 */
class ProvinceFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'code' => 'PRO-' . fake()->unique()->numerify('###'),
            'nom' => fake()->unique()->city(),
            'region_id' => Region::factory(),
        ];
    }
}
