<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Quote;

class HomeController extends Controller
{
    public function index()
    {
        return view('landing', [
            'quote' => Quote::inRandomOrder()->first()
        ]);
    }
}
