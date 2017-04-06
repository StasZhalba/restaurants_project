@if(isset($cuisine))
	<p>New cuisine added successfully. <a href="/cuisines">Show all cuisines →</a></p>

	<p>Added cuisine:</p>
	<table class="table table-striped" style="text-align: center; width: 60%;">
		
		<tr>
			<td>id</td>
			<td>{{ $cuisine->id }}</td>
		</tr>
		<tr>
			<td>cuisine_name</td>
			<td>{{ $cuisine->cuisine_name }}</td>
		</tr>
		<tr>
			<td>created_at</td>
			<td>{{ $cuisine->created_at }}</td>
		</tr>
		<tr>
			<td>updated_at</td>
			<td>{{ $cuisine->updated_at }}</td>
		</tr>

	</table><br>
@endif