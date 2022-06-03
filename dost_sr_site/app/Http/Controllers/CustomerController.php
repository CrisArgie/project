<?php

namespace App\Http\Controllers;

use App\Models\Divisions;
use App\Models\Users;

class CustomerController extends Controller
{
    public function index(Divisions $divisions, Users $users)
    {
        $user = $users->where('id', auth()->user()->id)->first();

        // dd($user->ictforms);
        return view('customer.home', [
            'user' => $user,
            'divisions' => $divisions->get(),
        ]);
    }


}
