<?php

namespace App\Http\Controllers;

use App\Models\PostRepairInspections;
use Illuminate\Http\Request;

class PostInspectionsController extends Controller
{
    public function show()
    {
        return view('requests.post-repair');
    }

    public function create(Request $request)
    {
        // dd('need post inspection => ' . $request->id );

        PostRepairInspections::create([
            'pre_repair_inspections_id' => $request->id,
            'status' => 'pending',
        ]);

        return redirect('/requests/post-inspection/'. $request->id )->with('success', 'Post Created');
    }
}
