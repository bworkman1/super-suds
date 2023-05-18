<div class="modal fade" id="searchModal" tabindex="-1">
	<div class="modal-dialog modal-fullscreen">
		<div class="modal-content" style="background: rgba(9, 30, 62, .7);">
			<div class="modal-header border-0">
				<button type="button" class="btn bg-white btn-close" data-bs-dismiss="modal" aria-label="Close" title="Close Search Modal"></button>
			</div>
			<div class="modal-body d-flex align-items-center justify-content-center">
				<form id="search-form" method="post" action="#">
					<div class="input-group" style="max-width: 600px;">
						<input type="text" id="search-input" class="form-control bg-transparent border-primary p-3" placeholder="Type search keyword">
						<button class="btn btn-primary px-4" title="Submit Search Form"><i class="bi bi-search"></i></button>
					</div>
					<div id="search-results"></div>
				</form>
			</div>
		</div>
	</div>
</div>
