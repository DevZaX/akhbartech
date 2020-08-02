<?php

namespace App\Http\Controllers;

use App\Article;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function index()
    {
    	return view('index',['articles'=>Article::paginate(4)]);
    }
}
