<?php

namespace App\Http\Controllers;

use App\Models\Movie;
use Illuminate\Http\Request;

class MovieController extends Controller
{
    public function show($id)
    {
        $movie = Movie::with(['quotes' => function ($query) {
            $query->latest();
        }])->find($id);

        return view('movie', [
            'movie' => $movie,
        ]);
    }
}
