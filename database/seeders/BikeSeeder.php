<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class BikeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        \App\Models\Bike::insert([
            ['brand' => 'Cinelli', 'model' => 'Zydeco lala -m', 'year' => 2022],
            ['brand' => 'Giant', 'model' => 'Defy Advanced 2', 'year' => 2024],
            ['brand' => 'Pinarello', 'model' => 'Dogma F', 'year' => 2023],
        ]);
    }
}
