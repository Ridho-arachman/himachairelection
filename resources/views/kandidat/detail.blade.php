@extends('layouts.app')

@section('title', 'Daftar Kandidat')

@section('content')
    <div class="container mx-auto p-6">
        <h1 class="text-3xl font-bold text-center text-blue-500 mb-8">Daftar Kandidat</h1>
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
            @foreach ($candidates as $candidate)
                <div class="bg-white shadow-md rounded-lg p-4">
                    <img src="{{ $candidate['photo'] }}" alt="{{ $candidate['name'] }}"
                        class="w-full h-48 object-cover rounded-lg mb-4">
                    <h2 class="text-xl font-semibold text-gray-700">{{ $candidate['name'] }}</h2>
                    <p class="text-gray-500">{{ $candidate['department'] }}</p>
                    <a href="{{ route('kandidat.detail', ['id' => $candidate['id']]) }}"
                        class="mt-4 block px-4 py-2 bg-blue-500 text-white font-semibold text-center rounded-lg hover:bg-blue-600 transition">
                        Lihat Detail
                    </a>
                </div>
            @endforeach
        </div>
    </div>
@endsection
