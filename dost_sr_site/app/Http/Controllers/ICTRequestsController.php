<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ICTRequestsController extends Controller
{
    public function index()
    {
        return view('requests.ict-repair');
    }

    public function show()
    {
        return view('requests.request-for-ict-job');
    }
}
