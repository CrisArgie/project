<?php

namespace App\Http\Controllers;

use App\Models\AreaRequests;
use App\Models\IctForms;
use App\Models\IctRequests;
use App\Models\PostRepairInspections;
use App\Models\PreRepairInspections;
use App\Models\RepairRequest;
use App\Models\Users;
use Illuminate\Database\Eloquent\Collection;

class RequestsController extends Controller
{
    public function show(RepairRequest $repair_request, IctForms $ictforms, PreRepairInspections $prerepairinspections, PostRepairInspections $postrepairinspections)
    {

        $requestperY = $repair_request->select('*')->where(
            fn ($q) =>
            $q->whereIn('status', ['in-progress', 'pending', 'done'])
                ->where('date_requested', 'like', date('Y') . '%')
        )->join('equipment', 'repair_requests.equipment_id', '=', 'equipment.id')->get();

        $requestperM = RepairRequest::select(RepairRequest::raw('COUNT(*) as count'), RepairRequest::raw('DATE_FORMAT(date_requested,\'%M\') as monthly'))->groupByRaw('monthly')->orderBy('count', 'DESC')->get();

        $ictrequestperM = IctForms::select(IctForms::raw('COUNT(*) as count'), IctForms::raw('DATE_FORMAT(date_requested,\'%M\') as monthly'))->groupByRaw('monthly')->orderBy('count', 'DESC')->get();

        $groupedValue = $requestperY->groupBy('brand_model');
        $dupes = $groupedValue->filter(function (Collection $groups) {
            return $groups->count() > 0;
        });

        // dd($dupes);

        // ddd($requestperM, $ictrequestperM);

        return view('admin.requests', [
            'repair_request' => $repair_request->all(),
            'repair_ict' => $ictforms->all(),
            'pre_repair' => $prerepairinspections->all(),
            'post_repair' => $postrepairinspections->all(),
            'equipment' => $dupes,
            'RmonthBardata' => $requestperM,
            'ImonthBardata' => $ictrequestperM,
        ]);
    }

    public function destroy(RepairRequest $repairrequest, IctForms $ict)
    {
        // ddd(request());
        switch (request()->action) {
            case 'repair-delete':
                if ($repairrequest->where('request_no', request()->request_no)->get()->isEmpty()) {
                    return back()->with('fail', 'Cannot delete: this request.');
                }

                $repairrequest->where('request_no', request()->request_no)->first()->update(['status' => 'deleted']);
                $repairrequest->where('request_no', request()->request_no)->delete();

                return redirect('/view/requests')->with('success', 'Successfully deleted Request for Repair.');
                break;
            case 'ict-delete':
                if ($ict->where('request_no', request()->request_no)->get()->isEmpty()) {
                    return back()->with('fail', 'Cannot delete: this request.');
                }

                $ict->where('request_no', request()->request_no)->first()->update(['status' => 'deleted']);
                $ict->where('request_no', request()->request_no)->delete();

                return redirect('/view/requests')->with('success', 'Successfully deleted ICT job Request.');
                break;
            case 'prerepair-delete':

                $repair = $repairrequest->where('request_no', request()->request_no);
                // dd($repair->first()->prerepairinspections);

                if ($repair->first()->prerepairinspections->get()->isEmpty()) {
                    return back()->with('fail', 'Cannot delete: this request.');
                }

                $repair->first()->prerepairinspections->first()->update(['status' => 'deleted']);
                $repair->first()->prerepairinspections->first()->delete();

                $repair->first()->update(['status' => 'deleted']);
                $repair->delete();

                return redirect('/view/requests')->with('success', 'Successfully deleted Pre-repair Inspection Request.');
                break;
            case 'postrepair-delete':
                $repair = $repairrequest->where('request_no', request()->request_no);

                if ($repair->first()->prerepairinspections->first()->postrepairinspections->get()->isEmpty()) {
                    return back()->with('fail', 'Cannot delete: this request.');
                }

                $repair->first()->prerepairinspections->first()->postrepairinspections->first()->update(['status' => 'deleted']);
                $repair->first()->prerepairinspections->first()->postrepairinspections->first()->delete();


                $repair->first()->prerepairinspections->first()->update(['status' => 'deleted']);
                $repair->first()->prerepairinspections->first()->delete();

                $repair->first()->update(['status' => 'deleted']);
                $repair->delete();


                // dd('post', $repair->first()->prerepairinspections->first()->postrepairinspections);

                return redirect('/view/requests')->with('success', 'Successfully deleted Post-repair Inspection Request.');
                break;

            case 'multi-delete':

                if (request()->selected_user == null) {
                    return back()->with('fail', 'Select a User that you want to delete.');
                }

                $users = Users::whereIn('ID', request()->selected_user)->get();

                foreach ($users as $user) {
                    if ($user->repairrequest->isEmpty() && $user->ictforms->isEmpty()) {
                        $user->delete();
                    } else {
                        if (!$user->repairrequest->isEmpty()) {
                            foreach ($user->repairrequest as $itemr) {
                                if (!$itemr->prerepairinspections->isEmpty()) {
                                    foreach ($itemr->prerepairinspections as $itempre) {
                                        if (!$itempre->postrepairinspections->isEmpty()) {
                                            foreach ($itempre->postrepairinspections as $itempst) {
                                                $itempst->update(['status' => 'deleted']);
                                                $itempst->delete();

                                                $itempre->update(['status' => 'deleted']);
                                                $itempre->delete();

                                                $itemr->update(['status' => 'deleted']);
                                                $itemr->delete();
                                            }
                                        } else {
                                            $itempre->update(['status' => 'deleted']);
                                            $itempre->delete();

                                            $itemr->update(['status' => 'deleted']);
                                            $itemr->delete();
                                        }
                                    }
                                } else {
                                    $itemr->update(['status' => 'deleted']);
                                    $itemr->delete();
                                }
                            }
                        }

                        if (!$user->ictforms->isEmpty()) {
                            foreach ($user->ictforms as $itemi) {
                                $itemi->update(['status' => 'deleted']);
                                $itemi->delete();
                            }
                        }
                        $user->delete();
                    }
                }

                return redirect('/users')->with('success', 'Successfully deleted User(s).');
                break;
        }
    }

    public function index()
    {
        return view('customer.requests');
    }

    // public function edit()
    // {
    //     ddd(RepairRequest::find(request()->id));
    // }

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

    public function viewInfo($name, $id)
    {
        // dd($name);
        switch ($name) {
            case 'ict':
                $ict = IctForms::where('request_no', $id)->first();

                return view('admin.view-info', [
                    'requests' => $name,
                    'info' => $ict,
                ]);
                break;
            case 'repair':
                $repair = RepairRequest::where('request_no', $id)->first();

                return view('admin.view-info', [
                    'requests' => $name,
                    'info' => $repair
                ]);
                break;
        }
    }
}
