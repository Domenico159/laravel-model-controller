<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Movie;

class MovieController extends Controller
{
    // Archivio movies

    public function index()
    {

        // Ottenere i movie dal db
        $movies = Movie::all();

        return view('welcome', compact('movies'));
    }
}
