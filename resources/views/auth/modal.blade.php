<!-- Modal -->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="ModalLabel">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
		<div class="modal-header">
			<button type="button" class="close" data-dismiss="modal" aria-label="Close">
				<span aria-hidden="true">&times;</span>
			</button>
			<p class="modal-title text-center">Delete confirmation</p>
			<!--p class="modal-title text-center" id="ModalLabel">Title</p-->
		</div>
		<div class="modal-body">
			<p class="text-center">
				Are you sure you want to delete <br>
				<b><span id="del-title">Title</span></b> 
				?
			</p>
		</div>
		<div class="modal-footer">
			<button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
			<a id="del-link"><button type="button" class="btn btn-danger">Delete</button></a>
		</div>
		</div>
	</div>
</div>