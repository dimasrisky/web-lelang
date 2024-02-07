<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::create([
            'nama_lengkap' => 'Jono Saipudin',
            'username' => 'jono',
            'password' => 'jono123',
            'telp' => '77398574',
            'level_id' => 1,
        ]);
        User::create([
            'nama_lengkap' => 'Rafli',
            'username' => 'rafli',
            'password' => 'rafli123',
            'telp' => '77398574',
        ]);
        User::create([
            'nama_lengkap' => 'Kipli Saipudin',
            'username' => 'kipli',
            'password' => 'kipli123',
            'telp' => '77398574',
            'level_id' => 2,
        ]);
        User::create([
            'nama_lengkap' => 'Kirana Sandra',
            'username' => 'kirana',
            'password' => 'kirana123',
            'telp' => '77398574',
        ]);
    }
}
