<?php get_header(); ?>
		<?php get_template_part( 'template-parts/modal' ); ?>
		<header class="header">
			<div class="container">
				<?php get_template_part( 'template-parts/nav' ); ?>
			</div>
		</header>

    <section class="service-header header-clear" style="background: url('<?php echo $bg_image['url']; ?>'); background-size:cover;">
      <div class="container">
        <div class="bg-service-header"> </div>
        <div class="service-header__wrapper">
          <div class="service-header__title">
						<span class="text-access <?php echo strlen(get_the_title()) > 30 ? "title-small" : "" ?>" >
						<?php echo get_the_title(); ?>
						</span></div>
          <div class="service-header__buttons">
						<a class="btn-primary"  data-custom-open="modal-1" href="#">Заказать услугу</a>
						<!-- <a class="btn-secondary btn-secondary--icon icon-arrow-right" href="#">Готовые проекты</a></div> -->
        </div>
      </div>
    </section>

    <section class="service-content">
      <div class="container">
        <div class="service-content__info">
          <div class="post">
            <div class="post__title"> 
              <h2> <span class="text-accent">Информация </span><span></span></h2>
            </div>
            <div class="post__content">
							<?php
							 $group1 = get_field('group1-service');
							 echo $group1['service-info'];
							?>
							<br>
							<?php if(  !empty($group1['service-select']) ): ?>
								<p class="bg-primary"><?php echo $group1['service-select'];?></p>
							<?php endif; ?>
            </div>
          </div>
        </div>
        <div class="service-content__services">
					<?php if( get_field('service_switch_1') ): ?>
						<div class="post">
							<div class="post__title"> 
								<h2> <span class="text-accent">Перечень </span><span>услуг</span></h2>
							</div>
							<div class="post__content">
								<div class="service-content__slider">

									<div class="slider slider--one-sided">
										<div class="slider__overflow">
											
											<div class="slider-service">
												<!-- Additional required wrapper-->
												<div class="swiper-wrapper">
													<!-- Slides-->
														<?php $service_slider = get_field('service-slider');?>

														<?php if ( is_array( $service_slider ) ) : ?>
															<?php foreach ($service_slider as $slide) : ?>
																<div class="swiper-slide"> 
																	<div class="card-service"> 
																		<div class="card-service__title"><?php echo $slide['service-slider-title']; ?></div>
																		<div class="card-service__description">
																			<p><?php echo $slide['service-slider-description']; ?></p>
																		</div>
																		<div class="card-service__button"><a class="btn-secondary btn-secondary--icon icon-arrow-right">Заказать услугу</a></div>
																	</div>
																</div>
															<?php endforeach; ?>
														<?php endif; ?>
												</div>
													
												<div class="slider__navigation">
													<div class="swiper-button-prev"></div>
													<div class="slider__scrollbar">
														<div class="swiper-scrollbar"></div>
													</div>
													<div class="swiper-button-next"></div>
												</div>
											</div>
										</div>
									</div>



								</div>
							</div>
						</div>
						<?php endif; ?>

					<?php if( get_field('service_switch_2') ): ?>
						<div class="service-content__gallery">
							<div class="service-content__gallery-title">Галерея</div>
							<div class="service-content__gallery-slider"> 
								<div class="slider slider--one-sided">
									<div class="slider__overflow">
										<div class="slider-gallery">

											<div class="swiper-wrapper">

												<?php $service_gallery = get_field('service-gallery');?>
												<?php if ( is_array( $service_gallery ) ) : ?>
													<?php foreach ($service_gallery as $slide) : ?>
														<div class="swiper-slide"> 
															<div class="card-gallery">
																<div class="card-gallery__img"> 
																	<img src="<?php echo $slide['sercice-gallery-img']['url']; ?>" alt="">
																</div>
																<div class="card-gallery__description">
																	<p><?php echo $slide['sercice-gallery-description']; ?></p>
																</div>
															</div>
														</div>
													<?php endforeach; ?>
												<?php endif; ?>


														
											</div>
											
											<div class="slider__navigation">
												<div class="swiper-button-prev"></div>
												<div class="slider__scrollbar">
													<div class="swiper-scrollbar"></div>
												</div>
												<div class="swiper-button-next"></div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					<?php endif; ?>
        </div>
      </div>
    </section>
		<?php get_template_part( 'template-parts/slider-projects' ); ?>

		<?php get_template_part( 'template-parts/question'); ?>

		<?php 
			$theme = 'dark';
			get_template_part( 'template-parts/contact', null, $theme ); 	
		?>


<?php get_footer(); ?>