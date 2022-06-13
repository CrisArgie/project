<?php

namespace App\Http\Controllers;

use App\Models\Divisions;
use App\Models\IctForms;
use App\Models\PostRepairInspections;
use App\Models\PreRepairInspections;
use App\Models\RepairRequest;
use App\Models\Users;
use Illuminate\Support\Facades\DB;

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


        $ictandrepair = DB::table(DB::raw('(SELECT date_requested, status FROM repair_requests
        UNION ALL
        SELECT date_requested, status FROM ict_forms) as t'))
            ->select(DB::raw('DATE_FORMAT(date_requested,\'%m\') AS month'), DB::raw('SUM(CASE WHEN status = \'done\' THEN 1 ELSE 0 END) AS done'), DB::raw('SUM(CASE WHEN status = \'pending\' THEN 1 ELSE 0 END) AS pending'), DB::raw('SUM(CASE WHEN status = \'in-progress\' THEN 1 ELSE 0 END) AS inprogress'))
            ->whereIn('status', ['in-progress', 'pending', 'done'])
            ->where('date_requested', 'like', date('Y') . '%')
            ->groupByRaw('month')
            ->get();

        $divisions = Users::select(Users::raw('COUNT(*) as count'), Users::raw('divisions_id as division'))->whereIn('user_type', ['customer', 'technician'])->groupByRaw('division')->get();

        return view('admin.dashboard', [
            'name' => Divisions::all(),
            'post' => $postrequest,
            'pre' => $prerequest,
            'ictrequests' => $ictrequest,
            'repairrequests' => $request,
            'perMir' => $ictandrepair,
            'div' => $divisions,
        ]);
    }



    public function destroy()
    {
        switch (request()->action) {
            case 'ict-delete':
                if (request()->ict != null) {
                    $ict = IctForms::where('request_no', request()->ict)->first();

                    $ict->update(['status' => 'deleted']);
                    $ict->delete();

                    return back()->with('success', 'Deletion success.');
                } else {
                    return back()->with('fail', 'Deletion fail.');
                }
                break;
            case 'repair-delete':
                if (request()->repair != null) {
                    $repair = RepairRequest::where('request_no', request()->repair)->first();

                    $repair->update(['status' => 'deleted']);
                    $repair->delete();

                    return back()->with('success', 'Deletion success.');
                } else {
                    return back()->with('fail', 'Deletion fail.');
                }
                break;
            case 'prerepair-delete':
                if (request()->pre != null) {
                    $pre = RepairRequest::findOrFail(request()->pre);
                    // dd($pre);
                    $pre->update(['status' => 'pending']);

                    $pre->prerepairinspections->update(['status' => 'deleted']);
                    $pre->prerepairinspections->delete();

                    return back()->with('success', 'Deletion success.');
                } else {
                    return back()->with('fail', 'Deletion fail.');
                }
                break;
            case 'postrepair-delete':
                if (request()->post != null) {
                    $post = PreRepairInspections::findOrFail(request()->post);
                    // $post = PostRepairInspections::findOrFail(request()->post);
                    $post->update(['status' => 'pending']);

                    $post->postrepairinspections->update(['status' => 'deleted']);
                    $post->postrepairinspections->delete();

                    return back()->with('success', 'Deletion success.');
                } else {
                    return back()->with('fail', 'Deletion fail.');
                }
                break;
        }
    }
}
