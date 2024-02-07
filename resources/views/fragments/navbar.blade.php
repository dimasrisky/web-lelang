<nav class="w-screen my-4">
    <div class="w-[90%] mx-auto flex justify-between items-center">
        <div class="flex items-center gap-3">
            <img src="/assets/icons/logo.png" alt="logo">
            <h1 class="font-poetsen text-lg">Lelangku.id</h1>
        </div>
        <div class="flex items-center gap-4">
            @auth
            <a href="#" class="text-xs px-6 py-2 bg-black text-white rounded-md">History</a>
            <a href="{{ route('logout') }}" class="text-xs px-6 py-2 bg-black text-white rounded-md">Keluar</a>
            @endauth
            @guest
            <a href="{{ route('login-form') }}" class="text-xs px-6 py-2 bg-black text-white rounded-md">Masuk</a>
            <a href="{{ route('register-form') }}" class="text-xs px-6 py-2 bg-transparent border border-black text-black rounded-md">Daftar</a>
            @endguest
        </div>
    </div>
</nav>
