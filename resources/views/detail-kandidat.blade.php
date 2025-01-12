@extends('layouts.app')

@section('title', 'Detail Kandidat')

@section('content')
    <div class="container mx-auto p-6">
        <h1 class="text-3xl font-bold text-center text-blue-500 mb-8">Detail Kandidat</h1>
        <div class="max-w-lg mx-auto bg-white shadow-md rounded-lg p-6">
            <img src="{{ $candidate['photo'] }}" alt="{{ $candidate['name'] }}"
                class="w-full h-48 object-cover rounded-lg mb-6">
            <h2 class="text-2xl font-semibold text-gray-700">{{ $candidate['name'] }}</h2>
            <p class="text-gray-500 mb-4"><strong>Jurusan:</strong> {{ $candidate['department'] }}</p>
            <p class="text-gray-600">{{ $candidate['description'] }}</p>
            <a href="{{ route('dashboard') }}"
                class="mt-6 block px-6 py-2 bg-gray-500 text-white font-semibold text-center rounded-lg hover:bg-gray-600 transition">
                Kembali ke Daftar
            </a>
        </div>
    </div>
@endsection
