<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Navbar_model extends CI_Model
{
	public function __construct()
	{

	}

	public function getNavbarLinks() : array
	{
		$arrNavbar = [
			[
				'url' 		=> '/',
				'title' 	=> 'Home',
				'is_active' => $this->getActive(''),
			],
			[
				'url' 		=> 'about-us',
				'title' 	=> 'About',
				'is_active' => $this->getActive('about-us'),
			],
			[
				'url' 		=> '#',
				'title' 	=> 'Services',
				'is_active' => false,
				'dropdown'  => [
					[
						'url' 		=> 'services/house-soft-wash',
						'title' 	=> 'House Soft Wash',
						'is_active' => $this->getActive('services/house-soft-wash'),
					],
					[
						'url' 		=> 'services/driveway-wash',
						'title' 	=> 'Driveway Wash',
						'is_active' => $this->getActive('services/driveway-wash'),
					],
					[
						'url' 		=> 'services/sidewalk-wash',
						'title' 	=> 'Sidewalk Wash',
						'is_active' => $this->getActive('services/sidewalk-wash'),
					],
					[
						'url' 		=> 'services/fence-wash',
						'title' 	=> 'Fence Wash',
						'is_active' => $this->getActive('services/fence-wash'),
					],
					[
						'url' 		=> 'services/deck-patio-paver-cleanings',
						'title' 	=> 'Deck, Patio, Paver Cleanings',
						'is_active' => $this->getActive('services/deck-patio-paver-cleanings'),
					]
				]
			],
			[
				'url' 		=> 'blog',
				'title' 	=> 'Blog',
				'is_active' => $this->getActive('blog'),
			],
			[
				'url' 		=> 'contact-us',
				'title' 	=> 'Contact Us',
				'is_active' => $this->getActive('contact-us'),
			]
		];

		return $arrNavbar;
	}

	public function getActive($strSlug) : bool
	{
		return ($strSlug == $this->uri->uri_string());
	}
}
