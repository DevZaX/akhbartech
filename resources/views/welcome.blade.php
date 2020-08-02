<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="robots" content="index,follow">
        {{-- <meta name="description" content="{{$meta['description']}}"> --}}
        {{-- <meta property="og:type" content="{{$og['type']}}">
        <meta property="og:title" content="{{$og['title']}}">
        <meta property="og:description" content="{{$og['description']}}">
        <meta property="og:url" content="{{$og['url']}}">
		<meta property="og:image" content="{{$og['image']}}">
		@if( isset($og["imagewh"]) )
			<meta property="og:image:width" content="600" />
			<meta property="og:image:height" content="315" />
		@endif --}}
        <title>اخر الاخبار التقنية و التكنولوجية</title>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
        <link rel="stylesheet" type="text/css" href="/css/app.css">
        <link rel="icon" href="{{ asset( 'img/logo.png' ) }}" />
        <link rel="canonical" href="{{request()->url()}}">
    </head>
    <body>
        <div class="_top"></div>
       <h1 class="text-center mt-2"><a class="black-link" href="/">اخر الاخبار التقنية و التكنولوجية</a></h1>
       @yield('content')
        
		<div class="row justify-content-center form">
			<div class="col-md-6">
				<p class="text-center">ادخل بريدك الالكتروني ليصلك جديدنا</p>
				<form action="/subs" class="f" method="post">
				@csrf
					<div>
						<input class="form-control" name="email" placeholder="البريد الاكتروني" />
					</div>
					<div>
						<button class="btn btn-primary">ارسال</button>
					</div>
				</form>
			</div>
        </div>
		<div class="row justify-content-center footer">
			<div class="col-md-6">
				<p class="text-center"><a href="">زكرياء عبود</a></p>
			</div>
        </div>
    </body>
</html>
