@if(count($comments))

	<div class="container">
	    <div class="row">
	        <div class="col-md-12">
	            <div class="panel panel-default">
	                <div class="panel-heading">Comments:</div>
					@foreach($comments as $comment)
		                <div class="panel-body">
							<div class="media">
								<div class="media-left">
									<img class="media-object" src="/img/user-default.png">
								</div>
								<div class="media-body">
									<h4 class="media-heading">
										{{ $comment->user_name }} •
			                			{{ $comment->created_at->diffForHumans() }}
		                			</h4>
									{{ $comment->body }}
								</div>
							</div>
		                </div>
                	@endforeach
	            </div>
	        </div>
	    </div>
	</div>
	
@endif