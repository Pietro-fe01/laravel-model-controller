<?php

namespace App\Http\Controllers\Guest;

use App\Http\Controllers\Controller;
use App\Models\Movie;
use Illuminate\Http\Request;

class PageController extends Controller {
    public function home() {
        $movies = Movie::all();

        return view('Homepage', compact('movies'));
    }

    public function single_movie($i) {
        $movies = Movie::all();

        if( $i > count($movies) - 1 ){
            abort(404);
        }

        $movie = $movies[$i];

        return view('SingleMovie', compact('movie'));
    }
}
