
<div class="container-fluid py-5 wow fadeInUp" data-wow-delay="0.1s">
	<br>
	<br>
	<br>
	<h1 class="text-center">Easy Online Quote!</h1>
	<form id="signUpForm" action="#!">
		<!-- start step indicators -->
		<div class="form-header d-flex mb-4">
			<span class="stepIndicator">Services</span>
			<span class="stepIndicator">Details</span>
			<span class="stepIndicator">Personal</span>
		</div>
		<!-- end step indicators -->

		<!-- step one -->
		<div class="step">
			<p class="text-center mb-4">Select your services</p>
			<?php foreach($arrServices as $arrService) { ?>
				<div class="col-md-12">
					<div class="form-check">
						<input class="form-check-input service-options" type="checkbox" value="<?php echo $arrService['name']; ?>" id="service_<?php echo $arrService['name']; ?>" class="serviceSelection">
						<label for="service_<?php echo $arrService['name']; ?>">
							<h5><?php echo $arrService['title']; ?></h5>
							<p class="text-muted font-monospace"><?php echo $arrService['description']; ?></p>
						</label>
					</div>
					<hr>
				</div>
			<?php } ?>
		</div>

		<!-- step two -->
		<div class="step">
			<p class="text-center mb-4">Enter Service Details</p>
			<?php foreach($arrServices as $arrService) { ?>
				<?php if (empty($arrService)) continue; ?>
				<div id="details_<?php echo $arrService['name']; ?>" class="d-none">
					<hr>
					<h2><?php echo $arrService['title']; ?></h2>
					<p>If you need help with calculating the square footage <a href="#" data-bs-toggle="modal" data-bs-target="#help-with-square-foot">click here!</a></p>
					<?php echo $arrService['additional_details']; ?>
					<?php if (!empty($arrService['sizes'])) { ?>
						<div class="row">
							<div class="col-md-3">
								<label for="" class="font-monospace"><?php echo $arrService['sizes']['length']['label']; ?>(ft):</label>
								<input type="<?php echo $arrService['sizes']['length']['type']; ?>"
									   class="form-control"
									   name="<?php echo $arrService['sizes']['length']['name']; ?>"
									   min="<?php echo $arrService['sizes']['length']['min']; ?>"
									   max="<?php echo $arrService['sizes']['length']['max']; ?>">
							</div>
							<div class="col-md-1"><br><b>X</b></div>
							<div class="col-md-3">
								<label for="" class="font-monospace"><?php echo $arrService['sizes']['width']['label']; ?>(ft):</label>
								<input type="<?php echo $arrService['sizes']['width']['type']; ?>"
									   class="form-control"
									   name="<?php echo $arrService['sizes']['width']['name']; ?>"
									   min="<?php echo $arrService['sizes']['width']['min']; ?>"
									   max="<?php echo $arrService['sizes']['width']['max']; ?>">
							</div>
							<div class="col-md-1"><b>OR</b></div>
							<div class="col-md-4">
								<label for="" class="font-monospace"><?php echo $arrService['sizes']['sqft']['label']; ?>:</label>
								<input type="<?php echo $arrService['sizes']['sqft']['type']; ?>"
									   class="form-control"
									   name="<?php echo $arrService['sizes']['sqft']['name']; ?>"
									   min="<?php echo $arrService['sizes']['sqft']['min']; ?>"
									   max="<?php echo $arrService['sizes']['sqft']['max']; ?>">
							</div>
						</div>
						<hr>
					<?php } ?>


					<?php if (!empty($arrService['questions'])) { ?>
						<?php
							foreach($arrService['questions'] as $arrQuestions) {
								echo '<label for="">' . $arrQuestions['value'] . '</label>';
								if($arrQuestions['input_type'] == 'select')
								{
									if(empty($arrQuestions['options'])) continue;

									echo '<select name="' . $arrQuestions['name'] . '" class="form-control">';
									echo '<option value="">Select One...</option>';
									foreach($arrQuestions['options'] as $arrOption)
									{
										echo '<option value="">' . $arrOption['value'] . '</option>';
									}
									echo '</select>';
								}

								if($arrQuestions['input_type'] == 'radio')
								{
									if(empty($arrQuestions['options'])) continue;
									echo '<br>';
									foreach($arrQuestions['options'] as $arrOption)
									{
										echo '<label for="' . $arrQuestions['name'] . '_' . $arrOption['value'] . '">
											<input type="radio" id="' . $arrQuestions['name'] . '_' . $arrOption['value'] . '" 
											name="' . $arrQuestions['name'] . '"> ' . ucwords($arrOption['value']) . '</label>&nbsp;&nbsp;&nbsp;';
									}
								}
								echo '<hr>';
							}
						?>
					<?php } ?>
				</div>
			<?php } ?>
		</div>

		<!-- step three -->
		<div class="step">
			<p class="text-center mb-4">We will never sell it</p>
			<div class="mb-3">
				<input type="text" placeholder="Full name" oninput="this.className = ''" name="fullname">
			</div>
			<div class="mb-3">
				<input type="text" placeholder="Mobile" oninput="this.className = ''" name="mobile">
			</div>
			<div class="mb-3">
				<input type="text" placeholder="Address" oninput="this.className = ''" name="address">
			</div>
		</div>

		<!-- start previous / next buttons -->
		<div class="form-footer d-flex">
			<button type="button" id="prevBtn" onclick="nextPrev(-1)">Previous</button>
			<button type="button" id="nextBtn" onclick="nextPrev(1)">Next</button>
		</div>
		<!-- end previous / next buttons -->
	</form>

</div>





<!-- Modal -->
<div class="modal fade" id="help-with-square-foot" tabindex="-1" aria-labelledby="help-with-square-foot" aria-hidden="true">
	<div class="modal-dialog modal-dialog-centered modal-lg">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title" id="exampleModalLabel"><i class="fas fa-ruler-combined"></i> Help With Square Footage</h5>
				<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
			</div>
			<div class="modal-body">
				<h4><i class="fas fa-home"></i> Home Square Footage</h4>
				<p>If you're trying to find the square footage of your home, it's usually easier if you just search
				for your address online and typically can find this information easily on real estate websites.</p>
				<hr>
				<h4><i class="fas fa-map-marked-alt"></i> Using Google Maps</h4>
				<ul class="list-group">
					<li class="list-group-item">1. Navigate to <a href="https://www.google.com/maps" target="_blank">google maps</a>.</li>
					<li class="list-group-item">2. In the upper right corner, you should see a search box, search for you address.</li>
					<li class="list-group-item">3. Now scroll/zoom in as far as you can on your home.</li>
					<li class="list-group-item">4. In the bottom right corner, you should see a layers button, click it and set the layer to terrain.</li>
					<li class="list-group-item">5. Using your mouse, right click at the start of the area you want to measure. Select <b>Measure Distance</b> from the dropdown menu.</li>
					<li class="list-group-item">6. Now you can left-click each point you want to add around the object you are measuring.</li>
					<li class="list-group-item">7. Once you complete the loop around the object you are measuring, you will see a white box display in the center towards the bottom of the screen with your measurements.</li>
					<li class="list-group-item">8. Take the value labeled <b>Total area:</b> and use that as your measurement value.</li>
				</ul>

				<br>
				<h4>Examples</h4>
				<img src="<?php echo base_url('assets/img/help-with-measuring-distances.jpg', BASE_URL_PROTOCOL); ?>" class="img-fluid" alt="Shows the user how to use google maps to help measure distance">
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
			</div>
		</div>
	</div>
</div>
