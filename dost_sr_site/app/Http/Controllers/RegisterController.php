<?php

namespace App\Http\Controllers;

use App\Models\Users;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class RegisterController extends Controller
{
    public function create()
    {
        return view('registration.create');
    }

    public function store(Request $request) 
    {
        // return request()->all(); // checker

        // $validator = Validator::make($request->all(), [
        //     'user_type'     => ['required', 'max:255'],
        //     'first_name'    => ['required', 'max:255'],
        //     'last_name'     => ['required', 'max:255'],
        //     'email'         => ['required', 'email', 'max:255'],
        //     'password'      => ['required', 'min:7', 'max:255'],
        // ]);
 
        // if ($validator->fails()) {
        //     return redirect('/register')
        //                 ->withErrors($validator)
        //                 ->withInput();
        // }

        // $validated = $validator->validated();

        $attributes = request()->validate([
            'user_type'     => ['required', 'max:255'],
            'first_name'    => ['required', 'max:255'],
            'last_name'     => ['required', 'max:255'],
            'email'         => ['required', 'email', 'max:255'],
            'password'      => ['required', 'min:7', 'max:255'],
        ]);
 
        Users::create($attributes);

        return redirect('/login');
    }
}
