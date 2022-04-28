<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RequestsController extends Controller
{
    public function show()
    {
        return view('admin.requests');
    }
}
