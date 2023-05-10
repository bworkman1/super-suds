<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Services extends CI_Controller {

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
		die(header('Location: /'));
	}

	public function house_soft_wash()
	{
		$arrPage = [
			'title' 		=> 'Soft House Washing Services Near Mount Vernon, OH | Super Suds',
			'description' 	=> 'Get your home clean and looking fresh with Super Suds\' soft house washing service in 
			and around Mount Vernon, OH. Our team will help make sure your walls, windows and more are looking the best 
			they can. Contact us today to get started!',
			'keywords' 		=> 'Soft Wash, House Wash, Pressure Washing, Pressure Washing Ohio',
		];

		$this->load->model('Services_model');


		$this->load->model('Navbar_model');

		$arrPage['navbar'] = $this->Navbar_model->getNavbarLinks();

		$this->load->view('common/header', $arrPage);
		$this->load->view('common/top_bar');
		$this->load->view('common/navbar', $arrPage);

		$arrPage['arrServices'] = $this->Services_model->getServicesSettings();

		$this->load->model('Blog_model');
		$arrPage['latest_blog_entries'] = $this->Blog_model->latestBlogEntries(3);

		$this->load->view('pages/house_soft_wash_page', $arrPage);

		$arrPage['js'] = [];
		$this->load->view('common/footer', $arrPage);
	}

	public function driveway_wash()
	{
		$arrPage = [
			'title' 		=> 'Easy Online Pressure Washing Quote',
			'description' 	=> '',
			'keywords' 		=> '',
		];

		$this->load->model('Services_model');


		$this->load->model('Navbar_model');

		$arrPage['navbar'] = $this->Navbar_model->getNavbarLinks();

		$this->load->view('common/header', $arrPage);
		$this->load->view('common/top_bar');
		$this->load->view('common/navbar', $arrPage);

		$arrPage['arrServices'] = $this->Services_model->getServicesSettings();

		$this->load->model('Blog_model');
		$arrPage['latest_blog_entries'] = $this->Blog_model->latestBlogEntries(3);

		$this->load->view('pages/driveway_wash_page', $arrPage);

		$arrPage['js'] = [];
		$this->load->view('common/footer', $arrPage);
	}

	public function sidewalk_wash()
	{
		$arrPage = [
			'title' 		=> 'Easy Online Pressure Washing Quote',
			'description' 	=> '',
			'keywords' 		=> '',
		];

		$this->load->model('Services_model');
		$this->load->model('Navbar_model');

		$arrPage['navbar'] = $this->Navbar_model->getNavbarLinks();

		$this->load->view('common/header', $arrPage);
		$this->load->view('common/top_bar');
		$this->load->view('common/navbar', $arrPage);

		$arrPage['arrServices'] = $this->Services_model->getServicesSettings();

		$this->load->model('Blog_model');
		$arrPage['latest_blog_entries'] = $this->Blog_model->latestBlogEntries(3);

		$this->load->view('pages/sidewalk_wash_page', $arrPage);

		$arrPage['js'] = [];
		$this->load->view('common/footer', $arrPage);
	}

	public function fence_wash()
	{
		$arrPage = [
			'title' 		=> 'Easy Online Pressure Washing Quote',
			'description' 	=> '',
			'keywords' 		=> '',
		];

		$this->load->model('Services_model');
		$this->load->model('Navbar_model');

		$arrPage['navbar'] = $this->Navbar_model->getNavbarLinks();

		$this->load->view('common/header', $arrPage);
		$this->load->view('common/top_bar');
		$this->load->view('common/navbar', $arrPage);

		$arrPage['arrServices'] = $this->Services_model->getServicesSettings();

		$this->load->model('Blog_model');
		$arrPage['latest_blog_entries'] = $this->Blog_model->latestBlogEntries(3);

		$this->load->view('pages/fence_wash_page', $arrPage);

		$arrPage['js'] = [];
		$this->load->view('common/footer', $arrPage);
	}

	public function deck_patio_paver_cleanings()
	{
		$arrPage = [
			'title' 		=> 'Easy Online Pressure Washing Quote',
			'description' 	=> '',
			'keywords' 		=> '',
		];

		$this->load->model('Services_model');
		$this->load->model('Navbar_model');

		$arrPage['navbar'] = $this->Navbar_model->getNavbarLinks();

		$this->load->view('common/header', $arrPage);
		$this->load->view('common/top_bar');
		$this->load->view('common/navbar', $arrPage);

		$arrPage['arrServices'] = $this->Services_model->getServicesSettings();

		$this->load->model('Blog_model');
		$arrPage['latest_blog_entries'] = $this->Blog_model->latestBlogEntries(3);

		$arrPage['before_afters'] = [
			[
				'before_image_name' => 'deck-cleaning-mount-vernon-ohio-before.jpg',
				'after_image_name'	=> 'deck-cleaning-mount-vernon-ohio-after.jpg',
				'column_size' 		=> 12
			]
		];

		$this->load->view('pages/deck_patio_paver_cleanings_page', $arrPage);

		$arrPage['js'] = [];
		$this->load->view('common/footer', $arrPage);
	}

}
