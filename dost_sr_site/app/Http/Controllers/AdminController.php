<?php

namespace App\Http\Controllers;


use App\Models\IctForms;
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

        $rperY = RepairRequest::select('*')->where(
            fn ($q) =>
            $q->whereIn('status', ['in-progress', 'pending', 'done'])
                ->where('date_requested', 'like', date('Y') . '%')
        )->get();
        $iperY = IctForms::select('*')->where(
            fn ($q) =>
            $q->whereIn('status', ['in-progress', 'pending', 'done'])
                ->where('date_requested', 'like', date('Y') . '%')
        )->get();

        $totalRequest = $rperY->whereIn('status', ['in-progress', 'pending', 'done'])->count() + $iperY->whereIn('status', ['in-progress', 'pending', 'done'])->count();



        $userperY = Users::select('*')->where(
            fn ($q) =>
            $q->whereIn('user_type', ['customer'])
                ->where('created_at', 'like', date('Y') . '%')
        )->get();

        // dd($userperY);


        return view('admin.dashboard', [
            'ictrequests' => $ictrequest,
            'repairrequests' => $request,
            'repairperM' => $requestperM,
            'ictperM' => $ictrequestperM,
            'allUser' => $userperY,
            'total_request' => $totalRequest,
        ]);
    }
}
