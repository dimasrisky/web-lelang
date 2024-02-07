<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Barang;
use App\Models\Lelang;
use App\Models\Histori;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index(){
        return view('landing-page');
    }

    public function listBarang(){
        return view('daftar-barang', [
            'listBarang' => Barang::get()
        ]);
    }

    public function tawar(Request $request){
        return view('penawaran', [
            'id' => $request->id
        ]);
    }

    public function storeLelang(Request $request){
        Lelang::create([
            'barang_id' => $request->id,
            'tgl_lelang' => date('Y-m-d'),
            'harga_akhir' => $request->harga,
            'user_id' => auth()->user()->id,
        ]);

        return redirect()->route('daftar-barang');
    }
}
