<div class="col-lg-4 col-md-6 wow slideInUp mb-3" data-wow-delay="0.3s">
	<div class="blog-item bg-light rounded overflow-hidden">
		<div class="blog-img position-relative overflow-hidden">
			<img class="img-fluid" src="<?php echo base_url(sprintf('%s/%s', FEATURED_IMAGE_PATH, $image)); ?>" alt="">
			<a class="position-absolute top-0 start-0 bg-primary text-white rounded-end mt-2 py-1 px-1" href="<?php echo base_url(sprintf('blog/%s', $url)); ?>"><?php echo $category; ?></a>
		</div>
		<div class="p-4">
			<h4 class="mb-3"><a href="<?php echo base_url(sprintf('blog/%s', $url)); ?>"><?php echo substr($title, 0, 50); ?></a></h4>
			<p><?php echo $blurb; ?></p>
			<div class="">
				<small class="me-3"><i class="far fa-user text-primary me-2"></i><?php echo $author; ?></small><br>
				<small><i class="far fa-calendar-alt text-primary me-2"></i><?php echo date('m-d-Y', strtotime($date)); ?></small>
			</div>
			<br>
			<a class="text-uppercase" href="<?php echo base_url(sprintf('blog/%s', $url)); ?>">Read More <i class="bi bi-arrow-right"></i></a>
		</div>
	</div>
</div>

