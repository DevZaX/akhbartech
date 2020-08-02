<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Article;

class ArticleController extends Controller
{
    public function __construct()
	{
		$this->middleware('auth');
	}
	
	public function index()
	{
		return view('articles.index',['articles'=>Article::all()]);
	}
	
	public function create()
	{
		return view('articles.create');
	}
	
	public function store()
	{
		Article::create([
			'title' => request('title'),
			'slug' => request('slug'),
			'intro' => request('intro'),
			'body' => request('body'),
			'pic' => request('pic')->store('pics')
		]);
		return back();
	}
	
	public function update($id)
	{
		if(request('pic'))
		{
			Article::find($id)->update([
			'title' => request('title'),
			'slug' => request('slug'),
			'intro' => request('intro'),
			'body' => request('body'),
			'pic' => request('pic')->store('pics')
		]);
		return back();
		}
		Article::find($id)->update([
			'title' => request('title'),
			'slug' => request('slug'),
			'intro' => request('intro'),
			'body' => request('body'),
		]);
		return back();
		
	}
	
	public function edit($id)
	{
		return view('articles.edit',['article'=>Article::find($id)]);
	}

	public function show($slug)
	{
		return view('articles.show',['article'=>Article::where('slug',$slug)->first()]);
	}
}
