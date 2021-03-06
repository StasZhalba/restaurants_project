@extends('master')


@section('content')

	
	<table class="table table-striped" style="text-align: center; width: 60%; margin: auto;">
		<tr>
			<td>Name</td>
			<td>{{ $cuisine->cuisine_name }}</td>
		</tr>
		<tr>
			<td>Created at</td>
			<td>{{ $cuisine->created_at }}</td>
		</tr>
		<tr>
			<td>Updated at</td>
			<td>{{ $cuisine->updated_at }}</td>
		</tr>

	</table>

	<br>

	<p class="text-center">
		@include('auth.del_cuis_button')
	</p>

	

	<p class="text-center">
		<a href="/cuisines/{{$cuisine->id}}/restaurants"">
			<button class="btn btn-default">Show {{ $cuisine->cuisine_name }} restaurants →</button>
		</a>
	</p>

@endsection