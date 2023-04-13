<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateQuoteRequest;
use App\Http\Requests\UpdateQuoteRequest;
use App\Models\Movie;
use App\Models\Quote;

class AdminQuoteController extends Controller
{
    public function index()
    {
        return view('admin.quotes.index', [
            'quotes' => Quote::latest()->get()
        ]);
    }

    public function create()
    {
        return view('admin.quotes.create', [
            'movies'=> Movie::latest()->get()
        ]);
    }

    public function store(CreateQuoteRequest $request)
    {
        $attributes = $request->validated();
        $attributes['user_id'] = auth()->user()->id;
        $attributes['image_url'] = request()->file('image_url')->store('images');
        Quote::create($attributes);

        return redirect('/');
    }

    public function destroy(Quote $quote)
    {
        $quote->delete();
        return back();
    }

    public function edit(Quote $quote)
    {
        return view('admin.quotes.edit', [
            "quote" => $quote,
            'movies' => Movie::all()
        ]);
    }

    public function update(UpdateQuoteRequest $request, Quote $quote)
    {
        $attributes = $request->validated();

        if (isset($attributes['image_url'])) {
            $attributes['image_url'] = request()->file('image_url')->store('images');
        }

        $quote->update($attributes);

        return redirect('/');
    }
}
