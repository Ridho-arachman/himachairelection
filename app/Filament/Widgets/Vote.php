<?php

namespace App\Filament\Widgets;

use Filament\Widgets\ChartWidget;

class Vote extends ChartWidget
{
    protected static ?string $heading = 'Hasil Pemilihan';

    protected int | string | array $columnSpan = [
        'md' => 2,
        'xl' => 3,
    ];

    protected array $votes = [
        ['id' => '1', 'nim_kandidat' => 'K001', 'waktu_vote' => '2025-01-12 10:00:00'],
        ['id' => '2', 'nim_kandidat' => 'K002', 'waktu_vote' => '2025-01-12 10:05:00'],
        ['id' => '3', 'nim_kandidat' => 'K001', 'waktu_vote' => '2025-01-12 10:10:00'],
        ['id' => '4', 'nim_kandidat' => 'K003', 'waktu_vote' => '2025-01-12 10:15:00'],
        ['id' => '5', 'nim_kandidat' => 'K001', 'waktu_vote' => '2025-01-12 10:20:00'],
        ['id' => '6', 'nim_kandidat' => 'K002', 'waktu_vote' => '2025-01-12 10:25:00'],
    ];
    protected array $kandidats = [
        ['nim_kandidat' => 'K001', 'nama_kandidat' => 'Ramdani Saputra', 'kd_prodi' => 'P001'],
        ['nim_kandidat' => 'K002', 'nama_kandidat' => 'Ridwan S.Kom', 'kd_prodi' => 'P002'],
        ['nim_kandidat' => 'K003', 'nama_kandidat' => 'Ridwan S.T', 'kd_prodi' => 'P003'],
    ];
    protected array $prodis = [
        ['kd_prodi' => 'P001', 'nama_prodi' => 'Teknik Informatika'],
        ['kd_prodi' => 'P002', 'nama_prodi' => 'Sistem Informasi'],
        ['kd_prodi' => 'P003', 'nama_prodi' => 'Teknik Sipil'],
    ];





    protected function getData(): array
    {
        $results = [];
        foreach ($this->votes as $vote) {
            $kandidat = collect($this->kandidats)->firstWhere('nim_kandidat', $vote['nim_kandidat']);
            $prodi = collect($this->prodis)->firstWhere('kd_prodi', $kandidat['kd_prodi'] ?? null);

            $key = "{$kandidat['nama_kandidat']} ({$prodi['nama_prodi']})";

            if (!isset($results[$key])) {
                $results[$key] = 0;
            }
            $results[$key]++;
        }

        // Data hasil
        $labels = array_keys($results); // Nama kandidat dan prodi
        $data = array_values($results); // Jumlah suara

        $labels = [
            'Ramdani Saputra (Teknik Informatika)',
            'Ridwan S.Kom (Sistem Informasi)',
            'Ridwan S.T (Teknik Sipil)',
        ];

        $data = [3, 2, 1];


        return [
            'labels' => $labels,
            'datasets' => [
                [
                    'label' => 'Jumlah Suara',
                    'data' => $data,
                    'backgroundColor' => ['#FF6384', '#36A2EB', '#FFCE56'],
                ],
            ],
        ];
    }
    // protected function getData(): array
    // {
    //     return [
    //         'labels' => ['Ramdani Saputra, S.Kom', 'Ridwan, S.Kom', 'Ridwan, S.T', 'Ridwan, S.T'],
    //         'datasets' => [
    //             [
    //                 'label' => ['teknik informatika',],
    //                 'data' => [100],
    //                 'backgroundColor' => ['#FF6384'],
    //             ],
    //         ],
    //     ];
    // }

    public function getDescription(): ?string
    {
        return 'The number of blog posts published per month.';
    }

    protected function getType(): string
    {
        return 'pie';
    }
}
