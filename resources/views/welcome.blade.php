<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="robots" content="index,follow">
        <meta name="description" content="{{$meta['description']}}">
        <title>{{$meta['title']}}</title>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
        <link rel="stylesheet" type="text/css" href="/css/app.css">
    </head>
    <body>
       @error('email')
	       @php
	    		$messages['The email field is required.'] = "المرجو ادخال بريدك الالكتروني";
	    		$messages['The email must be a valid email address.'] = "البريد الالكتروني غير صحيح";
	    	@endphp
			<div class="alert alert-danger">
       			<span>{{$messages[$message]}}</span>
       		</div>
       @enderror
       @if(session()->has('success'))
       		<div class="alert alert-success">
       			<span>تم حفظ البريد الالكتروني بنجاح</span>
       		</div>
       @endif
       <div class="_top"></div>
       <p class="text-center mt-2 logo"><a class="black-link" href="/">اخر الاخبار التقنية و التكنولوجية</a></p>
       @yield('content')
        
		<div class="row justify-content-center form">
			<div class="col-md-6">
				<p class="text-center">اخبار متجددة اسبوعيا</p>
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
