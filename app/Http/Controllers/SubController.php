<?php

namespace App\Http\Controllers;

use App\Sub;
use Illuminate\Http\Request;

class SubController extends Controller
{
    public function store()
    {
    	request()->validate(['email'=>'required|email']);
    	Sub::create([
    		'email' => request('email')
    	]);
    	session()->flash('success',true);
    	return back();
    }
}
