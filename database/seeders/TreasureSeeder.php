<?php

namespace Database\Seeders;

use App\Models\Treasure;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class TreasureSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Treasure::create([
            'zona_id' => 1,
            'kode_unik' => Str::random(6),
            'lucky' => true,
        ]);
        Treasure::create([
            'zona_id' => 1,
            'kode_unik' => Str::random(6),
            'lucky' => true,
        ]);
        Treasure::create([
            'zona_id' => 1,
            'kode_unik' => Str::random(6),
            'lucky' => true,
        ]);
        Treasure::create([
            'zona_id' => 1,
            'kode_unik' => Str::random(6),
            'lucky' => false,
        ]);
        Treasure::create([
            'zona_id' => 2,
            'kode_unik' => Str::random(6),
            'lucky' => false,
        ]);
        Treasure::create([
            'zona_id' => 2,
            'kode_unik' => Str::random(6),
            'lucky' => false,
        ]);
        Treasure::create([
            'zona_id' => 2,
            'kode_unik' => Str::random(6),
            'lucky' => false,
        ]);
        Treasure::create([
            'zona_id' => 2,
            'kode_unik' => Str::random(6),
            'lucky' => false,
        ]);
        Treasure::create([
            'zona_id' => 3,
            'kode_unik' => Str::random(6),
            'lucky' => false,
        ]);
        Treasure::create([
            'zona_id' => 3,
            'kode_unik' => Str::random(6),
            'lucky' => false,
        ]);
        Treasure::create([
            'zona_id' => 3,
            'kode_unik' => Str::random(6),
            'lucky' => false,
        ]);
        Treasure::create([
            'zona_id' => 3,
            'kode_unik' => Str::random(6),
            'lucky' => false,
        ]);
        Treasure::create([
            'zona_id' => 4,
            'kode_unik' => Str::random(6),
            'lucky' => false,
        ]);
        Treasure::create([
            'zona_id' => 4,
            'kode_unik' => Str::random(6),
            'lucky' => false,
        ]);
        Treasure::create([
            'zona_id' => 4,
            'kode_unik' => Str::random(6),
            'lucky' => false,
        ]);
        Treasure::create([
            'zona_id' => 4,
            'kode_unik' => Str::random(6),
            'lucky' => false,
        ]);
        Treasure::create([
            'zona_id' => 5,
            'kode_unik' => Str::random(6),
            'lucky' => false,
        ]);
        Treasure::create([
            'zona_id' => 5,
            'kode_unik' => Str::random(6),
            'lucky' => false,
        ]);
        Treasure::create([
            'zona_id' => 5,
            'kode_unik' => Str::random(6),
            'lucky' => false,
        ]);
        Treasure::create([
            'zona_id' => 5,
            'kode_unik' => Str::random(6),
            'lucky' => false,
        ]);
        Treasure::create([
            'zona_id' => 6,
            'kode_unik' => Str::random(6),
            'lucky' => false,
        ]);
        Treasure::create([
            'zona_id' => 6,
            'kode_unik' => Str::random(6),
            'lucky' => false,
        ]);
        Treasure::create([
            'zona_id' => 6,
            'kode_unik' => Str::random(6),
            'lucky' => false,
        ]);
        Treasure::create([
            'zona_id' => 6,
            'kode_unik' => Str::random(6),
            'lucky' => false,
        ]);
    }
}
