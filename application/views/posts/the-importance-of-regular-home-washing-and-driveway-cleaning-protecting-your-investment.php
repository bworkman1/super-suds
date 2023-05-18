<div class="container-fluid py-0 pt-5 wow fadeInUp" data-wow-delay="0.1s">
	<div class="container py-0 pt-5">
		<div class="section-title text-center position-relative pb-3 mb-5 mx-auto">
			<h5 class="fw-bold text-primary text-uppercase"><?php echo $requested_post->category; ?></h5>
			<h1 class="mb-0"><?php echo $requested_post->title; ?></h1>
		</div>


		<?php $this->load->view('components/blog', ['latest_blog_entries' => $latest_blog_entries]); ?>
	</div>
</div>

<?php $this->load->view('components/early-spring-special'); ?>
