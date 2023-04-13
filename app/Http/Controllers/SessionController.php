<?php

namespace App\Http\Controllers;

use Illuminate\Http\RedirectResponse;
use Illuminate\Validation\ValidationException;
use Illuminate\Http\Request;
use Illuminate\View\View;

class SessionController extends Controller
{
    public function create(): View
    {
        return view("sessions.create");
    }

    public function store(): RedirectResponse
    {
        $attributes = request()->validate([
            'username' => 'required',
            'password' => 'required'
        ]);

        if (!auth()->attempt($attributes)) {
            throw ValidationException::withMessages([
                'wrong' => __('auth.wrong')
            ]);
        }

        return redirect()->route('admin.quotes.create');
    }
    public function destroy(): RedirectResponse
    {
        auth()->logout();
        return redirect()->route('landing');
    }
}
