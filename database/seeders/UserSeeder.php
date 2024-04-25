<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name' => 'Admin',
            'username' => 'admin',
            'email' => 'admin@admin.com',
            'no_hp' => '081234567890',
            'role' => 'admin',
            'password' => bcrypt('admin123'),
        ]);

        User::create([
            'name' => 'ZacharyShin',
            'username' => 'shinarno',
            'email' => 'zacharyshin@gmail.com',
            'no_hp' => '081234567890',
            'role' => 'user',
            'password' => bcrypt('zacharyshin'),
        ]);
    }
}
