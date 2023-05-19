<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Search_model extends CI_Model
{
	public string $SEARCH_TERM;

	private array $SEARCH_RESULTS;
	public function searchWebsite($strSearchTerm = '') : array
	{
		if(!$strSearchTerm) return [];

		$this->SEARCH_RESULTS 	= [];
		$this->SEARCH_TERM 		= $strSearchTerm;

		$this->load->model('Blog_model');
		$this->searchBlogPosts($this->Blog_model->Post);

		$this->load->model('Navbar_model');
		$this->searchNavbarLinks($this->Navbar_model->getNavbarLinks());

		return $this->SEARCH_RESULTS;
	}

	private function searchNavbarLinks($arrNavbarLinks)
	{
		if(empty($arrNavbarLinks)) return [];

		foreach($arrNavbarLinks as $arrNavbarLink)
		{
			// if it's a dropdown, we need another loop
			if(isset($arrNavbarLink['dropdown'])) {
				$this->searchNavbarLinks($arrNavbarLink['dropdown']);
			} else {
				if (strpos(strtolower($arrNavbarLink['title']),  strtolower($this->SEARCH_TERM)) !== false)
				{
					$this->SEARCH_RESULTS[] = [
						'title' => $arrNavbarLink['title'],
						'url' 	=> base_url($arrNavbarLink['url'], BASE_URL_PROTOCOL),
						'image' => base_url('assets/img/super-suds-pressure-washing-logo.png', BASE_URL_PROTOCOL)
					];
				}
			}
		}
	}

	private function searchBlogPosts($arrBlogPosts)
	{
		if(empty($arrBlogPosts)) return [];

		foreach($arrBlogPosts as $arrBlogPost)
		{
			if (strpos(strtolower($arrBlogPost->title),  strtolower($this->SEARCH_TERM)) !== false)
			{
				$this->SEARCH_RESULTS[] = [
					'title' => $arrBlogPost->title,
					'url' 	=> base_url(sprintf('blog/%s', $arrBlogPost->url), BASE_URL_PROTOCOL),
					'image' => $arrBlogPost->image
				];
			}
		}
	}

}
