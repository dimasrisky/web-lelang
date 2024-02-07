@extends('fragments.initial')
@section('content')
@include('fragments.navbar')
<div class="w-screen h-screen flex justify-center items-center">
    <form action="{{ route('barang.store') }}" method="post" enctype="multipart/form-data" class="w-[70%] mx-auto">
        @csrf
        <h1 class="font-poetsen text-[48px] text-center">Tambah Wisata</h1>
        <div class="flex flex-col gap-2 mt-4">
            <label for="nama_barang" class="font-inter text-[17px] font-semibold">Nama Barang</label>
            <input type="text" id="nama_barang" name="nama_barang" placeholder="Masukkan Nama Barang..." class="border border-[#E4E4E4] text-xs px-3 py-2">
        </div>
        <div class="flex flex-col gap-2 mt-4">
            <label for="deskripsi_barang" class="font-inter text-[17px] font-semibold">Deskripsi</label>
            <input type="text" id="deskripsi_barang" name="deskripsi_barang" placeholder="Deskripsi..." class="border border-[#E4E4E4] text-xs px-3 py-2">
        </div>
        <div class="flex flex-col gap-2 mt-4">
            <label for="tanggal" class="font-inter text-[17px] font-semibold">Tanggal</label>
            <input type="date" id="tanggal" name="tanggal" placeholder="Tanggal..." class="border border-[#E4E4E4] text-xs px-3 py-2">
        </div>
        <div class="flex flex-col gap-2 mt-4">
            <label for="harga" class="font-inter text-[17px] font-semibold">Harga</label>
            <input type="number" id="harga" name="harga" placeholder="Masukkan harga Barang..." class="border border-[#E4E4E4] text-xs px-3 py-2">
        </div>
        <div class="flex flex-col gap-2 mt-4">
            <label for="gambar" class="font-inter text-[17px] font-semibold">Status</label>
            <div class="flex items-center gap-4">
                <div class="flex items-center gap-1">
                    <input type="radio" id="buka" name="status" value="Dibuka">
                    <label for="buka" class="text-xs font-inter">Dibuka</label>
                </div>
                <div class="flex items-center gap-1">
                    <input type="radio" id="tutup" name="status" value="Ditutup">
                    <label for="tutup" class="text-xs font-inter">Ditutup</label>
                </div>
            </div>
        </div>
        <div class="flex flex-col gap-2 mt-4">
            <label for="gambar" class="font-inter text-[17px] font-semibold">Gambar</label>
            <input type="file" id="gambar" name="gambar" placeholder="Masukkan harga Barang..." class="border border-[#E4E4E4] text-xs px-3 py-2">
        </div>
        <button type="submit" class="px-6 py-2 mt-4 text-white text-xs font-inter font-semibold bg-blue-600 rounded-md">Masukkan Barang</button>
    </form>
</div>

@endsection
