<?php

namespace App\Http\Controllers;

use App\Models\Equipment;
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
            'repair_request' => $repair_request
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

        $this->validate($request, [
            'request_no' => ['required'],
            'date_requested' => ['required', 'date'],
            'description_of_property_type' => ['required'],
            'serial_no' => ['required', Rule::unique('equipment', 'serial_no')],
            'acquisition_date' => ['required', 'date'],
            'location' => ['required'],
            'brand_model' => ['required'],
            'property_no' => ['required', Rule::unique('equipment', 'property_no')],
            'acquisition_cost' => ['required'],
            'users_id' => ['required'],
        ]);



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

        return redirect('/requests')->with('success', 'Your Request has been created.');
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

        return back()->with('success', 'Repair Request Updated');
    }
}
