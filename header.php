<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package cgc
 */

?>

<!DOCTYPE html>
<html <?php language_attributes(); ?>>
	<head>
		<meta charset="<?php bloginfo( 'charset' ); ?>">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<?php wp_head(); ?>
	</head>
	<body <?php body_class(); ?>>
	<?php wp_body_open(); ?>

<?php

	$cgc_is_single = (is_single() && get_post_type() == 'services');
	// Если ты на ходишься не на главной странице то выводи header и
	// Если ты на ходишься не на странице single к категории services то выводи header
?>
	
	<?php if(!(is_front_page() || $cgc_is_single)) : ?>
		<header class="header header--light">
			<div class="container">
				<?php get_template_part( 'template-parts/nav' ); ?>
			</div>
		</header>
		<div class="header-clear"></div>
	<?php endif ?>

	
	<div class="preloader">
		<div class="banter-loader">
			<label class="banter-loader__box">
				<svg width="23" height="25" viewBox="0 0 23 25" fill="none" xmlns="http://www.w3.org/2000/svg">
					<path fill-rule="evenodd" clip-rule="evenodd" d="M12.0394 24.2899C17.145 24.2899 20.0744 22.0839 22.2446 19.0887L17.438 15.663C16.0569 17.343 14.64 18.461 12.2367 18.461C9.00841 18.461 6.73661 15.7587 6.73661 12.3032C6.73661 8.8775 9.00841 6.1454 12.2367 6.1454C14.4428 6.1454 15.9912 7.1677 17.3064 8.8118L21.9816 5.1888C19.9429 2.3551 17.0075 0.316406 12.3025 0.316406C5.3197 0.316406 0.154302 5.5834 0.154302 12.3032C0.148302 19.2501 5.4512 24.2899 12.0394 24.2899Z" fill="#101820"/>
				</svg>
			</label>

			<label class="banter-loader__box">
				<svg width="4" height="33" viewBox="0 0 4 33" fill="none" xmlns="http://www.w3.org/2000/svg">
					<path fill-rule="evenodd" clip-rule="evenodd" d="M3.02474 16.3032C3.02474 38.0408 0.902344 38.0408 0.902344 16.3032C0.908344 -5.4344 3.02474 -5.4344 3.02474 16.3032Z" fill="#101820"/>
				</svg>
			</label>

			<label class="banter-loader__box">
				<svg width="24" height="25" viewBox="0 0 24 25" fill="none" xmlns="http://www.w3.org/2000/svg">
					<path fill-rule="evenodd" clip-rule="evenodd" d="M13.3865 24.29C17.5714 24.29 20.9611 22.7416 23.3944 20.7328V10.3602H12.7946V15.0354H17.3382V17.8333C16.3816 18.461 15.1979 18.7898 13.6495 18.7898C9.99675 18.7898 7.39615 16.1235 7.39615 12.3989C7.39615 8.81185 9.96685 6.00805 13.2908 6.00805C15.5626 6.00805 17.2067 6.79715 18.8567 8.18415L22.6112 3.67045C20.172 1.56602 17.3083 0.310547 13.2609 0.310547C6.11675 0.310547 0.84375 5.57755 0.84375 12.2973C0.84375 19.3458 6.20645 24.29 13.3865 24.29Z" fill="#101820"/>
				</svg>
			</label>

			<label class="banter-loader__box" for="">
				<svg width="3" height="33" viewBox="0 0 3 33" fill="none" xmlns="http://www.w3.org/2000/svg">
					<path class="svg" fill-rule="evenodd" clip-rule="evenodd" d="M2.33617 16.3032C2.33617 38.0408 0.213867 38.0408 0.213867 16.3032C0.213867 -5.4344 2.33617 -5.4344 2.33617 16.3032Z" fill="#101820"/>
				</svg>
			</label>

			<label class="banter-loader__box" for="">
				<svg width="23" height="25" viewBox="0 0 23 25" fill="none" xmlns="http://www.w3.org/2000/svg">
					<path fill-rule="evenodd" clip-rule="evenodd" d="M11.8851 24.2899C16.9907 24.2899 19.9201 22.0839 22.0903 19.0887L17.2837 15.663C15.9026 17.343 14.4857 18.461 12.0824 18.461C8.85406 18.461 6.58226 15.7587 6.58226 12.3032C6.58226 8.8775 8.85406 6.1454 12.0824 6.1454C14.2885 6.1454 15.8369 7.1677 17.1521 8.8118L21.8273 5.1888C19.7886 2.3551 16.8532 0.316406 12.1482 0.316406C5.16537 0.316406 5.05006e-06 5.5834 5.05006e-06 12.3032C-0.00597338 19.2501 5.2969 24.2899 11.8851 24.2899Z" fill="#101820"/>
				</svg>
			</label>
		</div>
	</div>




