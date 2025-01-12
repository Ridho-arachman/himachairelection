<?php

namespace App\Http\Controllers;

use App\Models\Kandidat;
use Illuminate\Http\Request;

class KandidatController extends Controller
{
    public function index(Request $request)
    {
        $data = Kandidat::all();
        return view('detail-kandidat', ["name" => "maman", "image" => "https://via.placeholder.com/150", "description" => "jkbljabkjbaljbalba"]);
    }

    public function showKandidat(Request $request)
    {

        return view('kandidat', ["candidates" => [
            "name" => "maman",
            "photo" => "https://via.placeholder.com/150",
            "department" => "sistem informasi",
            "description" => "ihvbsubsikbs",
        ]]);
    }
}
