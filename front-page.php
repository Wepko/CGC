<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package cgc
 */

get_header();
	require_once 'lib/helpers.php';
?>


	<?php get_template_part( 'template-parts/modal' ); ?>
	<?php $phoneNumber = get_field("contact-phone", 117)?>
	<div class="main-page">
		<header class="header">
			<div class="container">
				<div class="header__line"> 
					<div class="header__info">
						<span class="icon-phone"><a href="tel:<?php echo  $phoneNumber?>"><?php echo  $phoneNumber?></a></span>
						<span class="icon-email">
							<a href="mailto:<?php echo get_field("contact-email", 117)?>">
								<?php echo get_field("contact-email", 117)?>
							</a>
						</span>
					</div>
					<div class="header__links">
						<nav class="navigation">
							<li><a class="icon-camera" href="/camers">Онлайн камеры</a></li>
						</nav>
					</div>
				</div>
				<hr class="horizontal_rules"/>
				<?php get_template_part( 'template-parts/nav' ); ?>
			</div>
		</header>
		<div class="slider-header">
			<!-- Additional required wrapper-->
			<?php 
				$slider = get_field('main-slider');

			?>
			<div class="swiper-wrapper">
				<?php if( have_rows('main-slider') ) : ?>
					<?php while( have_rows('main-slider') ) : 
						the_row(); 
						$image = get_sub_field('fon')['url']; 
						
						$select_home = get_sub_field('select_home');
						$select_home_id = $select_home->ID;
						$select_home_title = $select_home->post_title;
						$select_home_total_area = $select_home->total_area;
						$select_home_floors = $select_home->floors;
						$select_home_rooms = $select_home->rooms;
						$select_home_bathrooms = $select_home->bathrooms;
						$select_home_features = $select_home->features;
						//get_metadata('post', get_sub_field('select_home')->ID,)['features'][0]
						$select_home_thumb = wp_get_attachment_url($select_home->thumb);
						
					?>
	
						<div class="swiper-slide">
						<?php $cgc_background_url = cgc_if($image, $select_home_thumb);?>
							<section class="main" style='<?php echo "background: url($cgc_background_url); background-size:cover;" ?>'>
								<div class="bg-wrapper"></div>
								<div class="container">
									<div class="info-block gs_reveal gs_reveal_fromLeft">
									<?php if (get_sub_field('slide-switcher-tag')) :?>
										<div class="info-block__tag">
											<div class="tag"><?php the_sub_field('slide-tag'); ?></div>
										</div>
									<?php endif; ?>
										<h1 class="info-block__title" >
											<?php
												$slide_title = get_sub_field('zagolovok');
											?>
												<span class="text-accent"><?php echo cgc_if($slide_title['slide-title-bold'], "Проект дома") ?> </span><br>
												<span><?php echo cgc_if($slide_title['slide-title'],  $select_home_title) ?></span>
											</h1>
										<p class="info-block__description" style="max-width: 75rem"><?php echo cgc_if(get_sub_field('slide-description'), $select_home_features); ?></p>
										<div class="info-block__buttons">
											<a class="btn-primary" data-custom-open="modal-1" href="#"><?php echo cgc_if(get_sub_field('slide-button-1'), "Заказать проект"); ?></a>
											<a class="btn-secondary btn-secondary--icon icon-arrow-right" 
												href="<?php echo cgc_if(get_sub_field('slide-button-2')['slide-button-2-link'], get_term_link( 'possible', 'type' )); ?>">
												<?php echo cgc_if(get_sub_field('slide-button-2')['slide-button-2-name'], "Посмотреть проект"); ?>
											</a>
										</div>
										<?php
											$feature = get_sub_field('features')[0]['cells'];
										?>

										<?php if (get_sub_field('slide-switcher-feature')) :?>
											<div class="info-block__features">
												<div class="features features">
													<?php if ($feature) :?>
														<div class="features-row"> 
															<?php foreach($feature as $key => $value) : ?>
																<div class="features-el">
																	<h4><?php echo $value['cell_name'] ?></h4>
																	<p><?php echo $value['cell_description'] ?></p>
																</div>
															<?php endforeach; ?>
														</div>
													<?php elseif ($select_home) : ?>
														<div class="features-row"> 
															<div class="features-el">
																<h4><?php echo $select_home_total_area; ?> м<sup>2</sup></h4>
																<p>Общая площадь</p>
															</div>
															<div class="features-el ">
																<h4><?php echo $select_home_floors; ?></h4>
																<p>Количество этажей</p>
															</div>
															<div class="features-el">
																<h4><?php echo $select_home_rooms; ?></h4>
																<p>Количество комнат</p>
															</div>
															<div class="features-el">
																<h4><?php echo $select_home_bathrooms; ?></h4>
																<p>Количество сан.узлов</p>
															</div>
														</div>
													<?php endif; ?>
												</div>
											</div>
										<?php endif; ?>

									</div>
								</div>
							</section>
						</div>
					<?php endwhile; ?>
				<?php else : ?>
					<div class="swiper-slide">
						<section class="main"></section>
					</div>
				<?php endif; ?>

			</div>
		</div>

		<div class="swiper slider-thumbs gs_reveal">
		<div class="swiper-wrapper">
			<?php if( have_rows('main-slider') ): ?>
				<?php while( have_rows('main-slider') ): the_row(); ?>
					<div class="swiper-slide"></div>
				<?php endwhile; ?>
			<?php endif; ?>
		</div>
		<div class="swiper-buttons">
			<div class="swiper-button-next"></div>
			<div class="swiper-button-prev"></div>
		</div>
		<div class="swiper-scrollbar"></div>
		<div class="swiper-pagination"></div>
		<button class="o-play-btn"><i class="o-play-btn__icon">
			<div class="o-play-btn__mask"></div></i></button>
		</div>
	</div>

	<section class="about-company container gs_reveal">
		<div class="about-company__title gs_reveal">
			<h2><span class="text-accent">Информация</span><br> о компании</h2>
		</div>
		<div class="about-company__description gs_reveal">
			<h2>	Информация <br><span class="text-accent">о компании</span></h2>
			<?php echo get_field('info_description', 117); ?>
			<div class="about-company__button">
				<a class="btn-primary btn-primary--outline btn-primary--icon icon-arrow-right" href="<?php echo get_field('info_link', 117); ?>">
					<?php echo get_field('info_button', 117); ?>
				</a>
			</div>
		</div>
	</section>





	<?php get_template_part( 'template-parts/slider-cameras' ); ?>



	<?php get_template_part( 'template-parts/service' ); ?>

	<section class="benefit">
		<div class="container">
		<div class="benefit__title"><?php echo get_field('advantage_title', 229);?></div>
		<div class="benefit__description">
			<p><?php echo get_field('advantage_description', 229);?></p>
			<div class="mark-items">			
				<?php if( have_rows('advantage_info', 229) ): ?>
					<?php while( have_rows('advantage_info', 229) ) : the_row(); ?>
						<div class="mark-items__item">
							<p><?php echo $advantage_value = get_sub_field('advantage_info-value', 229);?></p>
							<p><?php echo $advantage_text = get_sub_field('advantage_info-text', 229); ?></p>
						</div>
					<?php endwhile;?>
				<?php	else : ?>
					<p>Спика нету</p>
				<?php endif; ?>
			</div>
		</div>
		<div class="benefit__statistics"></div>
		</div>
	</section>

	<?php get_template_part( 'template-parts/slider-projects' ); ?> 
	<?php get_template_part( 'template-parts/contact' ); ?>

<?php get_footer(); ?>
