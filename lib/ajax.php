<?php

add_action('wp_ajax_hello', 'sayHello');
add_action('wp_ajax_nopriv_hello', 'sayHello');

function sayHello() {
	$filter = $_POST['filter'];
	$typeSlider = $_POST['typeSlider'];
	$swithcerType = $filter['swithcerType'];
	$servicesId = $filter['servicesId'];


	if ($swithcerType == 'current') {

		if ($servicesId == 'all') {

			$query = new WP_Query([
				'post_type' => 'projects',
				'type' => $swithcerType,
				'status' => ['object_sale', 'object_not_sale'],
			]);

		} else {
			$query = new WP_Query([
				'post_type' => 'projects',
				'type' => $swithcerType,
				'status' => ['object_sale', 'object_not_sale'],
				'meta_query' => [
					[	
						[
							'key' => 'services',
							'value' => $servicesId,
							'compare' => 'LIKE'
						]
					],
				],
			]);
		}
	}

	if ($swithcerType == 'implemented') {

		if ($servicesId == 'all') {
			$query = new WP_Query([
				'post_type' => 'projects',
				'type' => $swithcerType,
				'status' => ['object_sale', 'object_not_sale'],
			]);
		} else {
			$query = new WP_Query([
				'post_type' => 'projects',
				'type' => $swithcerType,
				'status' => ['object_sale', 'object_not_sale'],
				'meta_query' => [
					[	
						[
							'key' => 'services',
							'value' => $servicesId,
							'compare' => 'LIKE'
						]
					],
				],
			]);
		}
	}

	$response = [
		'projects' => [],
		 'param' => [
			'maxPages' => $max_pages,
			'type' => $swithcerType,
			'services' => $servicesId
		 ]
	];
	// echo '<pre>';
	// print_r($query);
	// echo '<pre>';
	if ($query->have_posts()) {
		while($query->have_posts()) {
			$query->the_post();
			$data_response = [
				'title' => get_the_title(),
				'type' => get_the_terms( get_the_ID(), 'type' )[0]->name,
				'content' => get_the_content(),
				'link' => get_the_permalink(),
				'tag' => get_the_terms( get_the_ID(), 'status' )[0]->slug,
				'total_area' => get_field('total_area'),
				'rooms' => get_field('rooms'),
				'min_area' => get_field('min_area'),
				'bathrooms' => get_field('bathrooms'),
				'stock' => get_field( 'stock' ),
				'img' => get_field('thumb'),
			];
	
			array_push($response['projects'], $data_response);
		}

		echo json_encode($response, JSON_UNESCAPED_UNICODE);
	} else {
		echo  json_encode($response, JSON_UNESCAPED_UNICODE);
	}

	wp_reset_postdata();
	die();
}


add_action('wp_ajax_slider', 'cgc_slider');
add_action('wp_ajax_nopriv_slider', 'cgc_slider');
function cgc_slider() {


}



add_action('wp_ajax_more', 'cgc_more');
add_action('wp_ajax_nopriv_more', 'cgc_more');
function cgc_more() {

	$paged = !empty($_POST['paged']) ? $_POST['paged'] : 1;
	$paged++;


	$filter = $_POST['filter'];
	//$typeSlider = $_POST['typeSlider'];
	$swithcerType = $filter['swithcerType'];
	$servicesId = $filter['servicesId'];


	if ($swithcerType == 'current') {

		if ($servicesId == 'all') {
			$query = new WP_Query([
				'post_type' => 'projects',
				'type' => $swithcerType,
				'status' => ['object_sale', 'object_not_sale'],
				'paged' => $paged 
			]);
		} else {
			$query = new WP_Query([
				'post_type' => 'projects',
				'type' => $swithcerType,
				'status' => ['object_sale', 'object_not_sale'],
				'paged' => $paged, 
				'meta_query' => [
					[	
						[
							'key' => 'services',
							'value' => $servicesId,
							'compare' => 'LIKE'
						]
					],
				],
			]);
		}
	}

	if ($swithcerType == 'implemented') {

		
		if ($servicesId == 'all') {
			$query = new WP_Query([
				'post_type' => 'projects',
				'type' => $swithcerType,
				'status' => ['object_sale', 'object_not_sale'],
				'paged' => $paged,
			]);
		} else {
			$query = new WP_Query([
				'post_type' => 'projects',
				'type' => $swithcerType,
				'status' => ['object_sale', 'object_not_sale'],
				'paged' => $paged,
				'meta_query' => [
					[	
						[
							'key' => 'services',
							'value' => $servicesId,
							'compare' => 'LIKE'
						]
					],
				],
			]);
		}
	}


	$max_pages = $query->max_num_pages;

	$response = [
		'projects' => [
			
		],
		'param' => [
		'maxPages' => $max_pages,
		'type' => $swithcerType,
		'services' => $servicesId
		]
	];

	if ($query->have_posts()) {
		while($query->have_posts()) {
			$query->the_post();
			$data_response = [
				'title' => get_the_title(),
				'type' => get_the_terms( get_the_ID(), 'type' )[0]->name,
				'content' => get_the_content(),
				'link' => get_the_permalink(),
				'tag' => get_the_terms( get_the_ID(), 'status' )[0]->slug,
				'total_area' => get_field('total_area'),
				'rooms' => get_field('rooms'),
				'min_area' => get_field('min_area'),
				'bathrooms' => get_field('bathrooms'),
				'stock' => get_field( 'stock' ),
				'img' => get_field('thumb'),
			];
	
			array_push($response['projects'], $data_response);
		}

		echo json_encode($response, JSON_UNESCAPED_UNICODE);
	} else {
		echo json_encode('Записи нет', JSON_UNESCAPED_UNICODE);
	}


	die();

}


