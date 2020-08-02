@extends('welcome')

@section('content')
	<div class="row justify-content-center">
		<div class="col-md-6">
			<form class="d-flex justify-content-center" action="/login" method="post">
				@csrf
				<div>
					<div class="form-group">
						<input type="text" name="email" placeholder="email" />
					</div>
					<div class="form-group">
						<input type="password" name="password" placeholder="password" />
					</div>
					<div class="form-group">
						<button class="btn btn-primary">submit</button>
					</div>
				</div>
			</form>
		</div>
	</div>
@endsection