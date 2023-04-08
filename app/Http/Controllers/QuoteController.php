<?php

namespace App\Http\Controllers;

use App\Models\Movie;
use Illuminate\Http\Request;

class QuoteController extends Controller
{
    public function create()
    {
        return view('admin.quotes.create', [
            'movies'=> Movie::all()
        ]);
    }
}
