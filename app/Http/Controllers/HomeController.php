<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Quote;
use Illuminate\View\View;

class HomeController extends Controller
{
    public function index(): View
    {
        return view('landing', [
            'quote' => Quote::inRandomOrder()->first()
        ]);
    }
}
