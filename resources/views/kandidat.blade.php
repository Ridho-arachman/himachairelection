@extends('layouts.app')

@section('title', 'Dashboard')

@section('content')
    <div class="container mx-auto py-8 px-4">

        <h1 class="text-5xl font-bold text-center mb-6 dark:text-white">Pemilihan Ketua Himpunan Mahasiswa</h1>

        <!-- Pilih Jurusan -->
        <div class="mb-8">
            <label for="jurusan" class="block text-lg font-semibold mb-2 dark:text-white">Pilih Jurusan</label>
            <select id="jurusan"
                class="w-full md:w-1/2 border border-gray-300 rounded-lg px-4 py-2 focus:outline-none focus:ring-2 focus:ring-blue-500 dark:bg-gray-800 dark:text-white"
                onchange="fetchCandidates()">
                <option value="all" selected>Lihat Semua</option>
                @foreach ($prodis as $prodi)
                    <option value="{{ $prodi['kd_prodi'] }}">{{ ucfirst(str_replace('-', ' ', $prodi['nama_prodi'])) }}
                    </option>
                @endforeach
            </select>
        </div>

        <!-- Container Kandidat -->
        <div id="candidates" class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
            @foreach ($candidates as $candidate)
                <div class="bg-white shadow-md rounded-lg overflow-hidden">
                    <img src="{{ asset('images/54b19ada-d53e-4ee9-8882-9dfed1bf1396.jpg') }}" alt="{{ $candidate->nama }}"
                        class="w-full h-32 object-cover">
                    <div class="p-4">
                        <h2 class="text-xl font-bold dark:text-black">{{ $candidate->nama }}</h2>
                        <p class="text-gray-600 mt-2">{{ Str::limit($candidate->visi_misi, 100) }}</p>
                        <a href="{{ route('detail-kandidat', ['id' => $candidate->nim_kandidat]) }}"
                            class="block mt-4 text-blue-500 hover:underline font-semibold">Lihat Detail</a>
                    </div>
                </div>
            @endforeach
        </div>
    </div>

    <script>
        // Data semua kandidat yang dikelompokkan berdasarkan jurusan
        const groupedCandidates = @json($groupedCandidates);

        // Fungsi untuk memfilter kandidat
        function fetchCandidates() {
            const jurusan = document.getElementById('jurusan').value;
            const candidatesContainer = document.getElementById('candidates');
            candidatesContainer.innerHTML = ''; // Reset kontainer kandidat

            if (jurusan === 'all') {
                // Jika "Lihat Semua" dipilih, tampilkan semua kandidat
                const allCandidates = @json($candidates);
                allCandidates.forEach(candidate => {
                    const component = `
    <div class="bg-white shadow-md rounded-lg overflow-hidden">
        <img src="${candidate.foto}" alt="${candidate.nama}" class="w-full h-32 object-cover">
        <div class="p-4">
            <h2 class="text-xl font-bold">${candidate.nama}</h2>
            <p class="text-gray-600 mt-2">${candidate.visi_misi.substring(0, 100)}...</p>
            <a href="/kandidat/${candidate.nim_kandidat}" 
                class="block mt-4 text-blue-500 hover:underline font-semibold">Lihat Detail</a>
        </div>
    </div>
`;

                    candidatesContainer.innerHTML += component;
                });
            } else if (groupedCandidates[jurusan]) {
                // Jika jurusan tertentu dipilih, tampilkan kandidat sesuai jurusan
                groupedCandidates[jurusan].forEach(candidate => {
                    const component = `
                        <div class="bg-white shadow-md rounded-lg overflow-hidden">
                            <img src="${candidate.foto}" alt="${candidate.nama}" class="w-full h-32 object-cover">
                            <div class="p-4">
                                <h2 class="text-xl font-bold">${candidate.nama}</h2>
                                <p class="text-gray-600 mt-2">${candidate.visi_misi.substring(0, 100)}...</p>
                                <a href="/candidate/${candidate.nim_kandidat}" 
                                    class="block mt-4 text-blue-500 hover:underline font-semibold">Lihat Detail</a>
                            </div>
                        </div>
                    `;
                    candidatesContainer.innerHTML += component;
                });
            } else {
                candidatesContainer.innerHTML =
                    '<p class="text-gray-500 text-center col-span-full">Tidak ada kandidat untuk jurusan ini.</p>';
            }
        }
    </script>
@endsection
