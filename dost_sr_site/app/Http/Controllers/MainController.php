<?php

namespace App\Http\Controllers;

use App\Models\PostRepairInspections;
use App\Models\Users;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\Rule;
use Illuminate\Validation\ValidationException;

class MainController extends Controller
{
    public function show()
    {
        return view('index');
    }


    // PROFILE FUNCTIONS
    public function index(Users $user)
    {
        return view('profile', [
            'user' => $user->find(request()->id),
        ]);
    }

    public function update(Request $request)
    {
        $user = Users::where('id', auth()->user()->id);
        switch ($request->action) {
            case 'update':

                $validator = Validator::make($request->all(), [
                    'first_name'    => ['required', 'max:255'],
                    'last_name'     => ['required', 'max:255'],
                ]);

                if ($validator->fails()) {
                    return back()
                        ->withErrors($validator)
                        ->withInput();
                }

                $validated = $validator->validated();
                $user->update($validated);

                return back()->with('success', 'User Information Updated');
                break;
            case 'email_update':

                $validator = Validator::make($request->all(), [
                    'email'         => ['required', 'email', 'max:255', Rule::unique('users', 'email')->ignore($request)],
                ]);

                if ($validator->fails()) {
                    return back()
                        ->withErrors($validator)
                        ->withInput();
                }

                $validated = $validator->validated();
                $user->update($validated);

                return back()->with('success', 'Email Updated');
                break;
            case 'password_update':

                $value = $request->curr_password;
                $hashedValue = auth()->user()->password;

                $valid = Hash::check($value, $hashedValue);

                if ($valid) {

                    $this->validate($request, [
                        'password' => ['required', 'min:7', 'confirmed', 'max:255'],
                        'password_confirmation' => ['required', 'min:7', 'max:255'],
                    ], [
                        'password_confirmation.confirmed' => 'The confirmation password does not match.',
                    ]);

                    $user->update([
                        'password' => bcrypt($request->password),
                    ]);

                    auth()->logout();
                    return redirect('/')->with('success', 'Password Updated');
                } else {
                    throw ValidationException::withMessages([
                        'curr_password' => 'Error! Invalid password.'
                    ]);
                }

                break;
            case 'accout_delete':
                // dd($request->_token);

                $value = $request->confimation_password;
                $hashedValue = auth()->user()->password;

                $valid = Hash::check($value, $hashedValue);

                if ($valid) {

                    $repairReq = $user->first()->repairrequest->whereIn('status', ['pending', 'in-progress', 'done'])->all();


                    foreach ($repairReq as $reprq) {
                        $prerqs[] = $reprq->prerepairinspections->first();
                    }

                    if ($prerqs != null) {

                        foreach ($prerqs as $prerq) {
                            $preIds[] = $prerq->id;
                        }

                        foreach ($preIds as $preId) {
                            $postID[]  = PostRepairInspections::all()->where('pre_repair_inspections_id', $preId);
                        }


                        if ($postID != null) {
                            foreach ($postID as $eachPost) {
                                if ($eachPost->first() != null) {
                                    $eachPost->first()->update(['status' => 'deleted']);
                                }
                            }
                        }

                        foreach ($prerqs as $prerq) {
                            $prerq->update(['status' => 'deleted']);
                        }

                        foreach ($repairReq as $reprq) {
                            $reprq->update(['status' => 'deleted']);
                        }
                    }



                    $user->update([
                        'password' => 'deleted',
                        'remember_token' => $request->_token,
                    ]);

                    if (!$user->first()->ictforms->whereIn('status', ['pending', 'in-progress', 'done'])->isEmpty()) {
                        $user->first()->ictforms->whereIn('status', ['pending', 'in-progress', 'done'])->update([
                            'status' => 'deleted',
                        ]);
                    }


                    auth()->logout();
                    return redirect('/')->with('success', 'Thank you for using the site!');
                } else {
                    throw ValidationException::withMessages([
                        'confimation_password' => 'Error! Incorrect password.'
                    ]);

                    // return redirect('/')->with('fail', 'Error Encountered! Account deleted.');
                }

                break;
        }
    }
}
