@if(Auth::guest() || Auth::user()->email !== 'john@example.com')
	<p class="text-center">Login as administrator John Doe to add or delete a restaurant.</p>
@elseif(Auth::user()->email === 'john@example.com')
	<p class="text-center">
		You are logged in as {{ Auth::user()->name }}. You can add or delete a restaurant.
	</p>
	<p class="text-center">
		<a href="{{ url('/add_restaurant') }}">
			<button class="btn btn-default">Add new restaurant →</button>
		</a>
	</p>
@endif