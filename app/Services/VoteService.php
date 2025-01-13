<?php

namespace App\Services;

use App\Models\Kandidat;

class VoteService
{
    public function getKandidatData()
    {
        $kandidatData = Kandidat::with(['prodi', 'user'])->get();

        $dataKandidat = $kandidatData->map(function ($kandidat) {
            return [
                'nama_kandidat' => $kandidat->nama . ' (' . ($kandidat->prodi->nama_prodi ?? 'Prodi tidak ditemukan') . ')',
                'prodi' => $kandidat->prodi->nama_prodi ?? 'Prodi tidak ditemukan',
                'users' => $kandidat->user->map(function ($user) {
                    return [
                        'id' => $user->id,
                        'name' => $user->kd_prodi,
                    ];
                }),
                'jumlah_vote' => $kandidat->user->count(),
            ];
        });

        return $dataKandidat;
    }
}
