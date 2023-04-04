<?php

namespace App\Http\Controllers;

use Illuminate\Validation\ValidationException;
use Illuminate\Http\Request;

class SessionController extends Controller
{
    public function create()
    {
        return view("sessions.create");
    }

    public function store()
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
    public function destroy()
    {
        auth()->logout();
        return redirect()->route('landing');
    }
}
