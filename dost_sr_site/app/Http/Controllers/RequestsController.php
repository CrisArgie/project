<?php

namespace App\Http\Controllers;

use App\Models\IctForms;
use App\Models\PostRepairInspections;
use App\Models\PreRepairInspections;
use App\Models\RepairRequest;
// use Illuminate\Http\Request;

class RequestsController extends Controller
{
    public function show(RepairRequest $repair_request, IctForms $ictforns, PreRepairInspections $prerepairinspections, PostRepairInspections $postrepairinspections)
    {
        return view('admin.requests', [
            'repair_request' => $repair_request->all()
        ]);
    }
}
