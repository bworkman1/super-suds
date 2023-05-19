<div class="container-fluid py-0 pt-5 wow fadeInUp" data-wow-delay="0.1s">
	<div class="container py-0 pt-5">
		<div class="section-title text-center position-relative pb-3 mb-5 mx-auto">
			<h5 class="fw-bold text-primary text-uppercase"><?php echo $requested_post->category; ?></h5>
			<h1 class="mb-0"><?php echo $requested_post->title; ?></h1>
		</div>
		<div class="row">
			<p>At Super Suds, we take pride in providing top-notch services to our clients. Our team of experts is
				skilled and experienced in all aspects of driveway and concrete cleaning. Here are some reasons why you
				should choose Super Suds for your next cleaning project:</p>
			<h3>The Benefits of Driveway and Concrete Cleaning</h3>
			<p>A clean driveway and concrete surface offer a range of benefits beyond just improving the appearance of
				your property. Here are some benefits of regular driveway and concrete cleaning:</p>
			<div class="row">
				<div class="col-md-6">
					<ul class="list-group-flush" style="padding-left: 0; padding-right:0">
						<li class="list-group-item" style="padding-left: 0; padding-right:0"><b>Increased Property Value:</b> A clean and well-maintained property can increase its value. A clean driveway and concrete surface can enhance the curb appeal of your property and make it more attractive to potential buyers.</li>
						<li class="list-group-item" style="padding-left: 0; padding-right:0"><b>Enhanced Safety:</b> Dirt, grime, and debris on your driveway or concrete surface can be hazardous, especially when wet. Regular cleaning can help prevent slips, falls, and other accidents.</li>
						<li class="list-group-item" style="padding-left: 0; padding-right:0"><b>Longevity:</b> Regular cleaning and maintenance can extend the life of your driveway and concrete surfaces. Removing dirt and debris can prevent damage and deterioration over time.</li>
						<li class="list-group-item" style="padding-left: 0; padding-right:0"><b>Improved Health:</b> A dirty driveway or concrete surface can harbor bacteria, mold, and other allergens that can affect your health. Regular cleaning can remove these harmful substances and improve the overall air quality of your property.</li>
					</ul>
				<a href="<?php echo base_url('contact-us', BASE_URL_PROTOCOL); ?>" class="btn btn-primary">Request a Quote</a>
				</div>

				<div class="col-md-6">
					<h3 class="text-center" style="background: #06a3da;color: #fff;margin:0">Grim to Shine</h3>
					<?php $this->load->view('components/before-after-slider.php', [
						'before_afters' => [[
							'before_image_name' => 'driveway-2-before.webp',
							'after_image_name' 	=> 'driveway-2-after.webp',
							'column_size' 		=> 12
						]]
					]); ?>
				</div>
			</div>

			<hr>
				<h1 class="text-primary text-lg-center">Contact Us: <?php echo CONTACT_PHONE; ?></h1>
			<hr>

			<h3 class="text-primary p-0">What we offer</h3>
			<ul class="list-group-flush" style="padding-left: 0; padding-right:0">
				<li class="list-group-item" style="padding-left: 0; padding-right:0"><b>Advanced Equipment:</b> Our team is equipped with the latest pressure washing equipment to tackle even the toughest dirt and stains. Our high-pressure equipment ensures a deep and thorough clean without damaging your driveway or concrete surfaces.</li>
				<li class="list-group-item" style="padding-left: 0; padding-right:0"><b>Eco-Friendly Solutions:</b> At Super Suds, we are committed to doing our part for the environment. That's why we use eco-friendly cleaning solutions that are safe for your property and the environment. Our cleaning solutions are effective in removing dirt and stains without harming the surrounding landscape or waterways.</li>
				<li class="list-group-item" style="padding-left: 0; padding-right:0"><b>Skilled Professionals:</b> Our team of professionals is highly trained and experienced in all aspects of driveway and concrete cleaning. We take pride in our work and strive to deliver exceptional results for our clients. You can trust us to get the job done right the first time.</li>
				<li class="list-group-item" style="padding-left: 0; padding-right:0"><b>Customized Solutions:</b> We understand that every property is unique, which is why we offer customized cleaning solutions to meet your specific needs. Whether you need driveway cleaning, concrete cleaning, or both, we can tailor our services to fit your requirements.</li>
				<li class="list-group-item" style="padding-left: 0; padding-right:0"><b>Competitive Pricing:</b> We believe that quality cleaning services should be affordable for everyone. That's why we offer competitive pricing for our driveway and concrete cleaning services. We'll provide you with a free quote upfront, so you know exactly what to expect before we start the job.</li>
			</ul>
		</div>
	</div>
</div>
