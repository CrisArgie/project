<?php

namespace App\Http\Controllers;

use App\Models\PostRepairInspections;
use App\Models\PreRepairInspections;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class PostInspectionsController extends Controller
{
    public function show(PreRepairInspections $preRI, Request $request)
    {
        // dd($request->id);
        // dd($preRI->where('id', $request->id)->where('status', 'in-progress')->first());

        return view('requests.post-repair', [
            'rrId' => $preRI->where('id', $request->id)->where('status', 'in-progress')->first(),
        ]);
    }

    public function create(Request $request)
    {
        // dd('need post inspection => ' . $request->id );

        PostRepairInspections::create([
            'pre_repair_inspections_id' => $request->id,
            'status' => 'pending',
        ]);

        return redirect('/requests/post-inspection/' . $request->id)->with('success', 'Post Created');
    }

    public function update(PostRepairInspections $post)
    {
        $state = '';
        $status = '';
        switch (request()->action) {
            case 'done':
                $state = 'filled';
                $status = 'done';
                $attributes = $this->validateInput($post, $state);

                // dd();


                $attributes['repair_shop'] = request()->repair_shop;
                $attributes['repair_shop_date'] = request()->repair_shop_date;
                $attributes['invoice_no'] = request()->invoice_no;
                $attributes['job_order_no'] = request()->job_order_no;
                $attributes['job_order_date'] = request()->job_order_date;
                $attributes['amt_no'] = request()->amt_no;
                $attributes['payable_account'] = request()->payable_account;
                $attributes['recommendation'] = request()->recommendation;
                $attributes['status'] = $status;



                PreRepairInspections::where('id', request()->id)->where('status', 'in-progress')->first()->repair_requests->update([
                    'status' => $status,
                ]);
                PreRepairInspections::where('id', request()->id)->where('status', 'in-progress')->update([
                    'status' => $status,
                ]);
                $post->where('pre_repair_inspections_id', request()->id)->where('status', 'pending')->update($attributes);

                return redirect('/requests')->with('success', 'Post Repair Inspection Request: Done.');


                break;
            case 'save':
                $state = 'nullable';
                $status = 'pending';
                $attributes = $this->validateInput($post, $state);


                $attributes['repair_shop'] = request()->repair_shop;
                $attributes['repair_shop_date'] = request()->repair_shop_date;
                $attributes['invoice_no'] = request()->invoice_no;
                $attributes['job_order_no'] = request()->job_order_no;
                $attributes['job_order_date'] = request()->job_order_date;
                $attributes['amt_no'] = request()->amt_no;
                $attributes['payable_account'] = request()->payable_account;
                $attributes['recommendation'] = request()->recommendation;
                $attributes['status'] = $status;


                $post->where('pre_repair_inspections_id', request()->id)->where('status', 'pending')->update($attributes);

                return back()->with('success', 'Post Repair Inspection Request: Saved Pending.');

                break;
            case 'print':
                dd('print');

                break;
        }
    }

    public function validateInput(?PostRepairInspections $post = null, $state): array
    {
        $post ??= new PostRepairInspections();
        $todayDate = date('Y-m-d');


        // Rule::unique('posts', 'slug')->ignore($post)
        return request()->validate([
            'repair_shop' => ['required'],
            'repair_shop_date' => ['required', 'date', 'after_or_equal:' . $todayDate],
            'invoice_no' => ['required', $state],
            'job_order_no' => ['required', $state],
            'job_order_date' => ['required', 'date', 'after_or_equal:' . $todayDate],
            'amt_no' => ['required', $state],
            'payable_account' => ['required', 'nullable'],
            'recommendation' => ['required', 'nullable'],
        ]);
    }
}
