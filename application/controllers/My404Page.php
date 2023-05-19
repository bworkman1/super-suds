<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class My404Page extends CI_Controller {

	public function index()
	{
		$arrData = [
			'title' 		=> 'Professional Pressure Washing | Super Suds of Mount Vernon, Ohio',
			'description' 	=> 'Get your property looking its best with Super Suds Pressure Washing! Our experienced team in Madison, WI specializes in soft washing homes, garages, fences, decks, driveways and sidewalks. Effective and efficient pressure washing without the risk of damage. Schedule your service today!',
			'keywords' 		=> 'Pressure washing',
			'image'			=> ''
		];

		$this->load->model('Navbar_model');
		$arrData['navbar'] = $this->Navbar_model->getNavbarLinks();

		$this->load->view('common/header', $arrData);
		$this->load->view('common/top_bar', $arrData);
		$this->load->view('common/navbar');

		$this->load->model('Blog_model');
		$arrData['latest_blog_entries'] = $this->Blog_model->latestBlogEntries(3);

		$this->load->view('errors/html/error_404', $arrData);

		$this->load->view('common/footer', $arrData);
	}
}
