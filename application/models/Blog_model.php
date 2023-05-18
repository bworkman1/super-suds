<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Blog_model extends CI_Model
{
	CONST PER_PAGE = 12;
	var array $Post;

	CONST FEATURED_IMAGE_PATH = 'assets/img/featured-post-images/';

	public function __construct()
	{
		$this->Post = [
			[
				'url' 		=> 'best-time-to-clean-your-homes-exterior-and-driveway',
				'author' 	=> 'Brian Workman',
				'title' 	=> 'Spring Cleaning – Best time to clean your homes exterior and driveway',
				'date' 		=> '2023-03-07',
				'post' 		=> 'best-time-to-clean-your-homes-exterior-and-driveway',
				'image'     => base_url(sprintf('%sbest-time-to-clean-your-homes-exterior-and-driveway.webp', self::FEATURED_IMAGE_PATH)),
				'blurb'     => 'Spring is the season of new beginnings, but it’s also the season of… well, let’s just say “interesting” weather. With spring comes rain, pollen, and,',
				'category' 	=> 'Spring Cleaning'
			],
			[
				'url' 		=> 'get-your-home-ready-for-spring-with-professional-pressure-washing-services',
				'author' 	=> 'Brian Workman',
				'title' 	=> 'Get Your Home Ready for Spring with Professional Pressure Washing Services',
				'date' 		=> '2023-03-12',
				'post' 		=> 'get-your-home-ready-for-spring-with-professional-pressure-washing-services',
				'image'     => base_url(sprintf('%sget-your-home-ready-for-spring-with-professional-pressure-washing-services.webp', self::FEATURED_IMAGE_PATH)),
				'blurb'     => 'Spring is the perfect time to give your home a fresh start, and what better way to do that than with a thorough spring cleaning?',
				'category' 	=> 'Seasonal'
			],
			[
				'url' 		=> 'the-importance-of-regular-home-washing-and-driveway-cleaning-protecting-your-investment',
				'author' 	=> 'Brian Workman',
				'title' 	=> 'The importance of regular home washing and driveway cleaning',
				'date' 		=> '2023-03-12',
				'post' 		=> 'the-importance-of-regular-home-washing-and-driveway-cleaning-protecting-your-investment',
				'image'     => base_url(sprintf('%sthe-importance-of-regular-home-washing-and-driveway-cleaning-protecting-your-investment.webp', self::FEATURED_IMAGE_PATH)),
				'blurb'     => 'Spring is the perfect time to give your home a fresh start, and what better way to do that than with a thorough spring cleaning?',
				'category' 	=> 'Seasonal'
			],
			[
				'url' 		=> 'why-super-suds-for-driveway-and-concrete-cleaning',
				'author' 	=> 'Brian Workman',
				'title' 	=> 'Driveway and Concrete Cleaning',
				'date' 		=> '2023-03-22',
				'post' 		=> 'why-super-suds-for-driveway-and-concrete-cleaning',
				'image'     => base_url(sprintf('%swhy-super-suds-for-driveway-and-concrete-cleaning.webp', self::FEATURED_IMAGE_PATH)),
				'blurb'     => 'At Super Suds, we take pride in providing top-notch services to our clients. Our team of experts is skilled and experienced in all aspects of driveway',
				'category' 	=> 'Job Well Done'
			],
			[
				'url' 		=> 'from-grime-to-shine-in-no-time-reasons-why-you-need-professional-pressure-washer',
				'author' 	=> 'Brian Workman',
				'title' 	=> 'From Grime to Shine In No Time – 5 Reasons Why You Need Professional Pressure Washer',
				'date' 		=> '2023-04-01',
				'post' 		=> 'from-grime-to-shine-in-no-time–reasons-why-you-need-professional-pressure-washer',
				'image'     => base_url(sprintf('%sgrim-to-shine-5-reasons-why-you-need-a-pressure-washer.webp', self::FEATURED_IMAGE_PATH)),
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
