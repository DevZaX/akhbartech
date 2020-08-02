@extends('home')

@section('content')

<div class="row justify-content-start">

	<div class="col-md-12   mt-2">
	
		<a href="/articles/create" class="btn btn-primary">انشيء مقالة جديدة</a>
	
	</div>
	
	

</div>

<div class="row justify-content-center">
	
		<div class="col-md-8">
		
			<table class="table table-sm table-bordered table-striped">
			
				<thead>
				
					<th>عنوان المقال</th>
					<th></th>
					
				</thead>
				
				<tbody>
				
					@foreach($articles as $article)
					
						<tr>
						
							<td>{{ $article->title }}</td>
							<td><a href="/articles/{{ $article->id }}/edit">تعديل</a></td>
						
						</tr>
					
					@endforeach
				
				</tbody>
			
			</table>
		
		</div>
	
	</div>

@endsection