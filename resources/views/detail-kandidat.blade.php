@extends('layouts.app')

@section('title', 'Detail Kandidat')

@section('content')
    <div class="container mx-auto py-8 px-4 ">
        <div class="bg-white shadow-md rounded-lg overflow-hidden dark:bg-gray-800">
            <img src="{{ asset('images/54b19ada-d53e-4ee9-8882-9dfed1bf1396.jpg') }}" alt="{{ $candidate->nama }}"
                class="w-full h-64 object-cover">
            <div class="p-6">
                <h1 class="text-3xl font-bold dark:text-white">{{ $candidate->nama }}</h1>
                <p class="text-gray-600 mt-4 dark:text-white">{{ $candidate->visi_misi }}</p>

                <form action="{{ route('vote-store') }}" method="POST" class="mt-4">
                    @csrf
                    <input type="hidden" name="nim_kandidat" value="{{ $candidate->nim_kandidat }}">
                    <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded hover:bg-blue-600">Vote</button>
                </form>

                <a href="{{ route('dashboard') }}" class="block mt-4 text-blue-500 hover:underline">Kembali ke Dashboard</a>
            </div>
        </div>
    </div>
@endsection
