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
		<div class="banter-loader__box"></div>
		<div class="banter-loader__box"></div>
		<div class="banter-loader__box"></div>
		<div class="banter-loader__box"></div>
		<div class="banter-loader__box"></div>
		<div class="banter-loader__box"></div>
		<div class="banter-loader__box"></div>
		<div class="banter-loader__box"></div>
		<div class="banter-loader__box"></div>
		</div>
	</div>




