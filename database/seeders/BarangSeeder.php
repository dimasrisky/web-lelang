<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Barang;

class BarangSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Barang::create([
            'nama_barang' => 'Laptop Asus',
            'tgl' => '2020-2-2',
            'harga_awal' => 30000,
            'deskripsi_barang' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Ducimus.',
            'status' => 'Dibuka',
            'gambar' => 'laptop.jpg'
        ]);
        Barang::create([
            'nama_barang' => 'Sepeda Gunung',
            'tgl' => '2020-2-2',
            'harga_awal' => 70000,
            'deskripsi_barang' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Ducimus.',
            'status' => 'Dibuka',
            'gambar' => 'sepeda-gunung.jpg'
        ]);
        Barang::create([
            'nama_barang' => 'Sepeda',
            'tgl' => '2020-2-2',
            'harga_awal' => 35000,
            'deskripsi_barang' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Ducimus.',
            'status' => 'Dibuka',
            'gambar' => 'sepeda.jpg'
        ]);
    }
}
