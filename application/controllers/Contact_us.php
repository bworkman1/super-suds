<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Contact_us extends CI_Controller
{
	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 *        http://example.com/index.php/welcome
	 *    - or -
	 *        http://example.com/index.php/welcome/index
	 *    - or -
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
			'title' 		=> 'Super Suds Pressure Washing',
			'description' 	=> '',
			'keywords' 		=> '',
		];

		$this->load->model('Navbar_model');
		$arrData['navbar'] = $this->Navbar_model->getNavbarLinks();

		$this->load->view('common/header', $arrData);
		$this->load->view('common/top_bar');
		$this->load->view('common/navbar', $arrData);

		$this->load->view('pages/contact_us');

		$this->load->view('common/footer');
	}


}
