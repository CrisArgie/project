<?php

namespace App\Http\Controllers;

use App\Models\IctForms;
use App\Models\PostRepairInspections;
use App\Models\PreRepairInspections;
use App\Models\RepairRequest;
use Illuminate\Support\Facades\Auth;

// use Illuminate\Http\Request;

class RequestsController extends Controller
{
    public function show(RepairRequest $repair_request, IctForms $ictforms, PreRepairInspections $prerepairinspections, PostRepairInspections $postrepairinspections)
    {
        return view('admin.requests', [
            'repair_request' => $repair_request->all(),
            'repair_ict' => $ictforms->all(),
            'pre_repair' => $prerepairinspections->all(),
            'post_repair' => $postrepairinspections->all(),
        ]);
    }

    public function index()
    {
        return view('customer.requests');
    }

    public function viewRequest(RepairRequest $rrequest, IctForms $irequest)
    {
        $id = Auth::id();

        return view('customer.view_request', [
            'repairrequest' => $rrequest->where('users_id', $id),
            'ictrequest' => $irequest->where('users_id', $id),
        ]);
    }
}
