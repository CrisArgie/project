<?php

namespace App\Http\Controllers;

use App\Models\RepairRequest;
use Illuminate\Http\Request;

class RepairRequestsController extends Controller
{
    // protected $with = [];

    public function show(RepairRequest $repair_request)
    {
        return view('requests.repair', [
            'repair_request' => $repair_request
        ]);
    }
}
