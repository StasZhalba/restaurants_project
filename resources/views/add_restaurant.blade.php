<?php
use App\Cuisine;
use App\Dish;
$cuis = Cuisine::all();
$dishes = Dish::all();
?>

@extends('master')


@section('content')


@include('added_res')


@if(count($errors))	
	<div class="alert alert-danger col-sm-10">
		<p><b>Please enter all required fields.</b></p>
	</div>
@endif


<form action="/add_restaurant/store" class="form-horizontal" enctype="multipart/form-data" method="post">
	{{ csrf_field() }}

	<div class="form-group">
		<label for="restaurant_name" class="col-sm-3 control-label">restaurant name</label>
		<div class="col-sm-4">
			<input type="text" name="restaurant_name" class="form-control" required>
		</div>
	</div>

	<div class="form-group">
		<label for="cuisine_id" class="col-sm-3 control-label">select cuisine</label>
		<div class="col-sm-4">
		<select name="cuisine_id" class="form-control" required>
			<option value="">click here</option>
			@foreach($cuis as $c)
				<option value="{{ $c->id }}">{{ $c->cuisine_name }}</option>
			@endforeach
		</select>
		</div>
	</div>

	<div class="form-group">
		<label for="dish_id" class="col-sm-3 control-label">select dishes</label>
		<div class="col-sm-4">
		<select name="dish_id[]" multiple class="form-control" required>
			<option value="">Choose one or more</option>
			@foreach($dishes as $dish)
				<option value="{{ $dish->id }}">{{ $dish->dish_name }}</option>
			@endforeach
		</select>
		</div>
	</div>

	<div class="form-group">
		<label for="restaurant_address" class="col-sm-3 control-label">restaurant address</label>
		<div class="col-sm-4">
			<input type="text" name="restaurant_address" class="form-control" required>
		</div>
	</div>	

	<div class="form-group">
		<label for="restaurant_seats" class="col-sm-3 control-label">restaurant seats</label>
		<div class="col-sm-4">
			<input type="text" name="restaurant_seats" class="form-control" required>
		</div>
	</div>

	<div class="form-group">
		<label for="restaurant_owner" class="col-sm-3 control-label">restaurant owner</label>
		<div class="col-sm-4">
			<input type="text" name="restaurant_owner" class="form-control" required>
		</div>
	</div>

	<div class="form-group">
		<label for="image" class="col-sm-3 control-label">choose image</label>
		<div class="col-sm-4">
			<input type="file" name="image[]" multiple accept="image/*" required>
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
			<button type="submit" class="btn btn-primary">Add new restaurant</button>
		</div>
	</div
</form>




@include('errors')


@endsection