@extends('layouts.app')

@section('title', 'Tentang Aplikasi')

@section('content')
    <div class="overflow-x-hidden">
        <h2 class="text-3xl font-semibold text-center text-gray-800 mb-6 dark:text-white">Tentang Aplikasi 🖥️</h2>
        <p class="text-center text-gray-600 text-lg max-w-3xl mx-auto mb-8 dark:text-white">
            Selamat datang di aplikasi <strong>Pemilihan Ketua HIMA</strong>. Aplikasi ini memberikan kemudahan
            dalam memilih ketua Himpunan Mahasiswa (HIMA) secara online.
            Anda dapat melihat profil calon, mempelajari visi misi mereka, serta memberikan suara dengan cepat dan
            mudah, dalam suasana yang aman dan transparan. 🚀
        </p>
        @auth
            <h1 class="text-center text-xl text-gray-600 font-semibold max-w-3xl mx-auto mt-8 dark:text-white">Selamat Datang
                {{ Auth::user()->name }} di Aplikasi Pemilihan Ketua HIMA</h1>
            <div class="mt-10 text-center flex justify-center items-center gap-10">
                <a href="/kandidat"
                    class="inline-block bg-blue-500 text-white text-lg px-8 py-3 rounded-full shadow-md hover:bg-blue-600 transition-all duration-300">
                    Daftar Kandidat
                </a>
            </div>
        @endauth
        @guest
            <div class="mt-10 text-center flex justify-center items-center gap-10">
                <a href="{{ route('login') }}"
                    class="inline-block bg-blue-500 text-white text-lg px-8 py-3 rounded-full shadow-md hover:bg-blue-600 transition-all duration-300">
                    Log in
                </a>
                <a href="{{ route('register') }}"
                    class="inline-block bg-blue-500 text-white text-lg px-8 py-3 rounded-full shadow-md hover:bg-blue-600 transition-all duration-300">
                    Register
                </a>
            </div>
        @endguest
        <section class="mt-28 overflow-x-hidden">
            <h4 class="mb-10 text-xl text-center font-bold">
                Universitas Bina Bangsa
            </h4>
            <div class="group/animate mb-16 grid w-[200vw] grid-cols-2">
                {{-- Kolom pertama --}}
                <div class="flex animate-infinitSlide justify-around group-hover/animate:paused">
                    <img src="{{ asset('images/logo_uniba-removebg-preview.png') }}" alt="logo" height="100"
                        width="100" class="cursor-pointer transition-all duration-700 " />
                    <img src="{{ asset('images/logo_uniba-removebg-preview.png') }}" alt="logo" height="100"
                        width="100" class="cursor-pointer transition-all duration-700 " />
                    <img src="{{ asset('images/logo_uniba-removebg-preview.png') }}" alt="logo" height="100"
                        width="100" class="cursor-pointer transition-all duration-700 " />
                    <img src="{{ asset('images/logo_uniba-removebg-preview.png') }}" alt="logo" height="100"
                        width="100" class="cursor-pointer transition-all duration-700 " />
                    <img src="{{ asset('images/logo_uniba-removebg-preview.png') }}" alt="logo" height="100"
                        width="100" class="cursor-pointer transition-all duration-700 " />
                </div>
                {{-- Kolom kedua --}}
                <div class="flex animate-infinitSlide justify-around group-hover/animate:paused">
                    <img src="{{ asset('images/logo_uniba-removebg-preview.png') }}" alt="logo" height="100"
                        width="100" class="cursor-pointer transition-all duration-700 " />
                    <img src="{{ asset('images/logo_uniba-removebg-preview.png') }}" alt="logo" height="100"
                        width="100" class="cursor-pointer transition-all duration-700 " />
                    <img src="{{ asset('images/logo_uniba-removebg-preview.png') }}" alt="logo" height="100"
                        width="100" class="cursor-pointer transition-all duration-700 " />
                    <img src="{{ asset('images/logo_uniba-removebg-preview.png') }}" alt="logo" height="100"
                        width="100" class="cursor-pointer transition-all duration-700 " />
                    <img src="{{ asset('images/logo_uniba-removebg-preview.png') }}" alt="logo" height="100"
                        width="100" class="cursor-pointer transition-all duration-700 " />
                </div>
            </div>
        </section>

    </div>
@endsection
