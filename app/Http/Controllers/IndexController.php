<?php

namespace App\Http\Controllers;

use App\Article;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function index()
    {
    	$meta['description'] = "اخر الاخبار التقنية و التكنولوجية لمعرفة المستجدات في العالم الرقمي";
		$meta['title'] = "اخر الاخبار التقنية و التكنولوجية";
    	return view('index',['articles'=>Article::where('draft',0)->paginate(4),'meta'=>$meta]);
    }
}
