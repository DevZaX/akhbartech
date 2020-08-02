@extends('welcome')

@section('content')

	<div class="article row justify-content-center">
				<div class="col-md-6">
					<div class="card">
						<a href="{{$article->slug}}"><img src="/storage/{{$article->pic}}" class="card-img-top" alt="{{$article->title}}" /></a>
						<h2 class="card-title text-center"><a class="black-link" href="">{{$article->title}}</a></h2>
						<p class="card-text text-center">{!! $article->body !!}</p>
					</div>
				</div>
			</div>

@endsection