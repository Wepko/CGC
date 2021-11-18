<?php get_header(); ?>

		<header class="header">
			<div class="container">
				<?php get_template_part( 'template-parts/nav' ); ?>
			</div>
		</header>
<!-- 
		<?php
		$bg_image = get_field('bg-services');

		if( !empty($bg_image) ): ?>

			<img src="<?php echo $bg_image['url']; ?>" alt="<?php echo $bg_image['alt']; ?>" />

<?php endif; ?> -->
    <section class="service-header header-clear" style="background: url('<?php echo $bg_image['url']; ?>'); background-size:cover;">
      <div class="container">
        <div class="bg-service-header"> </div>
        <div class="service-header__wrapper">
          <div class="service-header__title"><span class="text-access"><?php the_title(); ?></span></div>
          <div class="service-header__buttons">
						<a class="btn-primary" href="#">Узнайте больше</a>
						<a class="btn-secondary btn-secondary--icon icon-arrow-right" href=#">Готовые проекты</a></div>
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
							<p class="bg-primary"><?php echo $group1['service-select'];?></p>
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
										<div class="swiper-buttons">
											<div class="swiper-button-next"></div>
											<div class="swiper-button-prev"></div>
										</div>
										<div class="swiper-scrollbar"></div>
									</div>
								</div>
							</div>
						</div>
						<?php endif; ?>
					<?php if( get_field('service_switch_2') ): ?>
						<div class="service-content__gallery">
							<div class="service-content__gallery-title">Галерея</div>
							<div class="service-content__gallery-slider"> 
								<div class="slider-gallery">
									<!-- Additional required wrapper-->
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
									<div class="swiper-buttons">
										<div class="swiper-button-next"></div>
										<div class="swiper-button-prev"></div>
									</div>
									<div class="swiper-scrollbar"></div>
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