<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;




class CovidController extends Controller
{
    public function index(){

        $respone = Http::get('https://api.kawalcorona.com/indonesia/provinsi');
        $globalrespone = Http::get('https://api.kawalcorona.com/indonesia');
        $datas = $respone->json();
        $globals = $globalrespone->json();


        return view('covid',compact('datas', 'globals'));
    }
}

