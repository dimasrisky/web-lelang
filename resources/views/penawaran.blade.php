@extends('fragments.initial')
@section('content')
@include('fragments.navbar')
<div class="w-screen h-screen flex justify-center items-center">
    <form action="{{ route('store-lelang') }}" method="post" class="w-[40rem] border border-black rounded-md py-[2rem] flex flex-col items-center gap-3">
        @csrf
        <input type="hidden" name="id" value="{{ $id }}">
        <h1 class="font-poetsen text-[24px] text-center">Masukkan Harga Penawaran</h1>
        <div class="flex gap-3 items-center">
            <input type="number" name="harga" placeholder="Masukkan Harga Tawar..." class="w-[377px] border py-2 rounded-md px-5 text-xs">
            <button type="submit" class="py-2 px-6 rounded-md text-white font-inter text-xs bg-blue-600">Submit</button>
        </div>
    </form>
</div>
@endsection
