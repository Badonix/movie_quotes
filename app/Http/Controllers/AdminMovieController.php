<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateMovieRequest;
use App\Http\Requests\UpdateMovieRequest;
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

    public function index()
    {
        return view('admin.movies.index', [
            'movies' => Movie::latest()->get()
        ]);
    }

    public function destroy(Movie $movie)
    {
        $movie->delete();
        return redirect('/');
    }

    public function edit(Movie $movie)
    {
        return view('admin.movies.edit', [
            'movie' => $movie
        ]);
    }

    public function update(Movie $movie, UpdateMovieRequest $request)
    {
        $attributes = $request->validated();
        $movie->update($attributes);

        return redirect('/');
    }
}
