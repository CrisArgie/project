<?php

namespace App\Http\Controllers;

use App\Mail\DeleteAccount;
use App\Models\Divisions;
use App\Models\PostRepairInspections;
use App\Models\Users;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
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
            'divisions' => Divisions::all(),
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
            case 'division_update':

                $this->validate(request(), [
                    'divisions_id' => ['required', 'integer'],
                ]);

                Users::find(request()->user()->id)->update([
                    'divisions_id' => request()->divisions_id,
                ]);

                return back()->with('success', 'Divisions Updated');
                break;
        }
    }

    public function destroy()
    {
        $user = Users::findOrFail(auth()->user()->id);

        switch (request()->action) {
            case 'account_delete':

                $value = request()->confimation_password;
                $hashedValue = auth()->user()->password;
                $valid = Hash::check($value, $hashedValue);

                // dd($user->repairrequest->isEmpty());

                if ($valid) {

                    // dd($user->repairrequest->isEmpty() && $user->ictforms->isEmpty(), 'valid');
                    Mail::to($user->email)->send(new DeleteAccount($user->first_name, $user->email));

                    if ($user->repairrequest->isEmpty() && $user->ictforms->isEmpty()) {
                        $user->delete();

                        auth()->logout();
                        return redirect('/')->with('success', 'Thank you for using the site!');
                    } else {
                        // dd($user->repairrequest->last()->prerepairinspections->postrepairinspections);


                        if (!$user->ictforms->isEmpty()) {
                            foreach ($user->first()->ictforms as $ictitem) {
                                $ictitem->update(['status' => 'deleted']);
                                $ictitem->delete();
                            }
                        }
                        if (!$user->repairrequest->isEmpty()) {
                            foreach ($user->repairrequest as $item) {
                                if ($item->prerepairinspections == null) {
                                    $item->update(['status' => 'deleted']);
                                    $item->delete();
                                } else {
                                    // foreach ($item->prerepairinspections as $val) {
                                    if ($item->prerepairinspections->postrepairinspections == null) {
                                        $item->prerepairinspections->update(['status' => 'deleted']);
                                        $item->update(['status' => 'deleted']);
                                        $item->prerepairinspections->delete();
                                        $item->delete();
                                    } else {
                                        $item->prerepairinspections->postrepairinspections->update(['status' => 'deleted']);
                                        $item->prerepairinspections->update(['status' => 'deleted']);
                                        $item->update(['status' => 'deleted']);
                                        $item->prerepairinspections->postrepairinspections->first()->delete();
                                        $item->prerepairinspections->delete();
                                        $item->delete();
                                    }
                                    // }
                                }
                            }
                        }


                        $user->delete();

                        auth()->logout();
                        return redirect('/')->with('success', 'Thank you for using the site!');
                    }
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
