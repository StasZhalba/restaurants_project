@if(Auth::user())
	@if(Auth::user()->email === 'john@example.com')

		<script src="/vendor/jquery/jquery.min.js"></script>
		<script src="/js/modal-del.js"></script>

		<!-- Button trigger modal -->
		<button type="button" class="btn btn-danger" data-toggle="modal" data-id="" data-title="{{ $dish->dish_name }}" data-target="#myModal" data-href="/dishes/{{ $dish->id }}/delete" id="mod-butt">
			<span class="glyphicon glyphicon-trash"></span>
		</button>

		@include('auth.modal')

		
    @endif
@endif