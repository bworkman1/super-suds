<div class="container-fluid py-0 pt-5 wow fadeInUp" data-wow-delay="0.1s">
	<div class="container py-0 pt-5">
		<div class="section-title text-center position-relative pb-3 mb-5 mx-auto">
			<h5 class="fw-bold text-primary text-uppercase"><?php echo $requested_post->category; ?></h5>
			<h1 class="mb-0"><?php echo $requested_post->title; ?></h1>
		</div>
		<div class="row">
			<div class="col-md-8">
				<p>Spring is the perfect time to give your home a fresh start, and what better way to do that than with
					a thorough spring cleaning? As you begin to plan out your spring cleaning checklist, consider adding
					sidewalk, driveway, and house washing to the list. Not only will this improve your home’s curb
					appeal, but it will also protect your surfaces and extend their lifespan.</p>

				<p>Let’s start with sidewalk and driveway cleaning. Over time, these surfaces can become stained and
					dirty due to exposure to weather, foot traffic, and vehicle traffic. The buildup of dirt and grime
					can make your sidewalks and driveway look unsightly and can even make them slippery and unsafe to
					walk on. That’s why it’s important to have them professionally cleaned.</p>
			</div>
			<div class="col-md-4">
				<img src="<?php echo base_url(sprintf('%s/%s', FEATURED_IMAGE_PATH, $requested_post->image), BASE_URL_PROTOCOL); ?>" class="img-fluid" alt="<?php echo $requested_post->title; ?>">
			</div>

			<p>Super Suds specializes in professional pressure washing services for your home and commercial property.
				Our expert team delivers high-quality cleaning solutions to remove dirt, grime, and stains, leaving your
				property looking its best. Contact us today to schedule your appointment!</p>

			<p>Pressure washing is the most effective way to remove stubborn stains and dirt from your sidewalks and
				driveway. A professional pressure washing service, like Super Suds, can use specialized equipment and
				cleaning solutions to safely and effectively clean your surfaces without causing any damage. Not only
				will your sidewalks and driveway look better, but they will also be safer to walk on.</p>

			<p>In addition to improving your home’s curb appeal, cleaning your sidewalks and driveway can also protect them from damage. Dirt and grime can accumulate in the pores of concrete, which can cause it to deteriorate over time. By removing this buildup, you can prevent long-term damage and extend the lifespan of your surfaces.</p>
		</div>

		<hr>
			<h3 class="text-primary text-center">Call us today to see how we can help!</h3>
			<h2 class="text-center"><?php echo CONTACT_PHONE; ?></h2>
		<hr>

		<p>Now let’s move on to house washing. Over time, your home’s exterior can become dirty and stained due to
			exposure to weather, pollution, and other environmental factors. This buildup can make your home look dull
			and faded, and can even cause damage if left unchecked.</p>

		<h4 class="py-3">Remove dirt, grime, and stains from your home's exterior</h4>

		<div class="row">
			<div class="col-sm-4">
				<img src="<?php echo base_url('assets/img/deck-cleaning-removing-mold-mildew-and-organics.jpg', BASE_URL_PROTOCOL); ?>" class="img-fluid" alt="Remove dirt, grime, and stains from your home's exterior">
			</div>
			<div class="col-sm-8">
				<p>A professional house washing service can remove dirt, grime, and stains from your home’s exterior,
					making it look brand new again. Pressure washing is the most effective method for cleaning your
					home’s exterior, and it can be done safely and efficiently by a professional service like Super Suds.</p>

				<p>Not only will a professional house washing service improve your home’s curb appeal, but it can also
					protect your home’s exterior surfaces from damage. Dirt and grime can accumulate on your home’s
					exterior, which can cause it to deteriorate over time. By removing this buildup, you can prevent
					long-term damage and extend the lifespan of your home’s exterior surfaces.</p>
			</div>
		</div>

		<?php $this->load->view('components/blog', ['latest_blog_entries' => $latest_blog_entries]); ?>
	</div>
</div>

<?php $this->load->view('components/early-spring-special'); ?>
