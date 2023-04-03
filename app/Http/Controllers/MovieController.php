<?php

namespace App\Http\Controllers;

use App\Models\Movie;
use Illuminate\Http\Request;

class MovieController extends Controller
{
    public function show($id)
    {
        $movie = Movie::with('quotes')->find($id);

        return view('movie', [
            'movie' => $movie,
        ]);
    }
}
