<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

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
		'post_status' => 'publish',
		'type' => 'possible',
		'status' => ['object_sale', 'object_not_sale'],
		'paged' => $paged,
		
		'meta_query' => [
			[	
				'relation'		=> 'AND',

			],
		],
		'orderby' => 'meta_value',
		'meta_key' => 'total_area',
		'order' => 'ASC'
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


	// echo '<pre>';
	// print_r($query);
	// echo '</pre>';

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


add_action('wp_ajax_objsale', 'objsale');
add_action('wp_ajax_nopriv_objsale', 'objsale');

function objsale() {
	$filter = $_POST['filter'];
	$area = $filter['area'];
	$bedroom = $filter['bedroom'];
	$bathroom = $filter['bathroom'];
	$paged = $filter['paged'];


	$argQuery = [
		'post_type' => 'projects',
		'type' => ['implemented', 'current'],
		'status' => 'object_sale',
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

add_action('wp_ajax_mail', 'email');
add_action('wp_ajax_nopriv_mail', 'email');

function email() {
	// $message = $_POST;
	// echo json_encode($message, JSON_UNESCAPED_UNICODE);
	// // $response = [
	// // 	'projects' => $_POST,
	// // 	'maxPages' => 'asdf'
	// // ];
	// // echo json_encode($response, JSON_UNESCAPED_UNICODE);

	print_r(dirname(__DIR__) . '/vendor/autoload.php');
	$message = $_POST['message'];
	$post_id = $_POST['post_id'];
	$mail_list = get_field( "mail_list", $post_id );
	
	$mail = new PHPMailer(true);

	try {
			//Server settings
			$mail->SMTPDebug = SMTP::DEBUG_SERVER;                      //Enable verbose debug output
			$mail->isSMTP();    
			$mail->setLanguage("en");                                        //Send using SMTP
			$mail->Host       = 'smtp.mail.ru';                     //Set the SMTP server to send through
			$mail->SMTPAuth   = true;                                   //Enable SMTP authentication
			$mail->Username   = 'daffmen15@mail.ru';                     //SMTP username
			$mail->Password   = 'tYdk0GMcG1hV6sEn8qPB';                               //SMTP password
			$mail->SMTPSecure = 'tls';            //Enable implicit TLS encryption
			$mail->Port       = 587;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`
			$mail->CharSet = "utf-8";

			//Recipients
			$mail->setFrom('daffmen15@mail.ru', 'Mailer');
			// print_r($mail_list[0]['email']);
			// $mail->addAddress($mail_list[0]['email'], "Joe User");
			// $mail->addAddress("wepko.pro@mail.ru", "Joe User");
			foreach ($mail_list as $mail_item) {		
				$mail_sent = $mail_item['email'];
				if (!filter_var($mail_sent, FILTER_VALIDATE_EMAIL)) continue;
				$mail->addAddress($mail_sent, "Joe User");     //Add a recipient
			}
			// $mail->addAddress('ellen@example.com');               //Name is optional
			// $mail->addReplyTo('info@example.com', 'Information');
			// $mail->addCC('cc@example.com');
			// $mail->addBCC('bcc@example.com');
	
			//Attachments
			// $mail->addAttachment('/var/tmp/file.tar.gz');         //Add attachments
			// $mail->addAttachment('/tmp/image.jpg', 'new.jpg');    //Optional name
	
			//Content
			$mail->isHTML(true);                                  //Set email format to HTML
			$mail->Subject = 'Here is the subject';
			$mail->Body    = "<p>$message</p>";
			$mail->AltBody = 'This is the body in plain text for non-HTML mail clients';
	
			$mail->send();
			echo 'Message has been sent';
	} catch (Exception $e) {
			echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
	}

}

add_action('wp_ajax_subscribe', 'subscribe');
add_action('wp_ajax_nopriv_subscribe', 'subscribe');

function subscribe() {
	$email = $_POST['email'];
	$post_id = $_POST['post_id'];
	$row = array(
    'field_611a9ada0a7fd'   => $email,
	);
	add_row('mail_list', $row, $post_id);
	//$mail_list = get_field( "mail_list", $post_id );
	//echo json_encode($_POST, JSON_UNESCAPED_UNICODE);

}
