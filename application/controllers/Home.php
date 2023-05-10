<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

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
			'title' 		=> 'Professional Pressure Washing | Super Suds of Mount Vernon, Ohio',
			'description' 	=> 'Get your property looking its best with Super Suds Pressure Washing! Our experienced team in Madison, WI specializes in soft washing homes, garages, fences, decks, driveways and sidewalks. Effective and efficient pressure washing without the risk of damage. Schedule your service today!',
			'keywords' 		=> 'Pressure washing, ',
		];

		$this->load->model('Navbar_model');
		$arrData['navbar'] = $this->Navbar_model->getNavbarLinks();

		$arrData['before_afters'] = [
			[
				'before_image_name' => 'driveway-2-before.jpg',
				'after_image_name'	=> 'driveway-2-after.jpg',
				'column_size' 		=> 4
			],
			[
				'before_image_name' => 'driveway-before.jpg',
				'after_image_name'	=> 'driveway-after.jpg',
				'column_size' 		=> 4
			],
			[
				'before_image_name' => 'deck-cleaning-mount-vernon-ohio-before.jpg',
				'after_image_name'	=> 'deck-cleaning-mount-vernon-ohio-after.jpg',
				'column_size' 		=> 4
			],
		];

		$this->load->view('common/header', $arrData);
		$this->load->view('common/top_bar', $arrData);
		$this->load->view('common/navbar_with_carousel');

		$this->load->model('Blog_model');
		$arrData['latest_blog_entries'] = $this->Blog_model->latestBlogEntries(3);

		$this->load->view('pages/home_page', $arrData);

		$this->load->view('common/footer', $arrData);
	}
}
