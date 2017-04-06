@extends('master')


@section('content')

	
@if(count($restaurants))	
	<table class="table table-striped" style="text-align: center; width: 60%; margin: auto;">
		@foreach($restaurants as $restaurant)
				<tr>
					<td>
						<a href="/restaurants/{{ $restaurant->id }}">
							{{ $restaurant->restaurant_name }}
						</a>
					</td>
				</tr>
		@endforeach
	</table>

@else
<p class="text-center">
	This cuisine has no restaurants. You can <a href="/add_restaurant">add a new one →</a>
</p>

@endif
@endsection