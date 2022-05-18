<?php

namespace App\Http\Controllers;


use App\Models\PreRepairInspections;
use App\Models\RepairRequest;
use Illuminate\Http\Request;


class PreInspectionsController extends Controller
{

    public function show(Request $requests)
    {
        // dd(PreRepairInspections::where('status', 'pending')->where('repair_requests_id', $requests->id)->first()->id);
        return view('requests.pre-repair', [
            'repairInfo' => RepairRequest::where('id', $requests->id)->first(),
            'prerepairId' => $requests->id,
            'idforPost' => PreRepairInspections::where('status', 'pending')->where('repair_requests_id', $requests->id)->first()
        ]);
    }

    public function update(Request $requests)
    {
        switch(request()->input('action'))
        {
            case 'print':
                dd( 'print' );

                break;

            case 'need-post-inspection':
                $status = 'in-progress';
                $this->uploadToDB($requests, $status);

                return redirect('/requests/need-post-inspection/'. $requests->id .'/'. $requests->rrId )->with('success', 'Pre-Repair Inspection Request: Saved In-progress.');

                break;

            case 'done':
                $status = 'done';
                $this->uploadToDB($requests, $status);
                RepairRequest::where('id', $requests->id)->where('status', 'in-progress')->update([
                    'status' => $status,
                ]);

                return redirect('/requests')->with('success', 'Pre-Repair Inspection Request: Done.');

                break;

            case 'save':
                $status = 'pending';
                $this->uploadToDB($requests, $status);
                // return redirect('/requests/pre-inspection/'. $requests->id)->with('success', 'Pre Inspection Request: Saved Pending.');
                return back()->with('success', 'Pre-Repair Inspection Request: Saved Pending.');


                break;

        }

    }

    public function uploadToDB($requests, $status)
    {
        // dd(PreRepairInspections::where('repair_requests_id', $requests->Tids)->where('status', 'pending')->first()->id);
        $todayDate = date('Y-m-d');
        $queryPreElement = PreRepairInspections::where('repair_requests_id', $requests->id)->where('status', 'pending');

        $this->validate(
            $requests,
            [
                'detail_of_defects' => ['required'],
                'date_of_latest_repair' => ['required', 'date', 'after_or_equal:' . $todayDate],
                'mature_of_latest_repair' => ['required', 'date', 'after_or_equal:date_of_latest_repair'],
                'pre_repair_assessment_done' => ['required'],
            ]
        );

        $queryPreElement->update([
            'detail_of_defects' => $requests->detail_of_defects,
            'pre_repair_assessment_done' => $requests->pre_repair_assessment_done,
            'date_of_latest_repair' => $requests->date_of_latest_repair,
            'mature_of_latest_repair' => $requests->mature_of_latest_repair,
            'status' => $status,
        ]);
    }
}
