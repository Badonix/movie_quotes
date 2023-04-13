<?php

namespace App\Http\Controllers;

use App\Models\Movie;
use Illuminate\Http\Request;
use Illuminate\View\View;

class MovieController extends Controller
{
    public function show($id): View
    {
        $movie = Movie::with(['quotes' => function ($query) {
            $query->latest();
        }])->find($id);

        return view('movie', [
            'movie' => $movie,
        ]);
    }
}
