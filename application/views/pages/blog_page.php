<?php $this->load->view('components/search-modal'); ?>
<br>
<br>
<div class="container-fluid py-5 wow fadeInUp" data-wow-delay="0.1s">
	<div class="container py-5">
		<div class="section-title text-center position-relative pb-3 mb-5 mx-auto" style="max-width: 600px;">
			<h5 class="fw-bold text-primary text-uppercase">Check back frequently as we post new tips and post often.</h5>
			<h1 class="mb-0">Our Blog</h1>
		</div>
		<div class="row">

			<?php
				$config['base_url'] 	= base_url('blog/pages');
				$config['total_rows'] 	= $total_entries;
				$config['per_page'] 	= Blog_model::PER_PAGE;

				$config['full_tag_open'] = '<ul class="pagination justify-content-center">';
				$config['full_tag_close'] = '</ul>';
				$config['first_link'] = 'First';
				$config['last_link'] = 'Last';
				$config['first_tag_open'] = '<li class="page-item"><span class="page-link">';
				$config['first_tag_close'] = '</span></li>';
				$config['prev_link'] = '&laquo';
				$config['prev_tag_open'] = '<li class="page-item"><span class="page-link">';
				$config['prev_tag_close'] = '</span></li>';
				$config['next_link'] = '&raquo';
				$config['next_tag_open'] = '<li class="page-item"><span class="page-link">';
				$config['next_tag_close'] = '</span></li>';
				$config['last_tag_open'] = '<li class="page-item"><span class="page-link">';
				$config['last_tag_close'] = '</span></li>';
				$config['cur_tag_open'] = '<li class="page-item active"><a class="page-link" href="#">';
				$config['cur_tag_close'] = '</a></li>';
				$config['num_tag_open'] = '<li class="page-item"><span class="page-link">';
				$config['num_tag_close'] = '</span></li>';

				$this->pagination->initialize($config);

				$latest_blog_entries = array_reverse($latest_blog_entries);
				foreach($latest_blog_entries as $arrBlogEntry)
				{
					$this->load->view('components/blog-post', $arrBlogEntry);
				}

			echo $this->pagination->create_links();

			?>
		</div>
	</div>
</div>
