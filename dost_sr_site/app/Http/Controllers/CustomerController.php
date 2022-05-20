<?php

namespace App\Http\Controllers;

use App\Models\Divisions;
use App\Models\IctForms;
use App\Models\RepairRequest;
use App\Models\Users;
use Illuminate\Http\Request;

class CustomerController extends Controller
{
    public function index(Divisions $divisions, Users $users)
    {
        $user = $users->where('id', auth()->user()->id)->first();
        // $user->ictforms;
        // $user->repairrequest;
        return view('customer.home', [
            'user' => $user,
            // 'repair' => $rrTable->all()->where('users_id', auth()->user()->id),
            // 'ict' => $ictTable->all()->where('users_id', auth()->user()->id),
            'divisions' => $divisions->get(),
        ]);
    }


}
