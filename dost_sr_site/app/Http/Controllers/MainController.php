<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MainController extends Controller
{
    public function fnIndex()
    {
        return view('index');
    }

    public function fnLogin()
    {
        return view('log-in');
    }
    public function fnRegistration()
    {
        return view('registration');
    }
}
