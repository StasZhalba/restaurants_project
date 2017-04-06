@if(Auth::guest())
	<p class="text-center">Please, <a href="{{ route('login') }}" style="text-decoration: none;">login →</a> to add a comment.</p>
@else
	<p class="text-center">You can add a comment.</p>

	<table class="table table-striped" style="text-align: center; width: 60%; margin: auto;">

		<tr>
			<td>
				<form action="/restaurants/{{ $restaurant->id }}/comments" class="form-horizontal" method="post">
					{{ csrf_field() }}

					<div class="form-group">
						<div class="col-sm-12">
							<textarea name="body" class="form-control" rows="5" required></textarea>
						</div>
					</div>

					<div class="form-group">
						<div class="col-sm-12">
							<button type="submit" class="btn btn-primary">Add comment</button>
						</div>
					</div
				</form>
			</td>
		</tr>

	</table>
@endif