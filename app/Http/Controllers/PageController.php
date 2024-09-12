<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Movie;

class PageController extends Controller
{
    public function index(){

        $title= 'Home';

        $movies= Movie::all();

        // dd($movies);
        return view('home', compact('movies', 'title'));

    }

    public function about(){

        return view('about');

    }

    public function contacts(){

        return view('contacts');

    }

    public function orderMovies(){

        $title= 'film ordinati';

        // query per film ordinati per voto
        $movies= Movie::orderBy('vote')->get();


        return view('home', compact('movies', 'title'));

    }
}
