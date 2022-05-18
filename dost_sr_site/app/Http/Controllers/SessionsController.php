<?php

namespace App\Http\Controllers;

use Illuminate\Validation\ValidationException;
use Illuminate\Foundation\Auth\AuthenticatesUsers;

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
        if(! auth()->attempt($attributes)){
            // auth failed
            throw ValidationException::withMessages([
                'email' => 'Your provided credentials could not be verified.',
                'password' => 'Error! Invalid password.'
            ]);
        }

        // redirect with a success flash message
        session()->regenerate();

        // return redirect('/dashboard')->with('success', 'Welcome Back!');

        if(request()->user()->user_type == "customer"){
            return redirect('/home')->with('success', 'Welcome Back!');
        }
        else if(request()->user()->user_type == "admin")
        {
            return redirect('/dashboard')->with('success', 'Welcome Back!');
        }

    }

    public function destroy()
    {
        auth()->logout();

        return redirect('/')->with('success', 'Goodbye!');
    }
}
