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
use Illuminate\Support\Carbon;

class RequestsController extends Controller
{
    public function show(RepairRequest $repair_request, IctForms $ictforms, PreRepairInspections $prerepairinspections, PostRepairInspections $postrepairinspections)
    {
        // dd(request());

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

    public function delete()
    {
        ddd(request());
    }

    public function index()
    {
        return view('customer.requests');
    }

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
}
