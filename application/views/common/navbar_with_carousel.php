<!-- Navbar & Carousel Start -->
<div class="container-fluid position-relative p-0">
	<nav class="navbar navbar-expand-lg navbar-dark px-5 py-3 py-lg-0">
		<a href="<?php echo base_url('', BASE_URL_PROTOCOL); ?>" class="navbar-brand p-0">
			<img src="<?php echo base_url('assets/img/super-suds-pressure-washing-logo.png', BASE_URL_PROTOCOL); ?>" class="img-fluid" id="header-logo" alt="Super Suds Pressure Washing Logo">
		</a>
		<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse" title="Mobile Navigation Button">
			<span class="fa fa-bars"></span>
		</button>
		<div class="collapse navbar-collapse" id="navbarCollapse">
			<div class="navbar-nav ms-auto py-0">
				<?php
				foreach($navbar as $arrLink) {
					$strClass = ($arrLink['is_active']) ? 'active' : '';

					if($arrLink['url'] == '#') {
						echo '<div class="nav-item dropdown">';
						echo sprintf('<a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">%s</a>', $arrLink['title']);
						echo '<div class="dropdown-menu m-0">';
						foreach($arrLink['dropdown'] as $arrSubLinks)
						{
							$strClass = ($arrSubLinks['is_active']) ? 'active' : '';
							echo '<a href="' . base_url($arrSubLinks['url'], BASE_URL_PROTOCOL) . '" class="dropdown-item ' . $strClass . '">' . $arrSubLinks['title'] . '</a>';
						}
						echo '</div>';
						echo '</div>';
					} else {
						echo '<a href="' . base_url($arrLink['url'], BASE_URL_PROTOCOL) . '" class="nav-item nav-link ' . $strClass . '">' . $arrLink['title'] . '</a>';
					}
				}
				?>
			</div>
			<button type="button" class="btn text-primary ms-3" data-bs-toggle="modal" data-bs-target="#searchModal" title="Search Site Button">
				<i class="fa fa-search"></i>
			</button>
<!--			<a href="--><?php //echo base_url('online-quote'); ?><!--" class="btn btn-primary py-2 px-4 ms-3">Easy Online Quote</a>-->
		</div>
	</nav>

	<div id="header-carousel" class="carousel slide carousel-fade" data-bs-ride="carousel">
		<div class="carousel-inner">
			<div class="carousel-item active">
				<video class="elementor-background-video-hosted elementor-html5-video" autoplay="" muted="" playsinline="" loop="" src="<?php echo base_url('assets/videos/pressure-washing-sidewalk.mov', BASE_URL_PROTOCOL); ?>" style="width: 1903px; height: 1070.44px;"></video>
				<div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
					<div class="p-3" style="max-width: 900px;">
						<h5 class="text-white text-uppercase mb-3 animated slideInDown">Get Sparkle & Shine</h5>
						<h1 class="display-1 text-white mb-md-4 animated zoomIn">Without Breaking the Bank</h1>
<!--						<a href="quote.html" class="btn btn-primary py-md-3 px-md-5 me-3 animated slideInLeft">Free Quote</a>-->
						<a href="<?php echo base_url('contact-us', BASE_URL_PROTOCOL); ?>" class="btn btn-primary py-md-3 px-md-5 animated slideInRight">Contact Us</a>
					</div>
				</div>
			</div>
			<div class="carousel-item">
				<video class="elementor-background-video-hosted elementor-html5-video" autoplay="" muted="" playsinline="" loop="" src="<?php echo base_url('assets/videos/pressure-washing-concrete.mov', BASE_URL_PROTOCOL); ?>" style="width: 1903px; height: 1070.44px;"></video>
				<div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
					<div class="p-3" style="max-width: 900px;">
						<h5 class="text-white text-uppercase mb-3 animated slideInDown">Now Servicing The</h5>
						<h1 class="display-1 text-white mb-md-4 animated zoomIn">Mount Vernon and Surrounding Areas</h1>
<!--						<a href="quote.html" class="btn btn-primary py-md-3 px-md-5 me-3 animated slideInLeft">Free Quote</a>-->
						<a href="<?php echo base_url('contact-us', BASE_URL_PROTOCOL); ?>" class="btn btn-primary py-md-3 px-md-5 animated slideInRight">Contact Us</a>
					</div>
				</div>
			</div>
		</div>
		<button class="carousel-control-prev" type="button" data-bs-target="#header-carousel" title="Previous Carousel Image"
				data-bs-slide="prev">
			<span class="carousel-control-prev-icon" aria-hidden="true"></span>
			<span class="visually-hidden">Previous</span>
		</button>
		<button class="carousel-control-next" type="button" data-bs-target="#header-carousel" title="Next Carousel Image"
				data-bs-slide="next">
			<span class="carousel-control-next-icon" aria-hidden="true"></span>
			<span class="visually-hidden">Next</span>
		</button>
	</div>
</div>
<!-- Navbar & Carousel End -->
