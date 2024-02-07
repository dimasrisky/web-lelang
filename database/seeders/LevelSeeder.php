<?php

namespace Database\Seeders;

use App\Models\Level;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class LevelSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Level::create([
            "level"=> "masyarakat",
        ]);
        Level::create([
            "level"=> "admin",
        ]);
        Level::create([
            "level"=> "petugas",
        ]);
    }
}
