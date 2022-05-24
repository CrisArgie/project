<?php

namespace App\Http\Controllers;

use App\Models\Divisions;
use App\Models\Users;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class UsersController extends Controller
{
    public function show()
    {
        $divisions = Divisions::all();
        $userall = Users::select('*')->where(
            fn ($q) =>
            $q->whereIn('user_type', ['customer', 'technician'])
        )->get();

        return view('admin.users', [
            'users' => $userall,
            'divisions' => $divisions,
        ]);
    }

    public function create()
    {

        switch (request()->action) {
            case 'user_submit':
                $attributes = $this->validate(request(), [
                    'user_type' => ['required'],
                    'first_name' => ['required', 'max:255'],
                    'last_name' => ['required', 'max:255'],
                    'email' => ['required', 'email'],
                    'password' => ['required', 'min:7', 'max:255'],
                    'divisions_id' => ['required'],
                ]);

                Users::create($attributes);

                return back()->with('success', 'User created successfully.');
                break;
            case 'division_submit':
                $attributes = $this->validate(request(), [
                    'division_number' => ['required', 'integer', Rule::unique('divisions', 'division_number')],
                    'division_name' => ['required', 'max:255', Rule::unique('divisions', 'division_name')],
                    'division_address' => ['required', 'max:255', Rule::unique('divisions', 'division_address')],
                ]);

                Divisions::create($attributes);

                return back()->with('success', 'Division created successfully.');
                break;
        }
    }
}
