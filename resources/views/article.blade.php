@extends('welcome')

@section('content')

	<div class="article row justify-content-center">
				<div class="col-md-6">
					<div class="card">
						<a href="{{$article->slug}}"><img src="/storage/{{$article->pic}}" class="card-img-top" alt="{{$article->title}}" title="{{$article->title}}" /></a>
						<h2 class="card-title text-center"><a class="black-link" href="">{{$article->title}}</a></h2>
						<div class="card-text">{!! $article->body !!}</div>
					</div>
				</div>
			</div>

@endsection