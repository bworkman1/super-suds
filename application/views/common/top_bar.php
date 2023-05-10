<!-- Topbar Start -->
<div class="container-fluid bg-dark px-5 d-none d-lg-block">
	<div class="row gx-0">
		<div class="col-lg-8 text-center text-lg-start mb-2 mb-lg-0">
			<div class="d-inline-flex align-items-center" style="height: 45px;">
				<?php if(CONTACT_ADDRESS) { ?>
					<small class="me-3 text-light"><i class="fa fa-map-marker-alt me-2"></i> <?php echo CONTACT_ADDRESS; ?></small>
				<?php } ?>

				<?php if(CONTACT_PHONE) { ?>
					<small class="me-3 text-light"><i class="fa fa-phone-alt me-2"></i> <a href="tel:<?php echo CONTACT_PHONE; ?>"><?php echo CONTACT_PHONE; ?></a></small>
				<?php } ?>

				<?php if(CONTACT_EMAIL) { ?>
					<small class="text-light"><i class="fa fa-envelope-open me-2"></i> <a href="mailto:<?php echo CONTACT_EMAIL; ?>"><?php echo CONTACT_EMAIL; ?></a></small>
				<?php } ?>
			</div>
		</div>
		<div class="col-lg-4 text-center text-lg-end">
			<div class="d-inline-flex align-items-center" style="height: 45px;">
				<?php if(TWITTER_URL) { ?>
					<a class="btn btn-sm btn-outline-light btn-sm-square rounded-circle me-2" target="_blank" href="<?php echo TWITTER_URL; ?>"><i class="fab fa-twitter fw-normal"></i></a>
				<?php } ?>

				<?php if(FACEBOOK_URL) { ?>
					<a class="btn btn-sm btn-outline-light btn-sm-square rounded-circle me-2" target="_blank" href="<?php echo FACEBOOK_URL; ?>"><i class="fab fa-facebook-f fw-normal"></i></a>
				<?php } ?>

				<?php if(LINKEDIN_URL) { ?>
					<a class="btn btn-sm btn-outline-light btn-sm-square rounded-circle me-2" target="_blank" href="<?php echo LINKEDIN_URL; ?>"><i class="fab fa-linkedin-in fw-normal"></i></a>
				<?php } ?>

				<?php if(INSTAGRAM_URL) { ?>
					<a class="btn btn-sm btn-outline-light btn-sm-square rounded-circle me-2" target="_blank" href="<?php echo INSTAGRAM_URL; ?>"><i class="fab fa-instagram fw-normal"></i></a>
				<?php } ?>

				<?php if(YOUTUBE_URL) { ?>
					<a class="btn btn-sm btn-outline-light btn-sm-square rounded-circle me-2" target="_blank"	  href="<?php echo YOUTUBE_URL; ?>"><i class="fab fa-youtube fw-normal"></i></a>
				<?php } ?>

				<?php if(NEXTDOOR) { ?>
					<a class="btn btn-sm btn-outline-light btn-sm-square rounded-circle me-2" target="_blank"	  href="<?php echo NEXTDOOR; ?>"><i class="fab bi-houses-fill fw-normal"></i></a>
				<?php } ?>

				<?php if(GOOGLE) { ?>
					<a class="btn btn-sm btn-outline-light btn-sm-square rounded-circle me-2" target="_blank"	  href="<?php echo GOOGLE; ?>"><i class="fab fa-google fw-normal"></i></a>
				<?php } ?>
			</div>
		</div>
	</div>
</div>
<!-- Topbar End -->
