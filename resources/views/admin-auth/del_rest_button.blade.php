@if(Auth::user())
	@if(Auth::user()->email === 'john@example.com')

		<script src="/vendor/jquery/jquery.min.js"></script>
		<script src="/js/modal-del.js"></script>

		<!-- Button trigger modal -->
		<button type="button" class="btn btn-danger" data-toggle="modal" data-id="" data-title="{{ $restaurant->restaurant_name }}" data-target="#myModal" data-href="/restaurants/{{ $restaurant->id }}/delete" id="mod-butt">
			<span class="glyphicon glyphicon-trash"></span>
		</button>

		@include('auth.modal')

		
    @endif
@endif