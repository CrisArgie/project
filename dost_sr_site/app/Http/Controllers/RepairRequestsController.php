<?php

namespace App\Http\Controllers;

use App\Models\Equipment;
use App\Models\PreRepairInspections;
use App\Models\RepairRequest;
use App\Models\Users;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\Rule;

class RepairRequestsController extends Controller
{
    // protected $with = [];

    public function index(RepairRequest $repair_request)
    {
        return view('requests.repair', [
            'repair_request' => $repair_request->where('request_no', request()->id)
        ]);
    }

    public function show(Users $user, RepairRequest $repair_request)
    {
        return view('requests.request-for-repair', [
            'name' => $user->user_type,
            'users' => $user->all()->where('user_type', 'customer'),
            'repair_request' => $repair_request->all(),
        ]);
    }

    public function create(Request $request)
    {
        switch ($request->action) {
                // case 'save':
                //     $status = 'pending';
                //     $attributes = $this->validateInput($request);
                //     dd($attributes);
                //     if()
                //     {}
                //     return back()->with('success', 'Your Repair Request has been updated.');
                //     break;

            case 'submit':
                $status = 'in-progress';

                $attributes = $this->validateInput($request);
                // dd('action => ' . $request->action);

                $equipmentID = Equipment::insertGetId([
                    'serial_no' => $request->serial_no,
                    'property_no' => $request->property_no,
                    'brand_model' => $request->brand_model,
                ]);

                RepairRequest::create([
                    'date_requested' => $request->date_requested,
                    'request_no' => $request->request_no,
                    'description_of_property_type' => $request->description_of_property_type,
                    'location' => $request->location,
                    'acquisition_date' => $request->acquisition_date,
                    'acquisition_cost' => $request->acquisition_cost,
                    'users_id' => $request->users_id,
                    'equipment_id' => $equipmentID,
                    'status' => 'pending',
                ]);

                return back()->with('success', 'Your Repair Request has been created.');
                break;
        }
        // return redirect('/requests')->with('success', 'Your Repair Request has been created.');
        // return back()->with('success', 'Post Updated!');
    }

    public function update(Request $request)
    {
        $this->validate($request, [
            'problem_encountered' => ['required'],
            'corrective_action_performed' => ['required'],
        ]);

        RepairRequest::where('id', $request->id)
            ->update([
                'problem_encountered' => $request->problem_encountered,
                'corrective_action_performed' => $request->corrective_action_performed,
                'status' => 'in-progress',
            ]);

        PreRepairInspections::create([
            'repair_requests_id' => $request->id,
            'status' => 'pending',
        ]);

        return redirect('/requests')->with('success', 'Repair Request Updated');
    }


    public function edit()
    {
        // {name}/{action}/{no}

        $user = Users::where('id', auth()->user()->id)->with('repairrequest', 'ictforms')->first();

        switch (request()->name) {
            case 'repair':
                switch (request()->action) {
                    case 'done':
                        dd(request()->name, request()->action);

                        break;
                    case 'cancel':
                        dd(request()->name, request()->action);

                        break;
                    case 'update':

                        break;
                    case 'repair':
                        return view('requests.requests', [
                            'requests' => request()->action,
                            'user' => $user->repairrequest->where('request_no', request()->no)->first()
                        ]);

                        break;
                    case 'pre-repair':
                        return view('requests.requests', [
                            'requests' => request()->action,
                            'user' => $user->repairrequest->where('request_no', request()->no)->first()
                        ]);

                        break;
                    case 'post-repair':
                        return view('requests.requests', [
                            'requests' => request()->action,
                            'user' => $user->repairrequest->where('request_no', request()->no)->first()
                        ]);

                        break;
                }
                break;

            case 'ict':
                switch (request()->action) {
                    case 'done':
                        dd(request()->name, request()->action);

                        break;
                    case 'view':
                        return view('requests.request-for-ict-job', [
                            'requests' => request()->action,
                            'user' => $user->ictforms->where('request_no', request()->no)->first()
                        ]);

                        break;
                    case 'cancel':
                        dd(request()->name, request()->action);

                        break;
                    case 'update':

                        break;
                }
                break;
        }
    }

    public function validateInput($request)
    {
        $todayDate = date('Y-m-d');

        return $this->validate(
            $request,
            [
                'request_no' => ['required'],
                'date_requested' => ['required', 'date'],
                'description_of_property_type' => ['required'],
                'serial_no' => ['required'],
                'acquisition_date' => ['required', 'date', 'after_or_equal:' . $todayDate],
                'location' => ['required'],
                'brand_model' => ['required'],
                'property_no' => ['required'],
                'acquisition_cost' => ['required'],
                'users_id' => ['required'],
                'corrective_action_performed' => ['nullable'],
                'problem_encountered' => ['nullable'],
            ],
            [
                'acquisition_date.after_or_equal' => 'The date must be equal or greater than ' . $todayDate . '.',
            ]
        );
    }
}
