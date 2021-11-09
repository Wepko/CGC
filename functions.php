<?php
/**
 * cgc functions and definitions
 *

 */



require_once('lib/helpers.php');
require_once('lib/enqueue-assets.php');






// add_action( 'after_setup_theme', 'theme_register_nav_menu' );
// function theme_register_nav_menu() {
// 	register_nav_menu( 'primary', 'Зона в шапке сайта' );
// }


// add_action('init', 'my_custom_init');
// function my_custom_init() {
// 	register_post_type('projects', array(
// 		'labels'             => array(
// 			'name'               => 'Проекты', // Основное название типа записи
// 			'singular_name'      => 'Проект', // отдельное название записи типа Book
// 			'add_new'            => 'Добавить проект',
// 			'add_new_item'       => 'Добавить новый проект',
// 			'edit_item'          => 'Редактировать проект',
// 			'new_item'           => 'Новый проект',
// 			'view_item'          => 'Посмотреть проект',
// 			'search_items'       => 'Найти проект',
// 			'not_found'          => 'Проектов пока нету',
// 			'not_found_in_trash' => 'В корзине проектов не найдено',
// 			'parent_item_colon'  => '',
// 			'menu_name'          => 'Проекты'

// 		  ),
// 		'public'             => true,
// 		'publicly_queryable' => true,
// 		'show_ui'            => true,
// 		'show_in_menu'       => true,
// 		'query_var'          => true,
// 		'rewrite'            => true,
// 		'capability_type'    => 'post',
// 		'has_archive'        => true,
// 		'hierarchical'       => false,
// 		'menu_position'      => null,
// 		'supports'           => array('title','author')
// 	) );

// 	register_taxonomy( 'type', [ 'projects'], [
// 		'label'                 => '', // определяется параметром $labels->name
// 		'labels'                => [
// 			'name'              => 'Тип проекта',
// 			'singular_name'     => 'Тип проекта1',
// 			'search_items'      => 'Поиск типов проекта',
// 			'all_items'         => 'All Genres4 Тип проекта',
// 			'view_item '        => 'View Genre5 Тип проекта',
// 			'parent_item'       => 'Parent Genre6 Тип проекта',
// 			'parent_item_colon' => 'Parent Genre:7',
// 			'edit_item'         => 'Изменить тип проекта',
// 			'update_item'       => 'Update Genre9',
// 			'add_new_item'      => 'Добавить новый тип проекта',
// 			'new_item_name'     => 'New Genre Name11',
// 			'menu_name'         => 'Тип проекта',
// 		],
// 		'description'           => '', // описание таксономии
// 		'public'                => true,
// 		// 'publicly_queryable'    => null, // равен аргументу public
// 		// 'show_in_nav_menus'     => true, // равен аргументу public
// 		// 'show_ui'               => true, // равен аргументу public
// 		// 'show_in_menu'          => true, // равен аргументу show_ui
// 		// 'show_tagcloud'         => true, // равен аргументу show_ui
// 		// 'show_in_quick_edit'    => null, // равен аргументу show_ui
// 		'hierarchical'          => true,

// 		'rewrite'               => true,
// 		//'query_var'             => $taxonomy, // название параметра запроса
// 		'capabilities'          => array(),
// 		'meta_box_cb'           => null, // html метабокса. callback: `post_categories_meta_box` или `post_tags_meta_box`. false — метабокс отключен.
// 		'show_admin_column'     => true, // авто-создание колонки таксы в таблице ассоциированного типа записи. (с версии 3.5)
// 		'show_in_rest'          => null, // добавить в REST API
// 		'rest_base'             => null, // $taxonomy
// 		// '_builtin'              => false,
// 		//'update_count_callback' => '_update_post_term_count',
// 	] );

// 	register_taxonomy( 'status', ['projects'], [
// 		'label' => 'Статус проектов',
// 		'public' => true,
// 		'hierarchical' => true,
// 		'capabilities' => array(),
// 		'show_admin_column' => true,
// 	] );

// 	register_post_type('services', [
// 		'labels' => [
// 			'name' => 'Услуги',
// 			'menu_name' => 'Услуги'
// 		],
// 		'public'             => true,
// 		'publicly_queryable' => true,
// 		'show_ui'            => true,
// 		'show_in_menu'       => true,
// 		'query_var'          => true,
// 		'rewrite'            => true,
// 		'capability_type'    => 'post',
// 		'has_archive'        => true,
// 		'hierarchical'       => false,
// 		'menu_position'      => null,
// 		'supports'           => array('title','editor','author','thumbnail','excerpt','comments')

// 	]);

// 	register_taxonomy( 'category', ['services'], [
// 		'label' => 'Категория услуг',
// 		'public' => true,
// 		'hierarchical' => true,
// 		'capabilities' => array(),
// 		'show_admin_column' => true,
// 	] );


// 	register_post_type('stocks', [
// 		'labels' => [
// 			'name' => 'Акциия',
// 			'menu_name' => 'Акции'
// 		],
// 		'public'             => true,
// 		'publicly_queryable' => true,
// 		'show_ui'            => true,
// 		'show_in_menu'       => true,
// 		'query_var'          => true,
// 		'rewrite'            => true,
// 		'capability_type'    => 'post',
// 		'has_archive'        => false,
// 		'hierarchical'       => false,
// 		'menu_position'      => null
// 	]);

