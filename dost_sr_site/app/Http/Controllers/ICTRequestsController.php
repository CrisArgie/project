<?php

namespace App\Http\Controllers;

use App\Models\IctForms;
use App\Models\Users;
use Illuminate\Http\Request;

class ICTRequestsController extends Controller
{
    public function index()
    {
        return view('requests.ict-repair');
    }

    public function show(IctForms $ictforms, Request $request)
    {
        return view('requests.request-for-ict-job', [
            'ictforms'  => $ictforms::all(),
            'user'      => Users::all()->where('id', $request->id)->first(),
        ]);
    }

    public function ictRequest(Users $users)
    {
        return view('posts.ict-request-user', [
            'users' => $users->all()->where('user_type', 'customer'),
        ]);
    }
}
