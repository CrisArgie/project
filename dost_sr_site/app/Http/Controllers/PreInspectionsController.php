<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PreInspectionsController extends Controller
{
    public function show()
    {
        return view('requests.pre-repair');
    }
}
