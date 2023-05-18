<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Blog_model extends CI_Model
{
	CONST PER_PAGE = 12;
	var array $Post;

	CONST FEATURED_IMAGE_PATH = 'assets/img/featured-post-images/';

	public function __construct()
	{
		$this->load->database();
		$objQuery = $this->db->query('SELECT * FROM posts');

		$this->Post = [
			[
				'url' 		=> 'best-time-to-clean-your-homes-exterior-and-driveway',
				'author' 	=> 'Brian Workman',
				'title' 	=> 'Spring Cleaning – Best time to clean your homes exterior and driveway',
				'date' 		=> '2023-03-07',
				'post' 		=> 'best-time-to-clean-your-homes-exterior-and-driveway',
				'image'     => 'best-time-to-clean-your-homes-exterior-and-driveway.webp',
				'blurb'     => 'Spring is the season of new beginnings, but it’s also the season of… well, let’s just say “interesting” weather. With spring comes rain, pollen, and,',
				'category' 	=> 'Spring Cleaning'
			],
			[
				'url' 		=> 'get-your-home-ready-for-spring-with-professional-pressure-washing-services',
				'author' 	=> 'Brian Workman',
				'title' 	=> 'Get Your Home Ready for Spring with Professional Pressure Washing Services',
				'date' 		=> '2023-03-12',
				'post' 		=> 'get-your-home-ready-for-spring-with-professional-pressure-washing-services',
				'image'     => 'get-your-home-ready-for-spring-with-professional-pressure-washing-services.webp',
				'blurb'     => 'Spring is the perfect time to give your home a fresh start, and what better way to do that than with a thorough spring cleaning?',
				'category' 	=> 'Seasonal'
			],
			[
				'url' 		=> 'the-importance-of-regular-home-washing-and-driveway-cleaning-protecting-your-investment',
				'author' 	=> 'Brian Workman',
				'title' 	=> 'The importance of regular home washing and driveway cleaning',
				'date' 		=> '2023-03-12',
				'post' 		=> 'the-importance-of-regular-home-washing-and-driveway-cleaning-protecting-your-investment',
				'image'     => 'the-importance-of-regular-home-washing-and-driveway-cleaning-protecting-your-investment.webp',
				'blurb'     => 'Spring is the perfect time to give your home a fresh start, and what better way to do that than with a thorough spring cleaning?',
				'category' 	=> 'Seasonal'
			],
			[
				'url' 		=> 'why-super-suds-for-driveway-and-concrete-cleaning',
				'author' 	=> 'Brian Workman',
				'title' 	=> 'Driveway and Concrete Cleaning',
				'date' 		=> '2023-03-22',
				'post' 		=> 'why-super-suds-for-driveway-and-concrete-cleaning',
				'image'     => 'why-super-suds-for-driveway-and-concrete-cleaning.webp',
				'blurb'     => 'At Super Suds, we take pride in providing top-notch services to our clients. Our team of experts is skilled and experienced in all aspects of driveway',
				'category' 	=> 'Job Well Done'
			],
			[
				'url' 		=> 'from-grime-to-shine-in-no-time-reasons-why-you-need-professional-pressure-washer',
				'author' 	=> 'Brian Workman',
				'title' 	=> 'From Grime to Shine In No Time – 5 Reasons Why You Need Professional Pressure Washer',
				'date' 		=> '2023-04-01',
				'post' 		=> 'from-grime-to-shine-in-no-time–reasons-why-you-need-professional-pressure-washer',
				'image'     => 'grim-to-shine-5-reasons-why-you-need-a-pressure-washer.webp',
				'blurb'     => 'Are your home’s exterior walls looking a little worse for wear? Have you been neglecting the maintenance needs of your precious abode? If so, do no',
				'category' 	=> 'Spring Cleaning'
			],
		];
	}

	public function getTotalEntries()
	{
		return count($this->Post);
	}

	public function latestBlogEntries($intLimit)
	{
		return array_slice($this->Post, (bcmul($intLimit, -1)), $intLimit, true);
	}

	public function getBlogEntries($intStart)
	{
		return array_slice($this->Post, $intStart, self::PER_PAGE, true);
	}

	public function getRequestedPost($strRequestedPost) : array
	{
		if(empty($strRequestedPost)) return [];

		foreach($this->Post as $arrPost)
		{
			if($arrPost['url'] == $strRequestedPost) return $arrPost;
		}

		return [];
	}

}
