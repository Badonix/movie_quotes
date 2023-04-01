<?php

namespace App\Http\Controllers;

use App\Models\Movie;
use Illuminate\Http\Request;

class MovieController extends Controller
{
    public function show($id)
    {
        return view('movie', [
            'quotes' => Movie::find($id)->quotes
        ]);
    }
}
