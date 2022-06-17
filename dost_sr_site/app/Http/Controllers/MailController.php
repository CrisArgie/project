<?php

namespace App\Http\Controllers;

use App\Mail\ForgotPassword;
use App\Models\Users;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use Illuminate\Validation\ValidationException;

class MailController extends Controller
{
    public function index()
    {
        return view('mails.enter-email');
    }

    public function show($id)
    {
        $user = Users::findOrFail($id);

        return view('mails.enter-code', [
            'user' => $user,
        ]);
    }

    public function checkCode()
    {
        $user = Users::findOrFail(request()->id);

        $valid = Hash::check(request()->token, $user->remember_token);

        if ($valid) {
            // $this->passView($user);
            return redirect('/auth/newpassword/'. $user->id);
        } else {
            throw ValidationException::withMessages([
                'token' => 'Incorrect Code.',
            ]);
        }
    }
    public function passView()
    {
        $user = Users::findOrFail(request()->id);

        return view('mails.new-password', [
            'user' => $user,
        ]);
    }

    public function update(Request $request)
    {
        $user = Users::findOrFail($request->id);

        switch ($request->action) {
            case 'update':

                $valid = Hash::check($request->curr_password, $user->password);

                if ($valid) {

                    $this->validate($request, [
                        'password' => ['required', 'min:7', 'confirmed', 'max:255'],
                        'password_confirmation' => ['required', 'min:7', 'max:255'],
                    ], [
                        'password_confirmation.confirmed' => 'The confirmation password does not match.',
                    ]);

                    // dd($request);

                    $user->update([
                        'password' => $request->password,
                        'remember_token' => null,
                    ]);

                    // auth()->logout();
                    return redirect('/login')->with('success', 'Password Updated');
                } else {
                    throw ValidationException::withMessages([
                        'curr_password' => 'Error! Incorrect password.'
                    ]);
                }

                break;
        }
    }

    public function checkMail()
    {
        $attribute = $this->validate(
            request(),
            [
                'email' => ['required', 'email', 'max:255']
            ],
            [
                'email' => 'Your provided credentials could not be verified.'
            ]
        );

        $user = Users::where('email', request()->email)->get();

        // if (!auth()->attempt($attribute)) {
        //     throw ValidationException::withMessages([
        //         'email' => 'Your provided credentials could not be verified.',
        //     ]);
        // }


        if ($user->isEmpty()) {
            throw ValidationException::withMessages([
                'email' => 'Your Email could not be found.'
            ]);
        } else {
            $n = 6;
            $validCode = $this->getRandomString($n);

            $validCod = bcrypt($validCode);


            $user->first()->update([
                'remember_token' => $validCod,
            ]);
            // dd($validCode, request(), $user->first()->email, $user->first()->first_name);

            Mail::to($user->first()->email)->send(new ForgotPassword($user->first()->first_name, $validCode, $user->first()->id));

            return back()->with('success', 'Mail sent successfully! check your mail inbox.');
        }
    }

    public function getRandomString($n)
    {
        $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
        $randomString = '';

        for ($i = 0; $i < $n; $i++) {
            $index = rand(0, strlen($characters) - 1);
            $randomString .= $characters[$index];
        }

        return $randomString;
    }
}
