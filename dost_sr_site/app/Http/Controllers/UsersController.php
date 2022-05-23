<?php

namespace App\Http\Controllers;

use App\Models\Divisions;
use App\Models\Users;
use Illuminate\Http\Request;

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
}
