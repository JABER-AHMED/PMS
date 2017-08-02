<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Sentinel;

class LoginController extends Controller
{
    public function login()
    {
    	return view('auth.login');
    }

    public function postLogin(Request $request)
    {
    	Sentinel::authenticate($request->all());

    	$slug = Sentinel::getUser()->roles()->first()->slug;

        if ($slug == 'doctor') {
            return redirect('/doctor');
        }elseif($slug == 'assistant'){
            return redirect('/assistant');
        }
    }

    public function logout()
    {
    	Sentinel::logout();
    	return redirect()->route('login');
    }
}
