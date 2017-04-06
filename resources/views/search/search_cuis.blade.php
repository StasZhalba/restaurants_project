<div style="width: 60%; margin: auto;" class="search-div">	
	<form action="/cuisines/search" class="form-horizontal" method="post">
		{{ csrf_field() }}
		<div class="col-lg-12">
			<div class="input-group">
				<input type="text" class="form-control search-input search-height" placeholder="Enter cuisine name ..." name="search" required>
				<span class="input-group-btn">
				<button class="btn btn-default search-height" type="submit">
					<span class="glyphicon glyphicon-search"></span>
				</button>
				</span>
			</div>
		</div>
	</form>		
</div>