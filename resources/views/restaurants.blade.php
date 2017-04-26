@extends('master')

@section('content')

	@if(isset($del_rest_name))		
		<p class="text-center">Restaurant "{{ $del_rest_name }}" deleted successfully.</p>
	@endif

	@include('auth.add_rest_button')

	@include('search.search_rest')
	
    @if(isset($restaurants))

		<table class="table table-striped" style="text-align: center; width: 80%; margin: auto;">
			<tr>
				<td>
					Name
					<a href="{{ url('/restaurants/sort/restaurant_name') }}" style="cursor: pointer;">
						<button class="btn btn-default">
							<span class="glyphicon glyphicon-sort-by-alphabet"></span>
						</button>
					</a>
					<a href="/restaurants/sort/restaurant_name/desc">
						<button class="btn btn-default">
							<span class="glyphicon glyphicon-sort-by-alphabet-alt"></span>
						</button>
					</a>
				</td>
				<td>
					Rating
					<a href="{{ url('/restaurants/sort/rating') }}" style="cursor: pointer;">
						<button class="btn btn-default">
							<span class="glyphicon glyphicon-sort-by-order"></span>
						</button>
					</a>
					<a href="/restaurants/sort/rating/desc">
						<button class="btn btn-default">
						<span class="glyphicon glyphicon-sort-by-order-alt"></span>
						</button>
					</a>
				</td>
				<td></td>
				<td></td>

			</tr>
	        @foreach($restaurants as $restaurant)
	            <tr>
					<td>
						<img src="/uploads/{{$restaurant->image()->fileName}}" width="150">
					</td>
					<td style="padding-top: 8%; font-size: 25px">
		            	<a href="/restaurants/{{ $restaurant->id }}">
		            		{{ $restaurant->restaurant_name }} →
		            	</a>
	            	</td>
	            	<td style="padding-top: 8%;">
						<div>
							<img src="/img/icons/rating-icon.png" height="18">
							<span>{{ $restaurant->rating }}</span>
						</div>
						<br>
						<div style="margin-top: 30%;">
							<img src="/img/icons/views-icon.png" height="18">
							<span style="color: #909399; font-size: 15px;">{{$restaurant->views}}</span>
						</div>
					</td>
					<td> 
						@include('auth.del_rest_button')
					</td>
				</tr>
	        @endforeach
	    </table>
		{{$restaurants->links()}}

    @endif


	@include('errors')

@endsection