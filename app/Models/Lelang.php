<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Lelang extends Model
{
    use HasFactory;
    protected $table = 'lelang';
    protected $fillable = [
        'barang_id',
        'tgl_lelang',
        'harga_akhir',
        'user_id',
    ];
    protected $casts = [
        'tgl_lelang' => 'date'
    ];


    public function barang(){
        return $this->belongsTo(Barang::class);
    }
    public function user(){
        return $this->belongsTo(User::class);
    }

    public function histori(){
        return $this->hasOne(Histori::class);
    }
}
