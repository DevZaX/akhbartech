<?php

use Illuminate\Support\Facades\Route;
use Spatie\Sitemap\SitemapGenerator;

//login
Route::get('/login', function () {
    return view('login');
});
Route::post('/login','LoginController@login');
Route::get('/logout','LoginController@logout');

//admin
Route::get('/home','HomeController@index');
Route::get('/articles','ArticleController@index');
Route::post('/articles','ArticleController@store');
Route::get('/articles/{id}/edit','ArticleController@edit');
Route::put('/articles/{id}','ArticleController@update');
Route::get('/articles/create','ArticleController@create');

//blog
Route::get('/','IndexController@index');
Route::get('/{slug}','ArticleController@show');
Route::post('/subs','SubController@store');

//sitemap
Route::get('/g/sitemap',function(){
	SitemapGenerator::create("http://localhost:8000")->writeToFile(public_path('sitemap.xml'));
	Log::info("sitemap file created :");
	return "Done"; 
});







