@extends('layouts.app')

@section('title', 'Dashboard')

@php

@endphp

@section('content')
    <div class="container mx-auto py-8 px-4">
        <h1 class="text-3xl font-bold text-center mb-6">Pemilihan Ketua Himpunan Mahasiswa</h1>

        <!-- Pilih Jurusan -->
        <div class="mb-8">
            <label for="jurusan" class="block text-lg font-semibold mb-2">Pilih Jurusan</label>
            <select id="jurusan"
                class="w-full md:w-1/2 border border-gray-300 rounded-lg px-4 py-2 focus:outline-none focus:ring-2 focus:ring-blue-500 dark:bg-gray-800 dark:text-white"
                onchange="fetchCandidates()">
                <option value="" disabled selected>Pilih Jurusan</option>
                @foreach (array_keys($candidates) as $jurusan)
                    <option value="{{ $jurusan }}">{{ ucfirst(str_replace('-', ' ', $jurusan)) }}</option>
                @endforeach
            </select>
        </div>

        <!-- Container Kandidat -->
        <div id="candidates" class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
            {{-- Komponen Kandidat akan dirender secara dinamis di sini --}}
        </div>
    </div>

    <script>
        const candidates = @json($candidates);
        console.log(candidates);

        function fetchCandidates() {
            const jurusan = document.getElementById('jurusan').value;
            const candidatesContainer = document.getElementById('candidates');
            candidatesContainer.innerHTML = '';

            if (candidates[jurusan]) {
                candidates[jurusan].forEach(candidate => {
                    const component = `
                        <x-candidate-card 
                            :image="'${candidate.image}'" 
                            :name="'${candidate.name}'" 
                            :description="'${candidate.description}'" />
                    `;
                    candidatesContainer.innerHTML += component;
                });
            } else {
                candidatesContainer.innerHTML =
                    '<p class="text-gray-500 text-center">Tidak ada kandidat untuk jurusan ini.</p>';
            }
        }
    </script>
@endsection
