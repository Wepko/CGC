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

	<section class="cgc-error404">
		<h1 class="cgc-error404__title">404</h1>
		<p class="cgc-error404__description">Страница не найдена</p>
		<div class="cgc-error404__link">
			<a class="cgc-link" href="<?php echo get_site_url()?>">Вернуться на главную</a>
		</div>
	</section>

<?php 
	$theme = 'dark';
	get_template_part( 'template-parts/contact', null, $theme ); 	
?>


<?php get_footer(); ?>

