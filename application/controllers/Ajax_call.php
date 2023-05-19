<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Ajax_call extends CI_Controller
{
	public function index()
	{
		return $this->returnRequest();
	}

	public function search()
	{
		$arrResponse = [
			'success' => false,
			'search_results' => []
		];

		$this->load->helper('form');
		$this->load->library('form_validation');

		if(!$this->input->is_ajax_request()) return $this->returnRequest($arrResponse);

		if($this->input->method() != 'post') return [];

		$this->load->model('Search_model');

		$arrSearchResults = $this->Search_model->searchWebsite($this->input->post('search_term'));

		$arrResponse = [
			'success' 			=> empty($arrSearchResults) ? false : true,
			'search_results' 	=> $arrSearchResults,
		];

		return $this->returnRequest($arrResponse);
	}

	public function submit_contact_form()
	{
		$intPageCheck = $this->session->userdata('contact_page_xss');

		$arrResponse = [
			'success' => false,
			'errors' => [],
			'message' => ''
		];

		$this->load->library('form_validation');
		$this->load->library('email');

		if(!$this->input->is_ajax_request()) {
			$arrResponse['message'] = 'request type not allowed';
			return $this->returnRequest($arrResponse);
		}

		if($intPageCheck != $this->input->post('check')) {
			$arrResponse['message'] = 'Verification check failed';
			return $this->returnRequest($arrResponse);
		}

		$this->form_validation->set_rules('name', 			'Name', 					'trim|required|min_length[6]|max_length[50]');
		$this->form_validation->set_rules('email', 			'Email', 					'trim|required|valid_email|min_length[8]|max_length[50]');
		$this->form_validation->set_rules('address', 		'Address', 					'trim|required|min_length[8]|max_length[50]');
		$this->form_validation->set_rules('phone', 			'Phone', 					'trim|required|min_length[10]|max_length[16]');
		$this->form_validation->set_rules('description', 	'Description or Comment', 	'trim|required|min_length[20]|max_length[255]');

		if ($this->form_validation->run() == FALSE)
		{
			$arrResponse['message'] = 'Request failed';
			$arrResponse['errors'] = validation_errors();
		}
		else
		{
			$config = [
				'protocol' 	=> 'sendmail',
				'smtp_host' => 'ssl://smtp.googlemail.com',
				'smtp_port' => 465,
				'smtp_user' => GOOGLE_EMAIL,
				'smtp_pass' => GOOGLE_PASS,
				'mailtype'  => 'html',
				'charset'   => 'iso-8859-1'
			];

			$this->email->initialize($config);

			$this->email->from('brian@supersuds.net', 'No Reply | Super Suds');
			$this->email->to('brian@supersuds.net');

			$this->email->subject('Contact Form | Quote Request');

			$email = $this->load->view('forms/contact-form', [], true);

			$this->email->message($email);

			if($this->email->send()) {
				$arrResponse['success'] = true;
				$arrResponse['message'] = '<div class="alert alert-success"><i class="fa fa-check"></i> Message successfully sent!</div>';

				$intCheck = rand(100000000, 9999999999999);
				$this->session->set_userdata('contact_page_xss', $intCheck);
				$arrResponse['check'] = $intCheck;
			} else {
				$arrResponse['message'] = '<div class="alert alert-danger"><i class="fa fa-times"></i> Emailed failed to send, please call us or email us directly.</div>';
			}
		}

		return $this->returnRequest($arrResponse);
	}

	private function returnRequest($arrResponse)
	{
		die(json_encode($arrResponse));
	}

}
