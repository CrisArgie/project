<?php

namespace App\Http\Controllers;

use App\Models\Divisions;
use App\Models\IctForms;
use App\Models\PostRepairInspections;
use App\Models\PreRepairInspections;
use App\Models\RepairRequest;
use App\Models\Users;

class AdminController extends Controller
{
    public function show()
    {
        $request = RepairRequest::select('*')->where(
            fn ($q) =>
            $q->whereIn('status', ['in-progress', 'pending'])
        )->get();

        $ictrequest = IctForms::select('*')->where(
            fn ($q) =>
            $q->whereIn('status', ['in-progress', 'pending'])
        )->get();

        $prerequest = PreRepairInspections::select('*')->where(
            fn ($q) =>
            $q->whereIn('status', ['in-progress', 'pending'])
        )->get();

        $postrequest = PostRepairInspections::select('*')->where(
            fn ($q) =>
            $q->whereIn('status', ['in-progress', 'pending'])
        )->get();

        $requestperM = RepairRequest::select('*')->where(
            fn ($q) =>
            $q->whereIn('status', ['in-progress', 'pending', 'done'])
                ->where('date_requested', 'like', date('Y-m') . '%')
        )->get();

        $ictrequestperM = IctForms::select('*')->where(
            fn ($q) =>
            $q->whereIn('status', ['in-progress', 'pending', 'done'])
                ->where('date_requested', 'like', date('Y-m') . '%')
        )->get();

        $divisions = Users::select(Users::raw('COUNT(*) as count'), Users::raw('divisions_id as division'))->whereIn('user_type', ['customer', 'technician'])->groupByRaw('division')->get();

        // $rperY = RepairRequest::select('status', 'date_requested')->get();
        // $iperY = IctForms::select('status', 'date_requested')->get();


        // $userperY = Users::select('*')->where(
        //     fn ($q) =>
        //     $q->whereIn('user_type', ['customer'])
        //         ->where('created_at', 'like', date('Y') . '%')
        // )->get();

        // ddd();


        return view('admin.dashboard', [
            'name' => Divisions::all(),
            'post' => $postrequest,
            'pre' => $prerequest,
            'ictrequests' => $ictrequest,
            'repairrequests' => $request,
            'repairperM' => $requestperM,
            'ictperM' => $ictrequestperM,
            'div' => $divisions,
            // 'allUser' => $userperY,
            // 'total_request' => $totalRequest,
        ]);
    }
}
