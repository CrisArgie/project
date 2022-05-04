<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ICTRequestsController extends Controller
{
    public function show()
    {
        return view('requests.ict-repair');
    }
}
