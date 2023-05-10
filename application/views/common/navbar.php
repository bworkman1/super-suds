<!-- Navbar Start -->
<div class="container-fluid position-relative p-0">
	<nav id="short-nav" class="navbar navbar-expand-lg navbar-dark px-5 py-3 py-lg-0 skip">
		<a href="<?php echo base_url(); ?>" class="navbar-brand p-0">
			<img src="<?php echo base_url('assets/img/super-suds-pressure-washing-logo.png'); ?>" class="img-fluid" id="header-logo">
		</a>
		<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
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
										echo '<a href="' . base_url($arrSubLinks['url']) . '" class="dropdown-item ' . $strClass . '">' . $arrSubLinks['title'] . '</a>';
									}
								echo '</div>';
							echo '</div>';
						} else {
							echo '<a href="' . base_url($arrLink['url']) . '" class="nav-item nav-link ' . $strClass . '">' . $arrLink['title'] . '</a>';
						}
					}
				?>
			</div>
			<button type="button" class="btn text-primary ms-3" data-bs-toggle="modal" data-bs-target="#searchModal">
				<i class="fa fa-search"></i>
			</button>
<!--			<a href="--><?php //echo base_url('online-quote'); ?><!--" class="btn btn-primary py-2 px-4 ms-3">Easy Online Quote</a>-->
		</div>
	</nav>
</div>
<!-- Navbar End -->
