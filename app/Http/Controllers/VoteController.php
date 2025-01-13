<?php

namespace App\Http\Controllers;

use App\Models\Kandidat;
use App\Models\User;
use App\Models\Vote;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class VoteController extends Controller
{
    public function store(Request $request)
    {
        $request->validate([
            "nim_kandidat" => "required|max:10",
        ]);

        $user = Auth::user()->id;

        if (Vote::where('id_user', $user)->exists()) {
            return redirect()
                ->back()
                ->withErrors('Anda sudah melakukan vote');
        };

        Vote::create([
            'id_user' => $user,
            'nim_kandidat' => $request->nim_kandidat,
        ]);

        return redirect()
            ->back()
            ->with('success', 'Vote berhasil disimpan!');
    }
}
