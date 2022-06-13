<?php

namespace App\Http\Controllers;

use App\Models\AreaOfRequests;
use App\Models\AreaRequests;
use App\Models\Divisions;
use App\Models\Documents;
use App\Models\Equipment;
use App\Models\IctForms;
use App\Models\IctRequests;
use App\Models\Images;
use App\Models\Users;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class ICTRequestsController extends Controller
{
    public function index(Request $request, IctForms $ictform)
    {
        $requestform1 = $ictform->where('request_no', $request->id)->first();
        // $equipID = IctRequests::all()->where('ict_forms_id', $requestform1->id);
        $divisionsID = $requestform1->users->divisions_id;

        // dd($requestform1->ict_requests);
        return view('requests.ict-repair', [
            'repair_ictform' => $requestform1,
            // 'ictrequests' => $equipID,
            'division' => Divisions::all()->where('id', $divisionsID)->first(),
            'area_request' => AreaOfRequests::all(),
        ]);
    }

    public function show(IctForms $ictforms, Request $request)
    {
        return view('requests.request-for-ict-job', [
            'requests' => null,
            'ictforms'  => $ictforms::all(),
            'user'      => Users::all()->where('id', $request->id)->first(),
        ]);
    }

    public function ictRequest(Users $users)
    {
        return view('posts.ict-request-user', [
            'users' => $users->all()->where('user_type', 'customer'),
        ]);
    }

    public function update(Request $request)
    {
        switch ($request->action) {
            case 'save':
                $this->validate(
                    $request,
                    [
                        'AreaRequest' => ['required', 'array', 'distinct'],
                        'request_no' => ['required', 'alpha_dash', 'String']
                    ],
                    [
                        'AreaRequest.required' => 'Area of Request must be checked if done',
                    ]
                );

                IctForms::where('request_no', $request->request_no)
                    ->update([
                        'status' => 'in-progress',
                    ]);

                return back()->with('success', 'Request: ' . $request->request_no . ' - save');
                break;
            case 'print':
                break;
            case 'done':
                $this->validate(
                    $request,
                    [
                        'AreaRequest' => ['required', 'array', 'distinct'],
                        'request_no' => ['required', 'alpha_dash', 'String']
                    ],
                    [
                        'AreaRequest.required' => 'Area of Request must be checked if done',
                    ]
                );

                IctForms::where('request_no', $request->request_no)
                    ->update([
                        'status' => 'done',
                    ]);

                return redirect('/requests')->with('success', 'Request: ' . $request->request_no . ' - done.');
                break;
        }
    }

    public function create(Request $requests)
    {
        switch ($requests->action) {
            case 'submit':
                $countImages = 0;
                $images = array();
                $requests_for_area = array();
                $requests_for_area = $requests->arearequest;


                $this->validate($requests, [
                    'type_of_requests_id' => ['required'],
                    'users_id' => ['required'],
                    'property_no' => ['required', Rule::unique('equipment', 'property_no'), 'regex:/^\S*$/u', 'max:255'],
                ]);

                if ($requests_for_area == null) {
                    return back()->with('fail', 'Check all that apply, Area of Request!');
                }

                if ($requests->file('path_imgs') != null) {
                    $files = $requests->file('path_imgs');
                    foreach ($files as $file) {
                        $countImages++;
                        array_push($images, $file->store('images', 'public'));
                    }
                }

                if ($requests->file('path_docs') != null) {
                    $document = $requests->file('path_docs')->store('documents', 'public');
                    $docID = Documents::create([
                        'path_name' => $document,
                    ])->id;
                } else {
                    $docID = null;
                }

                $imageIDs = array();
                if ($countImages > 0) {
                    foreach ($images as $image) {
                        array_push($imageIDs, Images::create([
                            'path_name' => $image,
                        ])->id);
                    }
                } else {
                    $imageIDs = null;
                }

                // dd($requests->file('path_docs'));

                $equipmentID = Equipment::insertGetId([
                    'property_no' => $requests->property_no,
                ]);

                if ($requests->type_of_requests_id == 3) {
                    $ictID = IctForms::create([
                        'date_requested' => $requests->date_requested,
                        'request_no' => $requests->request_no,
                        'users_id' => $requests->users_id,
                        'equipment_id' => $equipmentID,
                        'type_of_requests_id' => $requests->type_of_requests_id,
                        'type_request_description' => $requests->type_request_description,
                        'status' => 'pending',
                    ]);
                } else {
                    $ictID = IctForms::create([
                        'date_requested' => $requests->date_requested,
                        'request_no' => $requests->request_no,
                        'equipment_id' => $equipmentID,
                        'users_id' => $requests->users_id,
                        'type_of_requests_id' => $requests->type_of_requests_id,
                        'status' => 'pending',
                    ]);
                }


                if ($docID != null && $imageIDs != null) {
                    foreach ($imageIDs as $imageID) {
                        IctRequests::insert([
                            'ict_forms_id' => $ictID->id,
                            'images_id' => $imageID,
                            'documents_id' => $docID,
                        ]);
                    }
                } elseif ($docID != null && $imageIDs == null) {
                    IctRequests::insert([
                        'ict_forms_id' => $ictID->id,
                        'documents_id' => $docID,
                    ]);
                } elseif ($docID == null && $imageIDs != null) {
                    foreach ($imageIDs as $imageID) {
                        IctRequests::insert([
                            'ict_forms_id' => $ictID->id,
                            'images_id' => $imageID,
                        ]);
                    }
                }

                if (sizeof($requests_for_area) >= 0) {
                    foreach ($requests_for_area as $id) {
                        if ($id == 12) {
                            AreaRequests::insert([
                                'ict_forms_id' => $ictID->id,
                                'area_of_requests_id' => $id,
                                'has_description' => $requests->SF_description,
                            ]);
                        } elseif ($id == 13) {
                            AreaRequests::insert([
                                'ict_forms_id' => $ictID->id,
                                'area_of_requests_id' => $id,
                                'has_description' => $requests->OH_description,
                            ]);
                        } elseif ($id == 14) {
                            AreaRequests::insert([
                                'ict_forms_id' => $ictID->id,
                                'area_of_requests_id' => $id,
                                'has_description' => $requests->UD_description,
                            ]);
                        } else {
                            AreaRequests::insert([
                                'ict_forms_id' => $ictID->id,
                                'area_of_requests_id' => $id,
                                'has_description' => '',
                            ]);
                        }
                    }
                }


                return back()->with('success', 'Your ICT job Request has been created.');
                break;

            case 'print':
                dd($requests->action);

                break;
        }
    }
}
