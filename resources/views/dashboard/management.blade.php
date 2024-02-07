@extends('fragments.initial')
@section('content')
@include('fragments.navbar')
<div class="w-[90%] mx-auto">
    <h1 class="font-poetsen text-[36px] mt-[95px]">Daftar Barang</h1>
    <a href="{{ route('barang.create') }}" class="px-6 py-2 text-xs font-inter text-white font-semibold rounded-md bg-blue-500">Tambah Barang</a>
    <table cellpadding="23">
        <thead>
            <tr class="border-b border-black">
                <td>Id</td>
                <td>Nama Barang</td>
                <td>Tanggal</td>
                <td>Harga Awal</td>
                <td>Status</td>
                <td></td>
            </tr>
        </thead>
        <tbody>
            @php
                $id = 1;
            @endphp
            @foreach ($listBarang as $barang)
            <tr class="text-center">
                <td>{{ $id }}</td>
                <td> {{ $barang->nama_barang }} </td>
                <td>{{ $barang->tgl }}</td>
                <td>Rp {{ $barang->harga_awal }}</td>
                <td>{{$barang->status}}</td>
                <td class="flex items-center gap-2">
                    <a href="{{ route('barang.edit', ['id' => $barang->id ]) }}" class="text-white px-6 py-2 bg-green-700 rounded-md text-xs">Edit</a>
                    <form action="{{ route('barang.destroy', ['id' => $barang->id ]) }}" method="post">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="text-white px-6 py-2 bg-red-700 rounded-md text-xs">Hapus</button>
                    </form>
                </td>
            </tr>
            @php
                $id++;
            @endphp
            @endforeach
        </tbody>
    </table>
</div>
@endsection
