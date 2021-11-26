<?php
/**
 * The template for displaying archive pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package cgc
 */

get_header();
?>

	<?php get_template_part( 'template-parts/service' ); ?>
	<?php get_template_part( 'template-parts/slider-projects'); ?>
	<?php get_template_part( 'template-parts/question'); ?>
	<?php get_template_part( 'template-parts/contact', null, 'dark'); ?>


<?php get_footer(); ?>