// 	register_post_type('partners', [
// 		'labels' => [
// 			'name' => 'Партнеры',
// 			'menu_name' => 'Партнеры'
// 		],
// 		'public'             => true,
// 		'publicly_queryable' => true,
// 		'show_ui'            => true,
// 		'show_in_menu'       => true,
// 		'query_var'          => false,
// 		'rewrite'            => false,
// 		'capability_type'    => 'post',
// 		'has_archive'        => false,
// 		'hierarchical'       => false,
// 		'menu_position'      => null
// 	]);

// }



// add_action('wp_ajax_hello', 'sayHello');
// add_action('wp_ajax_nopriv_hello', 'sayHello');

// function sayHello() {
// 	$filter = $_POST['filter'];
// 	$typeSlider = $_POST['typeSlider'];
// 	$swithcerType = $filter['swithcerType'];
// 	$servicesId = $filter['servicesId'];


// 	if ($swithcerType == 'current') {
// 		// $query = new WP_Query([
// 		// 	'post_type' => 'projects',
// 		// 	'type' => 'implemented'
// 		// 	'type' => 'current',
// 		// ]);

// 		if ($servicesId == 'all') {
// 			$query = new WP_Query([
// 				'post_type' => 'projects',
// 				'type' => $swithcerType,
// 			]);
// 		} else {
// 			$query = new WP_Query([
// 				'post_type' => 'projects',
// 				'type' => $swithcerType,
// 				'meta_query' => [
// 					[	
// 						[
// 							'key' => 'services',
// 							'value' => $servicesId,
// 							'compare' => 'LIKE'
// 						]
// 					],
// 				],
// 			]);
// 		}
// 	}

// 	if ($swithcerType == 'implemented') {

		
// 		if ($servicesId == 'all') {
// 			$query = new WP_Query([
// 				'post_type' => 'projects',
// 				'type' => $swithcerType,
// 			]);
// 		} else {
// 			$query = new WP_Query([
// 				'post_type' => 'projects',
// 				'type' => $swithcerType,
// 				'meta_query' => [
// 					[	
// 						[
// 							'key' => 'services',
// 							'value' => $servicesId,
// 							'compare' => 'LIKE'
// 						]
// 					],
// 				],
// 			]);
// 		}
// 	}

		
// 	die();
// }


// add_action('wp_ajax_slider', 'cgc_slider');
// add_action('wp_ajax_nopriv_slider', 'cgc_slider');
// function cgc_slider() {

// }



// add_action('wp_ajax_more', 'cgc_more');
// add_action('wp_ajax_nopriv_more', 'cgc_more');
// function cgc_more() {

// 	$paged = !empty($_POST['paged']) ? $_POST['paged'] : 1;
// 	$paged++;


// 	$filter = $_POST['filter'];
// 	//$typeSlider = $_POST['typeSlider'];
// 	$swithcerType = $filter['swithcerType'];
// 	$servicesId = $filter['servicesId'];


// 	if ($swithcerType == 'current') {

// 		if ($servicesId == 'all') {
// 			$query = new WP_Query([
// 				'post_type' => 'projects',
// 				'type' => $swithcerType,
// 				'paged' => $paged 
// 			]);
// 		} else {
// 			$query = new WP_Query([
// 				'post_type' => 'projects',
// 				'type' => $swithcerType,
// 				'meta_query' => [
// 					[	
// 						[
// 							'key' => 'services',
// 							'value' => $servicesId,
// 							'compare' => 'LIKE'
// 						]
// 					],
// 				],
// 			]);
// 		}
// 	}

// 	if ($swithcerType == 'implemented') {

		
// 		if ($servicesId == 'all') {
// 			$query = new WP_Query([
// 				'post_type' => 'projects',
// 				'type' => $swithcerType,
// 			]);
// 		} else {
// 			$query = new WP_Query([
// 				'post_type' => 'projects',
// 				'type' => $swithcerType,
// 				'meta_query' => [
// 					[	
// 						[
// 							'key' => 'services',
// 							'value' => $servicesId,
// 							'compare' => 'LIKE'
// 						]
// 					],
// 				],
// 			]);
// 		}
// 	}


// 	// $query = new WP_Query([
// 	// 	'post_type' => 'projects',
// 	// 	'type' => $swithcerType, 
// 	// 	'paged' => $paged 
// 	// ]);

// 	$max_pages = $query->max_num_pages;

// 		$response = []; 

// 		$response = [
// 			'projects' => [
				
// 			],
// 			 'param' => [
// 				'maxPages' => $max_pages,
// 				'type' => $swithcerType,
// 				'services' => $servicesId
// 			 ]
// 		];
// 		if ($query->have_posts()) {
// 			while($query->have_posts()) {
// 				$query->the_post();
// 				$data_response = [
// 					'title' => get_the_title(),
// 					'type' => get_the_terms( get_the_ID(), 'type' )[0]->name,
// 					'content' => get_the_content()
// 				];
		


// 				array_push($response['projects'], $data_response);
// 			}

// 			echo json_encode($response, JSON_UNESCAPED_UNICODE);
// 		} else {
// 			echo 'Записей нет';
// 		}


// 	die();

// }


