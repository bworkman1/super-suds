<div class="container-fluid wow fadeInUp m-0" data-wow-delay="0.1s">
	<div class="container">
		<hr>
		<div class="section-title text-center position-relative pb-3 mb-5 mx-auto" style="max-width: 600px;">
			<h5 class="fw-bold text-primary text-uppercase">Latest Blog</h5>
			<h1 class="mb-0">Read The Latest Articles from Our Blog Post</h1>
		</div>
		<div class="row g-5">
			<?php
				foreach($latest_blog_entries as $arrBlogEntry) {
					echo '<div class="col-lg-4 wow slideInUp" data-wow-delay="0.3s">';
						echo '<div class="blog-item bg-light rounded overflow-hidden">';
							echo '<div class="blog-img position-relative overflow-hidden">';
								echo '<img class="img-fluid" src="'. base_url(sprintf('%s/%s',  FEATURED_IMAGE_PATH, $arrBlogEntry['image'])) .'" alt="' . $arrBlogEntry['title'] . '">';
								echo '<a class="position-absolute top-0 start-0 bg-primary text-white rounded-end mt-5 py-2 px-4" href="' . base_url(sprintf('blog/%s', $arrBlogEntry['url'])) . '">' . $arrBlogEntry['category'] . '</a>';
							echo '</div>';
							echo '<div class="p-4">';
								echo '<div class="d-flex mb-3">';
									echo '<small class="me-3"><i class="far fa-user text-primary me-2"></i>' . $arrBlogEntry['author'] . '</small>';
									echo '<small><i class="far fa-calendar-alt text-primary me-2"></i>' . $arrBlogEntry['date'] . '</small>';
								echo '</div>';
								echo '<h4 class="mb-3">' . $arrBlogEntry['title'] . '</h4>';
								echo '<p>' . $arrBlogEntry['blurb'] . '</p>';
								echo '<a class="text-uppercase" href="' . base_url(sprintf('blog/%s', $arrBlogEntry['url'])) . '">Read More <i class="bi bi-arrow-right"></i></a>';
							echo '</div>';
						echo '</div>';
					echo '</div>';

				}
			?>
		</div>
	</div>
</div>
