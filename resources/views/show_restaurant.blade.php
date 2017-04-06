@extends('master')


@section('content')

	<!-- Name -->
	<div align="center" class="panel panel-default" style="width: 40%; margin: auto;">
		<div class="panel-heading">{{ $restaurant->restaurant_name }}</div>
	</div>
	<!-- End of name -->

	<!-- Slider -->
	<div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
		<!-- Indicators -->
		<ol class="carousel-indicators">	
			@for($i = 0; $i < count($restaurants); $i++)
				<li data-target="#carousel-example-generic" data-slide-to="{{ $i }}"
				@if($i === 0)
					{{ 'class=active' }}
				@endif
				></li>
			@endfor
		</ol>
		<!-- Wrapper for slides -->
		<div class="carousel-inner" role="listbox">	
			<div class="item active">
				<p class="text-center"><img src="/uploads/{{ $restaurant->fileName }}"></p>
				<div class="carousel-caption">
					{{ $restaurant->restaurant_name }}
				</div>
			</div>		
			@foreach($restaurants as $rest)
				@if($rest->fileName === $restaurant->fileName)
					@continue
				@endif
				<div class="item">
					<p class="text-center"><img src="/uploads/{{ $rest->fileName }}"></p>
					<div class="carousel-caption">
						{{ $rest->restaurant_name }}
					</div>
				</div>
			@endforeach
		</div>
		<!-- Controls -->
		<a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
			<span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
			<span class="sr-only">Previous</span>
		</a>
		<a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
			<span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
			<span class="sr-only">Next</span>
		</a>
	</div>
	<!-- end of slider -->

	<br>

	<!-- Description -->
	<div align="center" class="panel panel-default">
		<div class="panel-heading">DESCRIPTION</div>
			<div class="panel-body">			
			<div align="left">	
				<p>{{ $restaurant->description }}</p>
			</div>
		</div>
	</div>
	<!-- End of description -->


	<table class="table table-striped" style="text-align: center; width: 60%; margin: auto;">	
		<!--tr>
			<td>id</td>
			<td>{{ $restaurant->id }}</td>
		</tr-->
		<tr>
			<td>name</td>
			<td>{{ $restaurant->restaurant_name }}</td>
		</tr>
		<!--tr>
			<td>cuisine_id</td>
			<td>{{ $restaurant->cuisine_id }}</td>
		</tr-->
		<tr>
			<td>cuisine</td>
			<td><a href="/cuisines/{{ $restaurant->cuisine_id }}">{{ $restaurant->cuisine_name }} →</a></td>
		</tr>
		<tr>
			<td>address</td>
			<td>{{ $restaurant->restaurant_address }}</td>
		</tr>
		<tr>
			<td>seats</td>
			<td>{{ $restaurant->restaurant_seats }}</td>
		</tr>
		<tr>
			<td>owner</td>
			<td>{{ $restaurant->restaurant_owner }}</td>
		</tr>
		<tr>
			<td>dishes</td>
			<td>
				<a href="/restaurants/{{ $restaurant->id }}/show_dishes">
					<button class="btn btn-default">Show dishes →</button>
				</a>
			</td>
		</tr>
		<!--tr>
			<td>created_at</td>
			<td>{{ $restaurant->created_at }}</td>
		</tr>
		<tr>
			<td>updated_at</td>
			<td>{{ $restaurant->updated_at }}</td>
			
		</tr-->		
	</table>

	<br>
	<p class="text-center">
		@include('auth.del_rest_button')
	</p>
	<br>
	@include('errors')
	<br>
	@include('rating')
	<br>
	@include('pluso')
	<br>
	@include('add_comment')
	<br>
	@include('show_comments')


@endsection