<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Bangunan;


class BangunanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Bangunan::create([
            'zona_id' => 2,
            'nama_bangunan' => 'Panggung Terbuka'
        ]);
        Bangunan::create([
            'zona_id' => 2,
            'nama_bangunan' => 'Animal Show'
        ]);
        Bangunan::create([
            'zona_id' => 2,
            'nama_bangunan' => 'Toilet 1'
        ]);
        Bangunan::create([
            'zona_id' => 2,
            'nama_bangunan' => 'Stand Foto'
        ]);
        Bangunan::create([
            'zona_id' => 3,
            'nama_bangunan' => 'Toko Suvenir'
        ]);
        Bangunan::create([
            'zona_id' => 3,
            'nama_bangunan' => 'Informasi'
        ]);
        Bangunan::create([
            'zona_id' => 3,
            'nama_bangunan' => 'Taman Bermain Anak'
        ]);
        Bangunan::create([
            'zona_id' => 6,
            'nama_bangunan' => 'Diorama'
        ]);
        Bangunan::create([
            'zona_id' => 5,
            'nama_bangunan' => 'Kantin'
        ]);
        Bangunan::create([
            'zona_id' => 5,
            'nama_bangunan' => 'Nursery'
        ]);
        Bangunan::create([
            'zona_id' => 5,
            'nama_bangunan' => 'Perpustakaan'
        ]);
        Bangunan::create([
            'zona_id' => 5,
            'nama_bangunan' => 'Karantina'
        ]);
        Bangunan::create([
            'zona_id' => 5,
            'nama_bangunan' => 'Toilet 2'
        ]);
        Bangunan::create([
            'zona_id' => 5,
            'nama_bangunan' => 'Masjid'
        ]);
    }
}
