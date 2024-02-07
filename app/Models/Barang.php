<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Barang extends Model
{
    use HasFactory;
    protected $table = 'barang';
    protected $fillable = [
        'nama_barang',
        'tgl',
        'harga_awal',
        'deskripsi_barang',
        'status',
        'gambar'
    ];
    protected $casts = [
        'tgl' => 'date'
    ];

    public function lelang(){
        return $this->hasMany(Lelang::class);
    }
    public function histori(){
        return $this->hasMany(Histori::class);
    }
}
