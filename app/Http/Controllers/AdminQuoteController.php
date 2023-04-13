<?php

namespace App\Http\Controllers;

use App\Http\Requests\Quotes\UpdateRequest;
use App\Http\Requests\Quotes\CreateRequest;
use App\Models\Movie;
use App\Models\Quote;
use Illuminate\Http\RedirectResponse;
use Illuminate\View\View;

class AdminQuoteController extends Controller
{
    public function index(): View
    {
        return view('admin.quotes.index', [
            'quotes' => Quote::latest()->get()
        ]);
    }

    public function create(): View
    {
        return view('admin.quotes.create', [
            'movies'=> Movie::latest()->get()
        ]);
    }

    public function store(CreateRequest $request): RedirectResponse
    {
        $attributes = $request->validated();
        $attributes['user_id'] = auth()->user()->id;
        $attributes['image_url'] = request()->file('image_url')->store('images');
        Quote::create($attributes);

        return redirect('/');
    }

    public function destroy(Quote $quote): RedirectResponse
    {
        $quote->delete();
        return back();
    }

    public function edit(Quote $quote): View
    {
        return view('admin.quotes.edit', [
            "quote" => $quote,
            'movies' => Movie::all()
        ]);
    }

    public function update(UpdateRequest $request, Quote $quote): RedirectResponse
    {
        $attributes = $request->validated();

        if (isset($attributes['image_url'])) {
            $attributes['image_url'] = request()->file('image_url')->store('images');
        }

        $quote->update($attributes);

        return redirect('/');
    }
}
