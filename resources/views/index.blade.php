@extends('welcome')

@section('content')
	<div class="articles">
        @foreach($articles as $article)
			<div class="article row justify-content-center">
				<div class="col-md-6">
					<div class="card">
						<a href="{{$article->slug}}"><img src="/storage/{{$article->pic}}" class="card-img-top" alt="{{$article->title}}" title="{{$article->title}}" /></a>
						<p class="card-title text-center article-title"><a class="black-link" href="">{{$article->title}}</a></p>
						<p class="card-text text-center">{{$article->intro}}...</p>
						<a href="/{{$article->slug}}" target="_blank" class="text-center">اقرا المزيد</a>
					</div>
				</div>
			</div>
        @endforeach
    </div>
	<div class="row justify-content-center pagination">
			<div class="col-md-2">
				<a href="{{$articles->nextPageUrl()}}" class="btn btn-primary white-link">التالي</a>
				<a href="{{$articles->previousPageUrl()}}" class="btn btn-primary white-link">السابق</a>
			</div>
        </div>
@endsection