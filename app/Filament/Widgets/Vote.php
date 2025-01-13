<?php

namespace App\Filament\Widgets;

use Filament\Widgets\ChartWidget;
use App\Models\Vote as ModelVote;
use App\Models\Kandidat;
use App\Models\Prodi;
use App\Services\VoteService;

class Vote extends ChartWidget
{
    protected static ?string $heading = 'Hasil Pemilihan';

    protected int | string | array $columnSpan = [
        'md' => 2,
        'xl' => 3,
    ];

    protected function getData(): array
    {
        // $kandidatData = Kandidat::with(['prodi', 'user'])->get();

        // $dataKandidat = $kandidatData->map(function ($kandidat) {
        //     return [
        //         'nama_kandidat' => $kandidat->nama,
        //         'prodi' => $kandidat->prodi->nama_prodi ?? 'Prodi tidak ditemukan',
        //         'users' => $kandidat->user->map(function ($user) {
        //             return [
        //                 'id' => $user->id,
        //                 'name' => $user->kd_prodi,
        //             ];
        //         }),
        //         'jumlah_vote' => $kandidat->user->count(),
        //     ];
        // });

        // Tampilkan hasil
        // $semuaKandidat = $dataKandidat->pluck('nama_kandidat');
        // $jumlahSuara = $dataKandidat->pluck('jumlah_vote');

        $data = app(VoteService::class)->getKandidatData();

        $semuaKandidat = $data->pluck('nama_kandidat')->toArray();
        $semuaProdi = $data->pluck('prodi')->toArray();
        $jumlahSuara = $data->pluck('jumlah_vote')->toArray();

        return [
            'labels' => $semuaKandidat,
            'datasets' => [
                [
                    'label' => 'Jumlah Suara',
                    'data' => $jumlahSuara,
                    'backgroundColor' => '#FF6384',
                ],
            ],
        ];
    }

    public function getDescription(): ?string
    {
        return 'Hasil pemilihan berdasarkan jumlah suara setiap kandidat.';
    }

    protected function getType(): string
    {
        return 'bar';
    }
}
