<?php

namespace Database\Seeders;

use App\Models\Zona;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ZonaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Zona::create([
            'nama_zona' => 'Zona A',
            'deskripsi_zona' => 'Zona A adalah zona yang berisi hewan-hewan yang berasal dari benua Afrika',
            'foto_zona' => 'fotoZona/zonaA.jpg',
            'foto_zona_detail' => 'fotoZona/garis 1.png',
        ]);
    }
}
