<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    //creo un controller per le pagine istituzionali
    public function home()
    {
        return view('home');
    }
}
