<?php

namespace App\Http\Controllers;

use App\Models\Quote;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class AdminQuoteController extends Controller
{
    public function index()
    {
        return view('admin.quotes.index', [
            'quotes' => Quote::all()
        ]);
    }

    public function store()
    {
        $inputData = request()->validate([
            'quote_en' => "required",
            'quote_ka' => "required",
            'image' => "required",
            'movie' => ['required', Rule::exists('movies', 'id')],
        ]);


        $attributes = [
            "image_url" => $inputData["image"],
            "movie_id" => $inputData["movie"],
            "body" => [
                'en' => $inputData['quote_en'],
                'ka' => $inputData['quote_ka'],
            ],
            "user_id" => auth()->id(),
            'image_url' => request()->file('image')->store('images')
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

    public function update(Quote $quote)
    {
        $inputData = request()->validate([
            'quote_en' => 'required',
            'quote_ka' => 'required',
            'image' => 'image',
            'movie' => 'required'
        ]);

        $attributes = [
            "movie_id" => $inputData["movie"],
            "body" => [
                'en' => $inputData['quote_en'],
                'ka' => $inputData['quote_ka'],
            ],
        ];
        if (isset($inputData['image'])) {
            $attributes['image_url'] = request()->file('image')->store('images');
        }

        $quote->update($attributes);

        return redirect('/');
    }
}
