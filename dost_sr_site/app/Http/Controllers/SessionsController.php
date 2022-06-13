<?php

namespace App\Http\Controllers;

use Illuminate\Validation\ValidationException;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Gate;

class SessionsController extends Controller
{

    public function create()
    {
        return view('sessions.create');
    }

    public function store()
    {
        // validate the request
        $attributes = request()->validate([
            'email' => ['required', 'email'],
            'password' => ['required', 'min:7'],
        ]);

        // attempt to authenticate and log in the user
        // based on the provided credentials
        if (!auth()->attempt($attributes)) {
            // auth failed
            throw ValidationException::withMessages([
                'email' => 'Your provided credentials could not be verified.',
                'password' => 'Error! Invalid password.'
            ]);
        }

        // redirect with a success flash message
        session()->regenerate();
        // return redirect('/dashboard')->with('success', 'Welcome Back!');

        if (request()->user()->deleted_at != null) {
            auth()->logout();
            // abort(404);
            return redirect('/login')->with('success', 'Account is deleted.');
        } else {
            if (request()->user()->user_type == "customer") {
                return redirect('/home')->with('success', 'Welcome Back!');
            } else if (request()->user()->user_type == "admin" || request()->user()->user_type == "technician") {
                return redirect('/dashboard')->with('success', 'Welcome Back!');
            }
        }
    }

    public function destroy()
    {
        auth()->logout();

        return redirect('/')->with('success', 'Goodbye!');
    }
}
