<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class About_us extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/userguide3/general/urls.html
	 */
	public function index()
	{
		$arrData = [
			'title' 		=> 'About Us',
			'description' 	=> '',
			'keywords' 		=> '',
		];

		$this->load->model('Navbar_model');
		$arrData['navbar'] = $this->Navbar_model->getNavbarLinks();

		$this->load->model('Blog_model');
		$arrData['latest_blog_entries'] = $this->Blog_model->getBlogEntries(0);
		$arrData['total_entries'] 		= $this->Blog_model->getTotalEntries();
		$arrData['requested_post']      = $this->Blog_model->getRequestedPost($this->uri->segment(2, 0));

		$this->load->view('common/header', $arrData);
		$this->load->view('common/top_bar', $arrData);
		$this->load->view('common/navbar');

		if(!empty($arrData['requested_post'])) {
			$this->load->view(sprintf('posts/%s', $arrData['requested_post']['post']), $arrData);
		} else {
			$this->load->view('pages/about_us_page', $arrData);
		}

		$this->load->view('common/footer');
	}
}
