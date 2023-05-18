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
			'title' 		=> 'House Soft Wash | Super Suds Pressure Washing Services',
			'description' 	=> 'Located in Mount Vernon, OH, Sunny Pressure Washing is a commercial &amp; residential power washing company providing professional pressure washing. House Washing',
			'keywords' 		=> 'Soft Wash, House Wash, Pressure Washing, Pressure Washing, Mount Vernon, Ohio',
			'image' 		=> 'house-wash.jpg'
		];

		$this->load->model('Services_model');


		$this->load->model('Navbar_model');

		$arrPage['navbar'] = $this->Navbar_model->getNavbarLinks();

		$this->load->view('common/header', $arrPage);
		$this->load->view('common/top_bar');
		$this->load->view('common/navbar', $arrPage);

		$arrPage['arrServices'] = $this->Services_model->getServicesSettings();

		$arrPage['before_afters'] = [
			[
				'before_image_name' => 'house-wash-johnstown-ohio-after.webp',
				'after_image_name'	=> 'house-wash-johnstown-ohio-before.webp',
				'column_size' 		=> 12
			]
		];

		$this->load->model('Blog_model');
		$arrPage['latest_blog_entries'] = $this->Blog_model->latestBlogEntries(3);

		$this->load->view('pages/house_soft_wash_page', $arrPage);

		$arrPage['js'] = [];
		$this->load->view('common/footer', $arrPage);
	}

	public function driveway_wash()
	{
		$arrPage = [
			'title' 		=> 'Driveway Cleaning | Super Suds Pressure Washing Services',
			'description' 	=> 'Revive the look of your driveway with Super Suds pressure washing services. We use the best tools to clean your driveway surfaces and leave it looking like new.',
			'keywords' 		=> 'Driveway Wash, Driveway Cleaning, Pressure Washing, Power Washing',
			'image' 		=> 'driveway-wash.jpg'
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
				'before_image_name' => 'house-wash-johnstown-ohio-after.webp',
				'after_image_name'	=> 'house-wash-johnstown-ohio-before.webp',
				'column_size' 		=> 12
			]
		];

		$this->load->view('pages/driveway_wash_page', $arrPage);

		$arrPage['js'] = [];
		$this->load->view('common/footer', $arrPage);
	}

	public function sidewalk_wash()
	{
		$arrPage = [
			'title' 		=> 'Sidewalk Cleaning | Super Suds Pressure Washing Services',
			'description' 	=> 'Get your sidewalks sparkling clean with help from Super Suds! We can make your sidewalk look pristine in no time. Find out why so many local business and homeowners trust us for their cleaning needs.',
			'keywords' 		=> 'Sidewalk Cleaning, Sidewalk Wash, Pressure Wash, Mount Vernon, Ohio',
			'image' 		=> 'sidewalk-wash.jpg'
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
			'title' 		=> 'Fence Wash | Super Suds Pressure Washing Services',
			'description' 	=> 'Let Super Suds take care of all your fence cleaning needs! We offer pressure washing services to help you keep your fence looking its best. ',
			'keywords' 		=> 'Fence wash, fence cleaning, fence pressure washing, fence power washing',
			'image' 		=> ''
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
			'title' 		=> 'Deck, Patio &amp;  Pavers | Super Suds Pressure Washing Services',
			'description' 	=> 'Need your your deck, patio, pavers, or other outdoor surfaces cleaned? Super Suds is here to help. We use top-notch equipment and techniques to clean a variety of surfaces.',
			'keywords' 		=> 'Deck, Patio &amp; Pavers Pressure Washing',
			'image' 		=> ''
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
