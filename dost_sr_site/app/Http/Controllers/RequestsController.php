<?php

namespace App\Http\Controllers;

use App\Models\AreaRequests;
use App\Models\IctForms;
use App\Models\IctRequests;
use App\Models\PostRepairInspections;
use App\Models\PreRepairInspections;
use App\Models\RepairRequest;
use App\Models\Users;
use Illuminate\Support\Facades\Auth;

// use Illuminate\Http\Request;

class RequestsController extends Controller
{
    public function show(RepairRequest $repair_request, IctForms $ictforms, PreRepairInspections $prerepairinspections, PostRepairInspections $postrepairinspections, IctRequests $iirequest)
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

    public function viewRequest(IctRequests $iirequest, Users $users)
    {
        $user = $users->where('id', auth()->user()->id)->first();
        $areaID = AreaRequests::all();

        return view('customer.view_request', [
            'user' => $user,
            'ictconjunction' => $iirequest,
            'areaconjunction' => $areaID,
        ]);
    }
}
