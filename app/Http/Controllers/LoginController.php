<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;

class LoginController extends Controller
{
    public function login()
	{
		if(Auth::attempt(['email'=>request('email'),'password'=>request('password')]))
		{
			return redirect('/home');
		}else
		{
			return redirect('/login');
		}
	}
	
	public function logout()
	{
		Auth::logout();
		return redirect('/login');
	}
}
