<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Movie;

class PageController extends Controller
{
    public function index(){

        $movies= Movie::all();

        // dd($movies);
        return view('home', compact('movies'));

    }

    public function about(){

        return view('about');

    }

    public function contacts(){

        return view('contacts');

    }

    public function orderMovies(){

        // query per film ordinati per voto
        $movies= Movie::orderBy('vote')->get();


        return view('orderMovies', compact('movies'));

    }
}
