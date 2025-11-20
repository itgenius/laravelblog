<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ExampleController extends Controller
{
    public function homepage()
    {
        // Plus tard, on pourra passer des données ici.
        return view('homepage');
    }
}
