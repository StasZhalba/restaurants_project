@if(session()->has('message'))
    <div class="alert alert-success">
        <p class="text-center">{{ session()->get('message') }}</p>
    </div>
@endif


<div align="center" class="rating-block">
	<h4>Average user rating</h4>
	<h2>
		<small>{{ $restaurant->rating }} / 5</small>
	</h2>

	<a href="/restaurants/{{ $restaurant->id }}/1/rate">
		<button class="btn btn-default btn-grey btn-sm">
			<span class="glyphicon glyphicon-star">1</span>
		</button>
	</a>
	<a href="/restaurants/{{ $restaurant->id }}/2/rate">
		<button class="btn btn-default btn-grey btn-sm">
			<span class="glyphicon glyphicon-star">2</span>
		</button>
	</a>
	<a href="/restaurants/{{ $restaurant->id }}/3/rate">
		<button class="btn btn-default btn-grey btn-sm">
			<span class="glyphicon glyphicon-star">3</span>
		</button>
	</a>
	<a href="/restaurants/{{ $restaurant->id }}/4/rate">
		<button class="btn btn-default btn-grey btn-sm">
			<span class="glyphicon glyphicon-star">4</span>
		</button>
	</a>
	<a href="/restaurants/{{ $restaurant->id }}/5/rate">
		<button class="btn btn-default btn-grey btn-sm">
			<span class="glyphicon glyphicon-star">5</span>
		</button>
	</a>
</div>