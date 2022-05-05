<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostInspectionsController extends Controller
{
    public function show()
    {
        return view('requests.post-repair');
    }
}
