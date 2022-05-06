<?php

namespace App\Http\Controllers;

use App\Models\RepairRequest;
use App\Models\Users;
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

    public function index(Users $user)
    {
        return view('requests.request-for-repair', [
            'name' => $user->user_type,
            'users' => $user->all()->where('user_type', 'customer')
        ]);
    }
}
