@extends('master')

@section('content')

<form action="/add_dish/store" class="form-horizontal" enctype="multipart/form-data" method="post">
	{{ csrf_field() }}

	<div class="form-group">
		<label for="dish_name" class="col-sm-3 control-label">dish name</label>
		<div class="col-sm-4">
			<input type="text" name="dish_name" class="form-control" required>
		</div>
	</div>

	<div class="form-group">
		<label for="image" class="col-sm-3 control-label">choose image</label>
		<div class="col-sm-4">
			<input type="file" name="image" accept="image/*" required>
		</div>
	</div>

	<div class="form-group">
		<label for="description" class="col-sm-3 control-label">description</label>
		<div class="col-sm-4">
			<textarea name="description" class="form-control" rows="5" required></textarea>
		</div>
	</div>

	<div class="form-group">
		<div class="col-sm-offset-3 col-sm-10">
			<button type="submit" class="btn btn-primary">Add new dish</button>
		</div>
	</div
</form>

@endsection