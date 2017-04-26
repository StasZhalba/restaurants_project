@if(count($errors))	
	<br>
	<div class="alert alert-danger col-sm-12 my-errors">		
		<p class="text-center">Error:</p>		
		@foreach($errors->all() as $error)
			<p class="text-center">{{ $error }}</p>
		@endforeach			
	</div>
	<br>
@endif