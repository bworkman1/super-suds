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
		$objQuery = $this->db->query('SELECT * FROM posts ORDER BY date ASC');

		$this->Post = $objQuery->result();
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

	public function getRequestedPost($strRequestedPost)
	{
		if(empty($strRequestedPost)) return null;

		foreach($this->Post as $objPost)
		{
			if($objPost->url == $strRequestedPost) return $objPost;
		}

		return null;
	}

}
