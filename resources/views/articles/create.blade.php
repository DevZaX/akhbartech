@extends('home')

@section('content')

<div class="row justify-content-center">

	<div class="col-md-8  mt-2">
	
	<p>اضف مقالة</p>
	
		<form action="/articles" method="post" enctype="multipart/form-data">
		
		@csrf
		
			<div class="form-group">
			
				<input type="text" class="form-control" placeholder="العنوان" name="title" />
			
			</div>
			
			<div class="form-group">
			
				<input type="text" class="form-control" placeholder="الرابط" name="slug" />
			
			</div>
			
			<div class="form-group">
			
				<input type="text" class="form-control" placeholder="المقدمة" name="intro" />
			
			</div>
			
			<div class="form-group">
			
				<textarea rows="10" class="form-control" placeholder="العرض" name="body"></textarea>
			
			</div>
			
			<div class="form-group">
			
				<label>صورة للمقال</label>
			
				<input type="file" class="form-control" name="pic" />
			
			</div>
			
			<div class="form-group">
			
				<button class="btn btn-primary"> اضف </button>
			
			</div>
		
		</form>
	
	</div>

</div>

@endsection

@section('scripts')
	<script src="https://cdn.ckeditor.com/4.14.1/full/ckeditor.js"></script>
    <script>
        CKEDITOR.replace( 'body' );
    </script>
@endsection