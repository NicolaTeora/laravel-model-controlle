<?php
//gestisco le rotte delle RISORSE utilizzando un controller

namespace App\Http\Controllers\Guest;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
//ricordare sempre di importare lo "use" per utilizzare il modello
use App\Models\Movie;

class MoviePageController extends Controller
{
    /**
     * All'interno della funzione index() del controller, recuperate tutti i film dal database
     *  e passateli alla view, che quindi li visualizzerà a schermo, tramite delle card.
     */
    public function index()
    {
        //creo una collezione di Movies mettendola in una variabile
        $movies = Movie::all();

        return view('list-movie', compact('movies'));
    }

    public function MoreInfoMovie(Movie $movie)
    {
        return view('more-info', compact('movie'));
    }
}
