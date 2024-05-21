<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Http;
use Illuminate\Http\Request;

class LandingPagesController extends Controller
{
    public function home()
    {
        $response = Http::get('https://getbitlab.com/team?get=azrul');

        $teamData = $response->json();
        $data = [
            "nama"    => $teamData["detail_team"]["nama"],
            "profesi" => $teamData["detail_team"]["profesi"],
        ];

        return view('home', $data);
    }
}