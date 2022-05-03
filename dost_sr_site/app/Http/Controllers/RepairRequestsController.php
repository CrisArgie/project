<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RepairRequestsController extends Controller
{
    public function show()
    {
        return view('requests.repair');
    }
}
