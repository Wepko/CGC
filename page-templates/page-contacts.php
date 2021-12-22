<?php get_header(); ?>

<?php 
	/*
		Template Name: contacts
	*/
?>

		<?php get_template_part( 'template-parts/contact' ); ?>
    <section class="about-company reset gs_reveal">
      <div class="about-company__title gs_reveal">
        <h2><span class="text-accent">Информация</span><br> о компании</h2>
      </div>
      <p></p>
      <div class="about-company__description gs_reveal">
        <h2>	Информация <br><span class="text-accent">о компании</span></h2>
				<?php echo get_field('info_description'); ?>
        <div class="about-company__button">
					<a class="btn-primary btn-primary--outline btn-primary--icon icon-arrow-right" href="<?php echo get_field('info_link'); ?>">
						<?php echo get_field('info_button'); ?>
					</a>
				</div>
      </div>
    </section>


<?php get_footer(); ?>