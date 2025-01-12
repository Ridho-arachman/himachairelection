@extends('layouts.app')

@section('title', 'Tentang Aplikasi')

@section('content')
    <div>
        <h2 class="text-3xl font-semibold text-center text-gray-800 mb-6 dark:text-white">Tentang Aplikasi 🖥️</h2>
        <p class="text-center text-gray-600 text-lg max-w-3xl mx-auto mb-8">
            Selamat datang di aplikasi <strong>Pemilihan Ketua HIMA</strong>. Aplikasi ini memberikan kemudahan
            dalam memilih ketua Himpunan Mahasiswa (HIMA) secara online.
            Anda dapat melihat profil calon, mempelajari visi misi mereka, serta memberikan suara dengan cepat dan
            mudah, dalam suasana yang aman dan transparan. 🚀
        </p>
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
    </div>
@endsection
