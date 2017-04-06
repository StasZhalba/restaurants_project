@extends('master')


@section('content')

@include('added_cuis')


@if(isset($cuisine))
	<div class="col-sm-offset-1 col-sm-10">
		<p>New cuisine added successfully. <a href="/cuisines">Show all cuisines →</a></p>
	</div>
@endif


@if(count($errors))	
	<div class="alert alert-danger col-sm-10">
		<p><b>Please enter all required fields.</b></p>
	</div>
@endif


<form action="/add_cuisine/store" class="form-horizontal" method="post">
	{{ csrf_field() }}

	<div class="form-group">
		<label for="cuisine_name" class="col-sm-3 control-label">cuisine name</label>
		<div class="col-sm-4">
			<input type="text" name="cuisine_name" class="form-control" required>
		</div>
	</div>

	<div class="form-group">
		<div class="col-sm-offset-3 col-sm-10">
			<button type="submit" class="btn btn-primary">Add new cuisine</button>
		</div>
	</div
</form>



@include('errors')


@endsection