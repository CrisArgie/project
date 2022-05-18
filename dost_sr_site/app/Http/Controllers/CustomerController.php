<?php

namespace App\Http\Controllers;

use App\Models\IctForms;
use App\Models\RepairRequest;
use Illuminate\Http\Request;

class CustomerController extends Controller
{
    public function index(RepairRequest $rrTable, IctForms $ictTable)
    {
        return view('customer.home', [
            'repair' => $rrTable->all()->where('users_id', auth()->user()->id),
            'ict' => $ictTable->all()->where('users_id', auth()->user()->id),
        ]);
    }
}
