<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Article;

class ArticleController extends Controller
{
    public function __construct()
	{
		$this->middleware('auth')->except(['show','index']);
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
			'pic' => request('pic')->store('pics'),
			'draft' => 1
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
			'pic' => request('pic')->store('pics'),
			'draft' => 0
		]);
		return back();
		}
		Article::find($id)->update([
			'title' => request('title'),
			'slug' => request('slug'),
			'intro' => request('intro'),
			'body' => request('body'),
			'draft' => 0
		]);
		return back();
		
	}
	
	public function edit($id)
	{
		return view('articles.edit',['article'=>Article::find($id)]);
	}

	public function show($slug)
	{
		$article = Article::where('slug',$slug)->where('draft',0)->first();
		if(!$article) abort(404);
		$meta['description'] = $article->intro;
		$meta['title'] = $article->title;
		return view('article',['article'=>$article,'meta'=>$meta]);
	}
}
