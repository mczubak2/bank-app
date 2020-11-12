<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CalculatorController extends Controller
{

    function index () {

        return view('currency.calculator');
    }
}
