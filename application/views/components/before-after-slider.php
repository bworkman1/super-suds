<?php foreach($before_afters as $before_after) { ?>
	<div class="col-md-<?php echo $before_after['column_size']; ?>">
		<div class="comparison">
			<figure style="background-image: url(<?php echo base_url('assets/img/before-afters/' . $before_after['after_image_name'], BASE_URL_PROTOCOL); ?>);">
				<div class="divisor" style="background-image: url(<?php echo base_url('assets/img/before-afters/' . $before_after['before_image_name'], BASE_URL_PROTOCOL); ?>)"></div>
			</figure>
			<input type="range" min="0" max="100" value="50" class="slider">
			<label>Before and After Slider</label>
		</div>
		<br>
	</div>
<?php } ?>
