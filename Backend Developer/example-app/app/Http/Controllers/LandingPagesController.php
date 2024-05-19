<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Http;
use Illuminate\Http\Request;

class LandingPagesController extends Controller
{
    //
    public function home()
    {
        // Lakukan panggilan HTTP ke URL yang diberikan
        $response = Http::get('https://getbitlab.com/team?get=azrul');

        // Mendapatkan data JSON dari respons
        $teamData = $response->json();
        $data = [
            "nama" => $teamData["detail_team"]["nama"],
            "profesi" => $teamData["detail_team"]["profesi"],
        ];

        // Mengirimkan data ke view dan menampilkannya
        return view('home', $data);
    }
}
