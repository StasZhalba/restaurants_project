@extends('master')

@section('content')

	
	<div align="center" class="panel panel-default" style="width: auto; margin: auto;">
		<div class="panel-heading">{{ $dish->dish_name }}</div>
		<img src="/uploads/{{ $dish->file_name }}">
		<div class="panel-heading">DESCRIPTION</div>
			<div class="panel-body">			
			<div align="left">	
				<p>{{ $dish->description }}</p>
			</div>
		</div>		
	</div>

	<br>
	<p class="text-center">
		@include('auth.del_dish_button')
	</p>
	<br>
	@include('errors')
	<br>
	

@endsection