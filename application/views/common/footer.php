</div>

<!-- Footer Start -->
<?php
	$objBlog 		= new Blog_model();
	$arrLatestPost 	= $objBlog->latestBlogEntries(2);
?>
<div class="container-fluid bg-dark text-light mt-5 wow fadeInUp" data-wow-delay="0.1s">
	<div class="container">
		<div class="row gx-5">
			<div class="col-lg-4 col-md-6 footer-about">
				<div class="d-flex flex-column align-items-center justify-content-center text-center h-100 bg-black p-4">
					<a href="index.html" class="navbar-brand">
						<img src="<?php echo base_url('assets/img/super-suds-pressure-washing-logo.png'); ?>" class="img-fluid" alt="Super Suds Pressure Washing Logo">
					</a>
					<p class="mt-3 mb-4">We are committed to delivering exceptional results and strive to build long-lasting
						relationships with our clients based on trust, reliability, and professionalism.</p>
				</div>
			</div>
			<div class="col-lg-8 col-md-6">
				<div class="row gx-5">
					<div class="col-lg-4 col-md-12 pt-5 mb-5">
						<div class="section-title section-title-sm position-relative pb-3 mb-4">
							<h3 class="text-light mb-0">Get In Touch</h3>
						</div>
						<div class="d-flex mb-2">
							<i class="bi bi-geo-alt text-primary me-2"></i>
							<p class="mb-0"><?php echo CONTACT_ADDRESS ?></p>
						</div>
						<div class="d-flex mb-2">
							<i class="bi bi-envelope-open text-primary me-2"></i>
							<p class="mb-0"><?php echo '<a href="mailto:' . CONTACT_EMAIL . '">' . CONTACT_EMAIL . '</a>'; ?></p>
						</div>
						<div class="d-flex mb-2">
							<i class="bi bi-telephone text-primary me-2"></i>
							<p class="mb-0"><a href="tel:<?php echo str_replace('-', '', CONTACT_PHONE); ?>"><?php echo CONTACT_PHONE; ?></p>
						</div>
						<div class="d-flex mt-4">
							<?php if(TWITTER_URL) { ?>
								<a class="btn btn-primary btn-square me-2" href="<?php echo TWITTER_URL; ?>" target="_blank"><i class="fab fa-twitter fw-normal"></i></a>
							<?php } ?>

							<?php if(FACEBOOK_URL) { ?>
								<a class="btn btn-primary btn-square me-2" href="<?php echo FACEBOOK_URL; ?>" target="_blank"><i class="fab fa-facebook-f fw-normal"></i></a>
							<?php } ?>

							<?php if(LINKEDIN_URL) { ?>
								<a class="btn btn-primary btn-square me-2" href="<?php echo LINKEDIN_URL; ?>" target="_blank"><i class="fab fa-linkedin-in fw-normal"></i></a>
							<?php } ?>

							<?php if(INSTAGRAM_URL) { ?>
								<a class="btn btn-primary btn-square me-2" href="<?php echo INSTAGRAM_URL; ?>" target="_blank"><i class="fab fa-instagram fw-normal"></i></a>
							<?php } ?>

							<?php if(YOUTUBE_URL) { ?>
								<a class="btn btn-primary btn-square me-2" href="<?php echo YOUTUBE_URL; ?>" target="_blank"><i class="fab fa-youtube fw-normal"></i></a>
							<?php } ?>

							<?php if(NEXTDOOR) { ?>
								<a class="btn btn-primary btn-square me-2" href="<?php echo NEXTDOOR; ?>" target="_blank"><i class="fab bi-houses-fill fw-normal"></i></a>
							<?php } ?>

							<?php if(GOOGLE) { ?>
								<a class="btn btn-primary btn-square me-2" href="<?php echo GOOGLE; ?>" target="_blank" target="_blank"><i class="fab bi-google fw-normal"></i></a>
							<?php } ?>
						</div>
					</div>

					<div class="col-lg-4 col-md-12 pt-0 pt-lg-5 mb-5">
						<div class="section-title section-title-sm position-relative pb-3 mb-4">
							<h3 class="text-light mb-0">Quick Links</h3>
						</div>
						<div class="link-animated d-flex flex-column justify-content-start">
							<a class="text-light mb-2" href="<?php echo base_url(); ?>"><i class="bi bi-arrow-right text-primary me-2"></i>Home</a>
							<a class="text-light mb-2" href="<?php echo base_url('about-us'); ?>"><i class="bi bi-arrow-right text-primary me-2"></i>About Us</a>
							<a class="text-light mb-2" href="<?php echo base_url('services'); ?>"><i class="bi bi-arrow-right text-primary me-2"></i>Our Services</a>
							<a class="text-light mb-2" href="<?php echo base_url('blog'); ?>"><i class="bi bi-arrow-right text-primary me-2"></i>Latest Blog</a>
							<a class="text-light " href="<?php echo base_url('contact-us'); ?>"><i class="bi bi-arrow-right text-primary me-2"></i>Contact Us</a>
						</div>
					</div>
					<div class="col-lg-4 col-md-12 pt-0 pt-lg-5 mb-5">
						<div class="section-title section-title-sm position-relative pb-3 mb-4">
							<h3 class="text-light mb-0">Latest Post</h3>
						</div>
						<div class="link-animated d-flex flex-column justify-content-start">
							<?php
								foreach($arrLatestPost as $arrPost) {
									echo '<a class="text-light mb-2" href="' . base_url(sprintf('blog/%s', $arrPost['url'])) . '"><i class="bi bi-arrow-right text-primary me-2"></i>'.$arrPost['title'].'</a>';
								}
							?>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<div class="container-fluid text-white" style="background: #061429;">
	<div class="container text-center">
		<div class="row justify-content-end">
			<div class="col-lg-8 col-md-6">
				<div class="d-flex align-items-center justify-content-center" style="height: 75px;">
					<p class="mb-0">&copy; <a class="text-white border-bottom" href="<?php echo base_url(); ?>"><?php echo COMPANY_NAME; ?></a> - All Rights Reserved.
				</div>
			</div>
		</div>
	</div>
</div>
<!-- Footer End -->


<!-- Back to Top -->
<a href="#" class="btn btn-lg btn-primary btn-lg-square rounded back-to-top"><i class="bi bi-arrow-up"></i></a>

<input type="hidden" id="base_url" name="base_url" value="<?php echo base_url(); ?>">

<!-- Full Screen Search Start -->
<?php $this->load->view('components/search-modal'); ?>
<!-- Full Screen Search End -->

<!-- JavaScript Libraries -->
<script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.7/dist/umd/popper.min.js"></script>

<script src="<?php echo base_url('assets/lib/wow/wow.min.js'); ?>"></script>
<script src="<?php echo base_url('assets/lib/easing/easing.min.js'); ?>"></script>
<script src="<?php echo base_url('assets/lib/waypoints/waypoints.min.js'); ?>"></script>
<script src="<?php echo base_url('assets/lib/counterup/counterup.min.js'); ?>"></script>
<script src="<?php echo base_url('assets/lib/owlcarousel/owl.carousel.min.js'); ?>"></script>

<!-- Bootstrap JS -->
<script src="<?php echo base_url('assets/js/bootstrap.bundle.min.js'); ?>"></script>

<!-- Custom Javascript -->
<script src="<?php echo base_url('assets/js/main.js'); ?>"></script>

<?php
	if(isset($js)) {
		foreach($js as $j) {
			echo '<script src="' . $j . '"></script>';
		}
	}
?>
</body>

</html>
