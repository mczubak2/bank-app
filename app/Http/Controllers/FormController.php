<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FormController extends Controller
{
    function index(Request $req) {

        $name = $req->input()['name'];
        $surname = $req->input()['surname'];
        $arr = ['name' => $name,'surname' => $surname];

        return 'My name is ' . $arr['name'] . ' ' . $arr['surname'];
    }
}
