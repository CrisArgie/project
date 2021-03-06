<?php

namespace App\Http\Controllers;

use App\Mail\RequestQueue;
use App\Models\Equipment;
use App\Models\PreRepairInspections;
use App\Models\RepairRequest;
use App\Models\Users;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
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
                $status = 'pending';

                $attributes = $this->validateInput($request);
                // dd('action => ' . $request->action);

                $equipmentID = Equipment::insertGetId([
                    'serial_no' => $request->serial_no,
                    'property_no' => $request->property_no,
                    'brand_model' => $request->brand_model,
                ]);

                $reqID = RepairRequest::create([
                    'date_requested' => $request->date_requested,
                    'request_no' => $request->request_no,
                    'description_of_property_type' => $request->description_of_property_type,
                    'location' => $request->location,
                    'acquisition_date' => $request->acquisition_date,
                    'acquisition_cost' => $request->acquisition_cost,
                    'users_id' => $request->users_id,
                    'equipment_id' => $equipmentID,
                    'status' => $status,
                ]);

                $user = Users::findOrFail($request->users_id);
                // $name, $email, $request, $status, $type
                Mail::to($user->email)->send(new RequestQueue($user->first_name, $user->email, $request->request_no, $status, 'Repair request', 'repair', 'repair'));

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


        return redirect('/requests')->with('success', 'Request for Repair updated. Pre-repair created.');
    }


    public function edit()
    {
        // {name}/{action}/{no}

        $user = Users::where('id', auth()->user()->id)->with('repairrequest', 'ictforms')->first();

        switch (request()->name) {
            case 'repair':
                switch (request()->action) {
                    case 'done':
                        if ($user->repairrequest->where('request_no', request()->no) == null) {
                            return back()->with('fail', 'Error! No request found.');
                        }

                        foreach ($user->repairrequest->where('request_no', request()->no) as $request) {
                            if ($request != null) {
                                if ($request->prerepairinspections != null) {
                                    if ($request->prerepairinspections->postrepairinspections != null) {
                                        $request->prerepairinspections->postrepairinspections->update(['status' => 'deleted']);
                                        $request->prerepairinspections->update(['status' => 'deleted']);
                                        $request->update(['status' => 'deleted']);

                                        $request->prerepairinspections->postrepairinspections->delete();
                                        $request->prerepairinspections->delete();
                                        $request->delete();
                                    } else {
                                        $request->prerepairinspections->update(['status' => 'deleted']);
                                        $request->update(['status' => 'deleted']);

                                        $request->prerepairinspections->delete();
                                        $request->delete();
                                    }
                                }
                            }
                        }

                        return back()->with('success', 'Successfully deleted request: ' . request()->no . '.');
                        break;
                    case 'cancel':
                        if ($user->repairrequest->where('request_no', request()->no) == null) {
                            return back()->with('fail', 'Error! No request found.');
                        }

                        foreach ($user->repairrequest->where('request_no', request()->no) as $request) {
                            if ($request != null) {
                                if ($request->prerepairinspections != null) {
                                    if ($request->prerepairinspections->postrepairinspections != null) {
                                        $request->prerepairinspections->postrepairinspections->update(['status' => 'canceled']);
                                        $request->prerepairinspections->update(['status' => 'canceled']);
                                        $request->update(['status' => 'canceled']);
                                    } else {
                                        $request->prerepairinspections->update(['status' => 'canceled']);
                                        $request->update(['status' => 'canceled']);
                                    }
                                }
                            }
                        }

                        return back()->with('success', 'Successfully canceled request: ' . request()->no . '.');
                        break;
                        // case 'update':
                        //     dd(request()->name, request()->action);

                        //     break;
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
                        if ($user->repairrequest->where('request_no', request()->no) == null) {
                            return back()->with('fail', 'Error! No request found.');
                        }

                        foreach ($user->ictforms->where('request_no', request()->no) as $request) {
                            $request->update(['status' => 'deleted']);
                            $request->delete();
                        }

                        return back()->with('success', 'Successfully deleted request: ' . request()->no . '.');
                        break;
                    case 'view':
                        return view('requests.request-for-ict-job', [
                            'requests' => request()->action,
                            'user' => $user->ictforms->where('request_no', request()->no)->first()
                        ]);

                        break;
                    case 'cancel':
                        if ($user->repairrequest->where('request_no', request()->no) == null) {
                            return back()->with('fail', 'Error! No request found.');
                        }

                        foreach ($user->ictforms->where('request_no', request()->no) as $request) {
                            $request->update(['status' => 'canceled']);
                        }

                        return back()->with('success', 'Successfully canceled request: ' . request()->no . '.');

                        break;
                        // case 'update':
                        //     dd();
                        //     break;
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
