<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateQuoteRequest;
use App\Http\Requests\UpdateQuoteRequest;
use App\Models\Quote;

class AdminQuoteController extends Controller
{
    public function index()
    {
        return view('admin.quotes.index', [
            'quotes' => Quote::latest()->get()
        ]);
    }

    public function store(CreateQuoteRequest $request)
    {
        $attributes = [
            "image_url" => $request->file('image')->store('images'),
            "movie_id" => $request->input('movie'),
            "body" => [
                'en' => $request->input('quote_en'),
                'ka' => $request->input('quote_ka'),
            ],
            "user_id" => auth()->id(),
        ];


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
            "quote" => $quote
        ]);
    }

    public function update(UpdateQuoteRequest $request, Quote $quote)
    {
        $attributes = [
            "movie_id" => $request->input("movie"),
            "body" => [
                'en' => $request->input('quote_en'),
                'ka' => $request->input('quote_ka'),
            ],
        ];
        if (isset($inputData['image'])) {
            $attributes['image_url'] = request()->file('image')->store('images');
        }

        $quote->update($attributes);

        return redirect('/');
    }
}
