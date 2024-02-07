@extends('fragments.initial')
@section('content')
@include('fragments.navbar')
<div class="w-screen h-screen flex justify-center items-center bg-[url('/assets/images/auth-bg.jpg')] bg-cover bg-center bg-no-repeat">
    <form action="{{ route('login-handle') }}" method="POST" class="px-8 bg-white rounded-md w-[40%] py-6">
        @csrf
        <h1 class="font-poetsen text-[2rem] text-center mb-4">Masuk</h1>
        <div class="flex flex-col gap-2 mb-4">
            <label for="username" class="font-inter text-base font-semibold">Username</label>
            <input type="text" id="username" name="username" placeholder="Masukkan username..." class="border border-[#E4E4E4] px-2 py-1">
        </div>
        <div class="flex flex-col gap-2 mb-4">
            <label for="password" class="font-inter text-base font-semibold">Password</label>
            <input type="password" id="password" name="password" placeholder="Masukkan password..." class="border border-[#E4E4E4] px-2 py-1">
        </div>
        <button type="submit" class="text-xs px-6 py-2 bg-blue-600 rounded-md text-white">Masuk!</button>
    </form>
</div>

@endsection
