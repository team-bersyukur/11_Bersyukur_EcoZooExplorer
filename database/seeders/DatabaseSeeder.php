<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Bangunan;
use App\Models\Treasure;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call([
            UserSeeder::class,
            ZonaSeeder::class,
            HewanSeeder::class,
            BangunanSeeder::class,
            TreasureSeeder::class,
        ]);
    }
}
