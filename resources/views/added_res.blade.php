@if(isset($restaurant))
		<p>New restaurant added successfully. <a href="/restaurants">Show all restaurants →</a></p>

		<p>Added restaurant:</p>
		<table class="table table-striped" style="text-align: center; width: 60%;">
			<tr>
				<td>id</td>
				<td>{{ $restaurant->id }}</td>
			</tr>
			<tr>
				<td>restaurant_name</td>
				<td><a href="/restaurants/{{ $restaurant->id }}">{{ $restaurant->restaurant_name }} →</a></td>
			</tr>
			<tr>
				<td>cuisine_id</td>
				<td>{{ $restaurant->cuisine_id }}</td>				
			</tr>
			<tr>
				<td>user_id</td>
				<td>{{ $restaurant->user_id }}</td>				
			</tr>			
			<tr>
				<td>restaurant_address</td>
				<td>{{ $restaurant->restaurant_address }}</td>				
			</tr>
			<tr>
				<td>restaurant_seats</td>
				<td>{{ $restaurant->restaurant_seats }}</td>				
			</tr>
			<tr>
				<td>restaurant_owner</td>
				<td>{{ $restaurant->restaurant_owner }}</td>				
			</tr>
			<tr>
				<td>description</td>
				<td>{{ $restaurant->description }}</td>
			</tr>
			<tr>
				<td>created_at</td>
				<td>{{ $restaurant->created_at }}</td>				
			</tr>
			<tr>
				<td>updated_at</td>
				<td>{{ $restaurant->updated_at }}</td>				
			</tr>
		</table><br>
@endif