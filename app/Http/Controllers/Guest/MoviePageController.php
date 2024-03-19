<?php
//gestisco le rotte delle RISORSE utilizzando un controller

namespace App\Http\Controllers\Guest;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Movie;

class MoviePageController extends Controller
{

    public function index()
    {
        //creo una collezione di Movies mettendola in una variabile
        $movies = Movie::all();
        return view('list-movie');
    }
}
