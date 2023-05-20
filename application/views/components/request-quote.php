<?php
	$this->session->set_userdata('contact_page_xss', rand(100000000, 9999999999999));
?>

<div class="container-fluid py-5 wow fadeInUp" data-wow-delay="0.1s">
	<div class="container py-5">
		<div class="row g-5">
			<div class="col-lg-7">
				<div class="section-title position-relative pb-3 mb-5">
					<h5 class="fw-bold text-primary text-uppercase">Request A Quote</h5>
					<h1 class="mb-0">Need A Free Quote? Please Feel Free to Contact Us.</h1>
				</div>
				<div class="row gx-3">
					<div class="col-sm-6 wow zoomIn" data-wow-delay="0.2s">
						<h5 class="mb-4"><i class="fa fa-reply text-primary me-3"></i>Reply within 24 hours</h5>
					</div>
					<div class="col-sm-6 wow zoomIn" data-wow-delay="0.4s">
						<h5 class="mb-4"><i class="fa fa-phone-alt text-primary me-3"></i>Phone</h5>
					</div>
				</div>
				<p class="mb-4">We do our best to get back to you within 24 hours, usually within hours. Most quotes
				we can do all online by looking at public information available online. There are instances where the
				quote can go up depending on condition of the surface were cleaning.</p>
				<p>We ask for your email and phone number because we typically can take look at your property via Google maps
				and other public information to give you an estimate. If we can't see your property on Google maps or can't
					find any info we will contact you to setup an appointment to come take a look. We never share your
					info with anyone, spam you, or sign you up for unwanted newsletters.</p>
				<div class="d-flex align-items-center mt-2 wow zoomIn" data-wow-delay="0.6s">
					<div class="bg-primary d-flex align-items-center justify-content-center rounded" style="width: 60px; height: 60px;">
						<i class="fa fa-phone-alt text-white"></i>
					</div>
					<div class="ps-4">
						<h5 class="mb-2">Call to ask any question</h5>
						<h4 class="text-primary mb-0"><a href="tel:<?php echo CONTACT_PHONE; ?>"><?php echo CONTACT_PHONE; ?></a></h4>
					</div>
				</div>
			</div>
			<div class="col-lg-5">
				<div class="bg-primary rounded h-100 d-flex align-items-center p-5 wow zoomIn" data-wow-delay="0.9s">
					<form id="contact-page">
						<div class="row g-3">
							<div class="col-xl-12">
								<input id="name_input" type="text" name="name" class="form-control bg-light border-0" placeholder="Name" style="height: 55px;" maxlength="50" required>
							</div>
							<div class="col-12">
								<input id="email_input" type="email" name="email" class="form-control bg-light border-0" placeholder="Email" style="height: 55px;" maxlength="50" required>
							</div>
							<div class="col-12">
								<input id="address_input" type="address" name="address" class="form-control bg-light border-0" placeholder="Address" style="height: 55px;" maxlength="50" required>
							</div>
							<div class="col-12">
								<input id="phone_input" type="phone" name="phone" class="form-control bg-light border-0" placeholder="Phone" style="height: 55px;" maxlength="15" required>
							</div>
							<div class="col-12">
								<textarea id="description_input" name="description" class="form-control bg-light border-0" rows="3" required placeholder="Explain the work you would like a quote for" maxlength="255"></textarea>
							</div>
							<div id="call-feedback"></div>
							<div class="col-12">
								<button class="btn btn-dark w-100 py-3" type="submit">Request A Quote</button>
							</div>

							<input type="hidden" id="check_input" name="check" value="<?php echo $this->session->userdata('contact_page_xss'); ?>" required>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
</div>
