@extends('master')

@section('content')

	@if(isset($del_cuis_name))
		<p class="text-center">Cuisine "{{ $del_cuis_name }}" deleted successfully.</p>
	@endif

	@include('auth.add_cuis_button')

	@include('search.search_cuis')

	@if(isset($cuisines))
	    <div>
	    	<table class="table table-striped" style="text-align: center; width: 60%; margin: auto;">
		        @foreach($cuisines as $cuisine)
		            <tr>
		            	<td>
		            		<a href="/cuisines/{{ $cuisine->id }}">
		            			{{ $cuisine->cuisine_name }} →
		            		</a>
		            	</td>
		            	
		            	@include('auth.del_cuis_button')
		            	
		            </tr>
		        @endforeach
	        </table>
	    </div>
	@endif


@endsection