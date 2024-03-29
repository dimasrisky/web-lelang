<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Histori extends Model
{
    use HasFactory;
    protected $table = 'history';
    protected $fillable = [
        'lelang_id',
        'barang_id',
        'user_id',
        'penawaran_harga'
    ];

    public function barang(){
        return $this->belongsTo(Barang::class);
    }

    public function lelang(){
        return $this->belongsTo(Lelang::class);
    }

    public function user(){
        return $this->belongsTo(User::class);
    }
}
