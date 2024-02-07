@extends('fragments.initial')
@section('content')
@include('fragments.navbar')
<div class="w-[90%] mx-auto">
    <h1 class="font-bold text-center text-[64px] mt-[100px] font-poetsen">Daftar Barang</h1>
    <div class="flex items-center flex-wrap w-full mx-auto gap-3 mt-7">
        @foreach ($listBarang as $barang)
        {{-- Card --}}
        <div class="w-[30%] border border-[#E4E4E4] rounded-lg">
            <img src="{{ asset('/storage/produk/' . $barang->gambar) }}" class="rounded-lg" alt="laptop">
            <div class="w-[90%] mx-auto py-6">
                <div class="flex justify-between items-center">
                    <h1 class="font-poetsen text-[20px]">{{ $barang->nama_barang }}</h1>
                    <p class="font-inter text-[11px] text-green-700 font-semibold">Rp {{ $barang->harga_awal }}</p>
                </div>
                <p class="font-inter text-xs my-5">{{ $barang->deskripsi_barang }}</p>
                <div class="flex justify-between items-center">
                    <a href="{{ route('penawaran', ['id' => $barang->id]) }}" class="text-xs font-inter text-white px-6 py-2 rounded-md bg-blue-600">Mulai Penawaran</a>
                    <h4 class="text-[#9E8400] font-inter text-lg">{{ $barang->status }}</h4>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>
@endsection

