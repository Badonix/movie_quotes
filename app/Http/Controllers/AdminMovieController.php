<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateMovieRequest;
use App\Models\Movie;
use Illuminate\Http\Request;

class AdminMovieController extends Controller
{
    public function store(CreateMovieRequest $request)
    {
        $attributes = $request->validated();
        $attributes['user_id'] = auth()->user()->id;
        Movie::create($attributes);

        return redirect('/');
    }
}
