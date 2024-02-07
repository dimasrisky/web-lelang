<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Barang;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('dashboard.management', [
            'listBarang' => Barang::get()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('dashboard.add');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        $path = $request->file('gambar')->store('produk', 'public');
        $filename = explode('/', $path);

        Barang::create([
            'nama_barang' => $request->nama_barang,
            'tgl' => $request->tanggal,
            'harga_awal' => $request->harga,
            'deskripsi_barang' => $request->harga,
            'status' => $request->status,
            'gambar' => $filename[1],
        ]);

        return redirect()->route('barang.index');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        return view('dashboard.edit', [
            'dataBarang' => Barang::find($id)
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $path = null;
        $filename = null;

        if($request->hasFile('gambar')){
            $path = $request->file('gambar')->store('produk', 'public');
            $filename = explode('/', $path);
            Storage::delete($request->oldGambar);
        }

        Barang::find($id)->update([
            'nama_barang' => $request->nama_barang,
            'tgl' => $request->tanggal,
            'harga_awal' => $request->harga,
            'deskripsi_barang' => $request->harga,
            'status' => $request->status,
            'gambar' => $filename == null ? $request->oldGambar : $filename[1],
        ]);

        return redirect()->route('barang.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Barang::destroy($id);
        return redirect()->route('barang.index');
    }
}
