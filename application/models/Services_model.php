<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Services_model extends CI_Model
{
	public function __construct()
	{

	}

	public function getServicesSettings() : array
	{
		return [
			[
				'title' => 'House Soft Wash',
				'description' => 'Clean algae, mold, and organic growth from the surface of your home',
				'name' => 'house_wash',
				'sizes' => [
					'length' => [
						'name' => 'length',
						'label' => 'Length',
						'type' => 'number',
						'min' => 0,
						'max' => 1500
					],
					'width' => [
						'name' => 'width',
						'label' => 'Width',
						'type' => 'number',
						'min' => 0,
						'max' => 1500
					],
					'sqft' => [
						'name' => 'sqft',
						'label' => 'Square Foot',
						'type' => 'number',
						'min' => 0,
						'max' => 5000,
					],
				],
				'questions' => [
					[
						'value' => 'What\'s the exterior of your home made of?',
						'name' => 'exterior',
						'input_type' => 'select',
						'options' => [
							[
								'value' => 'Hardie Board /Cement Board- painted',
								'price' => .30
							],
							[
								'value' => 'Cedar Shake',
								'price' => .35
							],
							[
								'value' => 'Vinyl Siding',
								'price' => .20
							],
							[
								'value' => 'Wood - Painted/Stained',
								'price' => .22
							],
							[
								'value' => 'Metal or  Other',
								'price' => .22
							],
							[
								'value' => 'Aluminum Siding',
								'price' => .22
							],
							[
								'value' => 'Dryvit or Stucco',
								'price' => .22
							],
							[
								'value' => 'All Brick or Stone',
								'price' => .22
							]
						]
					],
					[
						'value' => 'Do you also have a detached garage?',
						'name' 	=> 'detached_garage',
						'input_type' => 'radio',
						'options' =>  [
							[
								'value' => 'yes',
								'price' => 0,
								'sizes' => [
									'length' => [
										'type' => 'number',
										'min' => 0,
										'max' => 1500
									],
									'width' => [
										'type' => 'number',
										'min' => 0,
										'max' => 1500
									],
									'sqft' => [
										'type' => 'number',
										'min' => 0,
										'max' => 5000,
									],
								]
							],
							[
								'value' => 'no',
								'price' => 0
							],
						]
					]
				],
				'additional_details' => '',
				'class' => ''
			],
			[
				'title' => 'Driveway Wash',
				'description' => 'Clean algae, mold, and organic growth from the surface of your driveway',
				'name' => 'driveway_wash',
				'additional_details' => '',
				'class' => ''
			],
			[
				'title' => 'Sidewalk Wash',
				'description' => 'Clean algae, mold, and organic growth from the surface of your sidewalk',
				'name' => 'sidewalk_wash',
				'additional_details' => '',
				'class' => ''
			],
			[
				'title' => 'Fence Cleaning',
				'description' => 'Clean algae, mold, and organic growth from the surface of your fence',
				'name' => 'fence_wash',
				'additional_details' => '',
				'class' => ''
			],
			[
				'title' => 'Deck Cleaning',
				'description' => 'Clean algae, mold, and organic growth from the surface of your deck',
				'name' => 'deck_wash',
				'additional_details' => '',
				'class' => ''
			],
			[
				'title' => 'Patio Cleaning',
				'description' => 'Clean algae, mold, and organic growth from the surface of your patio',
				'name' => 'patio_wash',
				'additional_details' => '',
				'class' => ''
			],
			[
				'title' 		=> 'Paver Cleaning',
				'description' 	=> 'Clean algae, mold, and organic growth from the surface of your patio',
				'name' 			=> 'paver_wash',
				'additional_details' => '',
				'class' => ''
			]
		];
	}

}
