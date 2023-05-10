
<!-- Service Start -->
<?php $this->load->view('components/services'); ?>
<!-- Service End -->

<!-- Our Process Start -->
<?php $this->load->view('components/our-process'); ?>
<!-- Our Process End -->

<!-- About Slider -->
<div class="container-fluid wow fadeInUp" data-wow-delay="0.1s">
	<div class="container py-4">
		<div class="section-title text-center position-relative pb-3 mb-5 mx-auto" style="max-width: 600px;">
			<h5 class="fw-bold text-primary text-uppercase">Before and Afters</h5>
			<h1 class="mb-0">We have the results that you can see for yourself</h1>
		</div>
		<div class="row">
			<?php $this->load->view('components/before-after-slider.php', ['before_afters' => $before_afters]); ?>
		</div>
		<h4 class="text-center text-primary">Use the slider to see the before and afters</h4>
	</div>
</div>

<!-- About End -->

<!-- Testimonial Start -->
<?php $this->load->view('components/testimonials'); ?>
<!-- Testimonial End -->

<!-- Blog Start -->
<?php $this->load->view('components/blog', ['latest_blog_entries' => $latest_blog_entries]); ?>
<!-- Blog Start -->
