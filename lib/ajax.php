<?php

add_action('wp_ajax_hello', 'sayHello');
add_action('wp_ajax_nopriv_hello', 'sayHello');

function sayHello() {
	$filter = $_POST['filter'];
	$typeSlider = $_POST['typeSlider'];
	$swithcerType = $filter['swithcerType'];
	$servicesId = $filter['servicesId'];
	$paged = $filter['paged'];

	if ($swithcerType == 'current') {

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

	function is_tag_cgc() {
		$slug = get_the_terms( get_the_ID(), 'status' )[0]->slug;

		if ($slug == 'object_sale') {
			return '<p class="tag tag_solid"> Обьект в продаже</p>';
		} else {	
			return ' ';
		} 
		return false;
	}

	function is_stocs_cgc() {
		$stock = get_field('stock'); 
		if (!empty($stock)) {
			return '<p class="tag tag_primary">Спецпредложение</p>';
		} else {
			return '  ';
		}
	}

	function load_template_part($template_name, $part_name=null) {
    ob_start();
    get_template_part($template_name, $part_name);
    $var = ob_get_contents();
    ob_end_clean();
    return $var;
	}
	$max_pages = $query->max_num_pages;
	$response = [
		'projects' => [],
		'maxPages' => $max_pages
	];
	if ($query->have_posts()) {

		while($query->have_posts()) {
			$query->the_post();
			$part = load_template_part('template-parts/card-product');
			array_push($response['projects'], $part);
		}

		echo json_encode($response, JSON_UNESCAPED_UNICODE);

	} else {
		echo json_encode($response, JSON_UNESCAPED_UNICODE);
	}


		
	wp_reset_postdata();
	die();
}

add_action('wp_ajax_catalog', 'catalog');
add_action('wp_ajax_nopriv_catalog', 'catalog');

function catalog() {
	$filter = $_POST['filter'];
	$area = $filter['area'];
	$bedroom = $filter['bedroom'];
	$bathroom = $filter['bathroom'];
	$paged = $filter['paged'];


	$argQuery = [
		'post_type' => 'projects',
		'type' => 'possible',
		'status' => ['object_sale', 'object_not_sale'],
		'paged' => $paged,
		'meta_query' => [
			[	
				'relation'		=> 'AND',

			],
		],
	];
	
	if ($area != 'full')  {
		array_push($argQuery['meta_query'][0],[
			'key' => 'total_area',
			'value' => explode( ':', $area),
			'compare' => 'BETWEEN'
		]);
	}

	if ($bedroom != 'full') {
		array_push($argQuery['meta_query'][0],[
			'key' => 'bedrooms',
			'value' => explode( ':', $bedroom),
			'compare' => 'BETWEEN'
		]);
	}

	if ($bathroom != 'full') {
		array_push($argQuery['meta_query'][0],[
			'key' => 'bathrooms',
			'value' => explode( ':', $bathroom),
			'compare' => 'BETWEEN'
		]);
	}


	$query = new WP_Query($argQuery);




	function is_tag_cgc() {
		$slug = get_the_terms( get_the_ID(), 'status' )[0]->slug;

		if ($slug == 'object_sale') {
			return '<p class="tag tag_solid"> Обьект в продаже</p>';
		} else {	
			return ' ';
		} 
		return false;
	}

	function is_stocs_cgc() {
		$stock = get_field('stock'); 
		if (!empty($stock)) {
			return '<p class="tag tag_primary">Спецпредложение</p>';
		} else {
			return '  ';
		}
	}

	function load_template_part($template_name, $part_name=null) {
    ob_start();
    get_template_part($template_name, $part_name);
    $var = ob_get_contents();
    ob_end_clean();
    return $var;
	}
	$max_pages = $query->max_num_pages;
	$response = [
		'projects' => [],
		'maxPages' => $max_pages
	];
	if ($query->have_posts()) {

		while($query->have_posts()) {
			$query->the_post();
			$part = load_template_part('template-parts/card-product');
			array_push($response['projects'], $part);
		}

		echo json_encode($response, JSON_UNESCAPED_UNICODE);

	} else {
		echo json_encode($response, JSON_UNESCAPED_UNICODE);
	}


		
	wp_reset_postdata();
	die();
}