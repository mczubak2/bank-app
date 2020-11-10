<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class Data extends Controller
{
    function index(){
        $tab = Http::get('http://api.nbp.pl/api/exchangerates/rates/a/')->json();

        return view('data', ['tab'=>$tab]);
    }
}
