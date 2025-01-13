<?php

namespace App\Http\Controllers;

use App\Models\Kandidat;
use App\Models\Prodi;
use Illuminate\Http\Request;

use function PHPSTORM_META\map;

class KandidatController extends Controller
{
    public function showKandidat(Request $request, string $id)
    {
        $candidate = Kandidat::find($id);
        if (!$candidate) {
            return redirect()->route('dashboard')->with('error', 'Kandidat tidak ditemukan.');
        }
        return view('detail-kandidat', compact('candidate'));
    }


    public function showKandidatAll(Request $request)
    {
        $candidates = Kandidat::with('prodi')->get(); // Semua kandidat
        $groupedCandidates = $candidates->groupBy('kd_prodi'); // Dikelompokkan untuk filter
        return view('kandidat', [
            'prodis' => Prodi::all(),
            'candidates' => $candidates,
            'groupedCandidates' => $groupedCandidates,
        ]);
    }
}
