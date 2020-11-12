<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class DataController extends Controller
{
    function index(){
        $tab = Http::get('http://api.nbp.pl/api/exchangerates/tables/a')->json();

        return view('currency.data', [
            'tab' => $tab ? $tab[0]['rates'] : '',
        ]);
    }
}
