<?php

namespace App\Http\Controllers;


use App\Models\PreRepairInspections;
use App\Models\RepairRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class PreInspectionsController extends Controller
{
    public function show(Request $requests)
    {
        // dd(RepairRequest::where('id', $requests->id)->first());
        return view('requests.pre-repair', [
            'repairInfo' => RepairRequest::where('repair_requests_id', $requests->id),
            'prerepairId' => $requests->id
        ]);
    }

    public function update(Request $requests)
    {

        // $validator = Validator::make($request->all(), [
        //     'detail_of_defects' => ['required'],
        //     'date_of_latest_repair' => ['required'],
        //     'mature_of_latest_repair' => ['required'],
        //     'pre_repair_assessment_done' => ['required'],
        // ]);

        // dd(' booooh ');

        // if ($validator->fails()) {
        //     return back()
        //         ->withErrors($validator)
        //         ->withInput();
        // }

        // Retrieve the validated input...
        // $validated = $validator->validated();


        $queryPreElement = PreRepairInspections::where('repair_requests_id', $requests->id);



        $this->validate($requests, [
            'detail_of_defects' => ['required'],
            'date_of_latest_repair' => ['required'],
            'mature_of_latest_repair' => ['required'],
            'pre_repair_assessment_done' => ['required'],
        ]);

        $queryPreElement->update([
                'detail_of_defects' => $requests->detail_of_defects,
                'pre_repair_assessment_done' => $requests->pre_repair_assessment_done,
                'date_of_latest_repair' => $requests->date_of_latest_repair,
                'mature_of_latest_repair' => $requests->mature_of_latest_repair,
                'status' => 'pending',
            ]);

        return redirect('/requests')->with('success', 'Pre Inspection Request Done.');
    }
}
