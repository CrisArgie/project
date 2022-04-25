<?php

namespace App\Http\Controllers;

use App\Models\Users;
use Illuminate\Auth\Events\Validated;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\Rule;

class RegisterController extends Controller
{
    public function create()
    {
        return view('registration.create');
    }

    public function store(Request $request) 
    {
        // return request()->all(); // checker

        $validator = Validator::make($request->all(), [
            'first_name'    => ['required', 'max:255'],
            'last_name'     => ['required', 'max:255'],
            'email'         => ['required', 'email', 'max:255', Rule::unique('users', 'email')],
            'password'      => ['required', 'min:7', 'max:255'],
        ]);
 
        if ($validator->fails()) {
            return redirect('/register')
                        ->withErrors($validator)
                        ->withInput();
        }

        $validated = $validator->validated();

        $user = Users::create($validated);

        Auth::login($user);
        // auth()->login($users);

        // session()->flash('success', 'Your Account has been created.');
        return redirect('/')->with('success', 'Your Account has been created.');
    }
}
