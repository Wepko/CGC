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



    <section class="project-header">
      <div class="container">
        <div class="project-header__title"> 
          <h1>Дом <span class="text-accent"><?= the_title();?></span></h1>
          <div class="project-header__square">
              <a class="square" href="#"><i class="icon-icon1"></i></a>
              <a class="btn-primary btn-primary--outline btn-primary--icon icon-icon1" href="#" id="plan">Планировка</a></div>
        </div>
      </div>
      <div class="project-header__slider"> 

				<div id="planning" class="slider-hidden">
					<div class="swiper slider-project-single">
					

						<?php 
							$images_pl = get_field('pl_photo_gallery');
							$images_ex = get_field('ex_photo_gallery');
							//print_r($images_ex);
							$size = 'full'; // (thumbnail, medium, large, full или произвольный размер)

							if( $images_pl ): ?>
									<div  class="swiper-wrapper">
											<?php foreach( $images_pl as $image ): ?>
												<div class="swiper-slide"> 
													<?php echo wp_get_attachment_image( $image['ID'], $size ); ?>
												</div>
														
											<?php endforeach; ?>
										</div>
							<?php endif; ?>

						<div class="swiper-button-next"></div>
						<div class="swiper-button-prev"></div>
					</div>
				</div>	
				<div id="exterior" >
					<div class="swiper slider-project-single">
					 <?php 
						 $images_ex = get_field('ex_photo_gallery');
						 //print_r($images_ex);
						 $size = 'full'; // (thumbnail, medium, large, full или произвольный размер)
	
						 if( $images_ex ): ?>
									<div  class="swiper-wrapper">
										 <?php foreach( $images_ex as $image ): ?>
											 <div class="swiper-slide"> 
												 <?php echo wp_get_attachment_image( $image['ID'], $size ); ?>
											 </div>
													 
										 <?php endforeach; ?>
									 </div>
						 <?php endif; ?>
	
	
	
					 <div class="swiper-button-next"></div>
					 <div class="swiper-button-prev"></div>
				 </div>
				</div>

      </div>
    </section>

    <section class="project-content">
      <div class="container">
				<div class="project-content__wrapper">
					
					<?php 
						$stock = get_field('stock'); 
						$content = trim($stock->post_content);
						$text = "<p>Это акция существует, но пока в ней нету текста, за помощью обратитесь к администрации сайта</p>";
					?>
						<div class="project-content__stock"> 

							<h2>Объект <span class="text-accent">в продаже</span></h2>

							<?php if (!empty(	$stock)) : ?>
								<div class="project-content__stock-text"> 
									<span class="tag tag--light tag--icon-left icon-gift">Спецпредложение</span>
									<?php echo strlen($content) != 0 ? $content : $text; ?>
								</div>
							<?php endif ?>

							<div class="project-content__stock-text bg-greay"> 
								<p>Описание темы</p>
							</div>
							
						</div>
				</div>
        <div class="project-content__wrapper">
          <div class="post">
            <div class="post__title"> 
              <h2> <span class="text-accent">Информация </span></h2>
            </div>
            <div class="post__content">
              <div class="project-content__info">
								<?php if (!empty(get_field('info_place'))) : ?>
									<div class="project-content__info-block icon-adress-bold">
										<h3>Место реализации</h3>
										<p><?php echo the_field('info_place')?></p>
									</div>
								<?php endif; ?>
								<?php if (!empty(get_field('info_time'))) : ?>
                	<div class="project-content__info-block icon-time">
                 		<h3>Время реализации</h3>
                  	<p><?php echo the_field('info_time')?> месяцев</p>
									</div>
								<?php endif; ?>
          
									<div class="project-content__info-button">
										<a class="btn-live" href="">live Камера</a>
									</div>

              </div>
            </div>
          </div>
        </div>
        <div class="project-content__wrapper">
          <div class="post">
            <div class="post__title"> 
              <h2> <span class="text-accent">Характеристики </span><span></span></h2>
            </div>
            <div class="post__content">
              <div class="project-content__description"> 
                <div class="project-content__description-text">
                    <?= the_field('content');?>
                </div>
                <div class="project-content_description-feature">
                  <div class="features features--light">
                    <div class="features-row"> 
                      <div class="features-el">
                        <h4><?the_field('total_area')?> м<sup>2</sup></h4>
                        <p>Общая площадь</p>
                      </div>
                      <div class="features-el ">
                        <h4><?the_field('floors')?></h4>
                        <p>Этажа</p>
                      </div>
                      <div class="features-el">
                        <h4><?the_field('rooms')?></h4>
                        <p>Комнат</p>
                      </div>
                      <div class="features-el">
                        <h4><?the_field('bedrooms')?></h4>
                        <p>Спален</p>
                      </div>
                    </div>
                    <div class="features-row"> 
                      <div class="features-el">
                        <h4><?the_field('bathrooms')?></h4>
                        <p>Количество с/у</p>
                      </div>
                      <div class="features-el">
                        <h4><?the_field('height')?>м</h4>
                        <p>Высота</p>
                      </div>
                      <div class="features-el">
												<?php 
													$width = floatval(get_field('min_width'));
													$length = floatval(get_field('min_length'));

													$coefficient_witdth = floatval(get_field('coefficient_witdth'));
													$coefficient_length = floatval(get_field('coefficient_length'));
													$sumW =	$width +	$coefficient_witdth;
													$sumH = $length + $coefficient_length;
												?>
                        <h4><?php echo $sumW ." " . "x". " " . $sumH?> м<sup>2</sup></h4>
                        <p>Минимальные размеры участка</p>
                      </div>
                      
                    <div class="features-row"> 
                      <div class="features-el">
                        <h4>Гараж</h4>
                        <p><?the_field('garage')?></p>
                      </div>
                      <div class="features-el ">
                        <h4>Особенности</h4>
                        <p><?the_field('features')?></p>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>

				<?php  if( has_term( ['current', 'implemented'], 'type' ) ) :?>
					<div class="project-content__wrapper">
						<div class="post">
							<div class="post__title"> 
								<h2> <span class="text-accent">Понравился проект?</span></h2>
							</div>
							<div class="post__content">
								<p>Если вам понравился проект вы можете перейти в каталог проектов и ознакомиться с проектом более детально, если у вас останутся вопросы мы с удовольсвтем ответим на них и проконсультируем вас. </p>
									
							</div>
						</div>
					</div>
				<?php endif; ?>

      </div>
    </section>

		<?php  if( has_term( 'current', 'type' ) ) :?>
			<div class="questions">
				<div class="container">
					<div class="questions__wrapper">
						<div class="questions__title">Остались 
							<div class="text-accent">вопросы?</div>
						</div>
						<div class="questions__description">Оставьте свой номер телефона и мы перезвоним вам в ближайшее время</div>
						<div class="questions__buttons"><a class="btn-primary">Заказать звонок</a></div>
					</div>
				</div>
			</div>
		<?php endif; ?>

    <?php  if( has_term( ['current', 'implemented'], 'type' ) ) :?>
			<section class="service container">
				<div class="service__title gs_reveal gs_reveal_fromLeft">Перечень <span class="text-accent">услуг</span></div>
				<div class="service__description gs_reveal gs_reveal_fromLeft">Прежде всего, современная методология разработки прекрасно подходит для реализации распределения.</div>
				<div class="service__accordion gs_reveal gs_reveal_fromRight">
					<dl class="badger-accordion js-badger-accordion">
						<?php if( have_rows('services_tab_1') ): ?>
							<dt class="badger-accordion__header">
								<a class="badger-accordion__trigger js-badger-accordion-header">
									<div class="badger-accordion__trigger-title">Сбор исходно-разрешительной документации</div>
									<div class="badger-accordion__trigger-icon"><i class="icon-plus"></i></div>
								</a>
							</dt>
							<dd class="badger-accordion__panel js-badger-accordion-panel">
								<div class="badger-accordion__panel-inner js-badger-accordion-panel-inner">
									<?php while( have_rows('services_tab_1') ): 
										the_row(); 
										$photos = get_sub_field('services_tab_photo');
									?>
										<dl class="badger-accordion js-badger-accordion">
											<dt class="badger-accordion__header">
												<a class="badger-accordion__trigger js-badger-accordion-header">
													<div class="badger-accordion__trigger-title">
														<?php the_sub_field('services_tab_title'); ?>
													</div>
													<div class="badger-accordion__trigger-icon"><i class="icon-plus"></i></div>
												</a>
											</dt>
											<dd class="badger-accordion__panel js-badger-accordion-panel">
												<div class="badger-accordion__panel-inner js-badger-accordion-panel-inner">
													<div class="accordion">
														<div class="accordion__description"> 
															<p><?php the_sub_field('services_tab_description'); ?></p>
														</div>
														<div class="accordion__switcher">
															<div class="can-toggle demo-rebrand-1 can-toggle--size-large">
																<input id="mini_galary" type="checkbox">
																<label for="mini_galary">
																		<div class="can-toggle__switch" data-checked="Видео" data-unchecked="Фото"> </div>
																</label>
															</div>
														</div>
														<div class="accordion__gallery">
															<div class="slider-gallery-min">
																<div class="swiper-wrapper">
																	<?php if ( is_array( $photos ) ) : ?>
																		<?php foreach ($photos as $photo) : ?>
																			<div class="swiper-slide"> 
																				<div class="card-gallery">
																					<div class="card-gallery__img"><img src="<?php echo $photo['url']?>" alt=""></div>
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
														<div class="accordion__buttons">
															<a class="btn-primary">Узнать больше</a>
															<a class="btn-primary btn-primary--outline btn-primary--icon icon-arrow-right">Готовые проекты</a>
														</div>
													</div>
												</div>
											</dd>
										</dl>
									<?php endwhile; ?>
								</div>
							</dd>
						<?php endif; ?>

						<?php if( have_rows('services_tab_2') ): ?>
							<dt class="badger-accordion__header">
								<a class="badger-accordion__trigger js-badger-accordion-header">
									<div class="badger-accordion__trigger-title">Проектирование</div>
									<div class="badger-accordion__trigger-icon"><i class="icon-plus"></i></div>
								</a>
							</dt>
							<dd class="badger-accordion__panel js-badger-accordion-panel">
								<div class="badger-accordion__panel-inner js-badger-accordion-panel-inner">
									<?php while( have_rows('services_tab_2') ): 
										the_row(); 
										$photos = get_sub_field('services_tab_photo');
									?>
										<dl class="badger-accordion js-badger-accordion">
											<dt class="badger-accordion__header">
												<a class="badger-accordion__trigger js-badger-accordion-header">
													<div class="badger-accordion__trigger-title">
														<?php the_sub_field('services_tab_title'); ?>
													</div>
													<div class="badger-accordion__trigger-icon"><i class="icon-plus"></i></div>
												</a>
											</dt>
											<dd class="badger-accordion__panel js-badger-accordion-panel">
												<div class="badger-accordion__panel-inner js-badger-accordion-panel-inner">
													<div class="accordion">
														<div class="accordion__description"> 
															<p><?php the_sub_field('services_tab_description'); ?></p>
														</div>
														<div class="accordion__switcher">
															<div class="can-toggle demo-rebrand-1 can-toggle--size-large">
																<input id="mini_galary" type="checkbox">
																<label for="mini_galary">
																		<div class="can-toggle__switch" data-checked="Видео" data-unchecked="Фото"> </div>
																</label>
															</div>
														</div>
														<div class="accordion__gallery">
															<div class="slider-gallery-min">
																<div class="swiper-wrapper">
																	<?php if ( is_array( $photos ) ) : ?>
																		<?php foreach ($photos as $photo) : ?>
																			<div class="swiper-slide"> 
																				<div class="card-gallery">
																					<div class="card-gallery__img"><img src="<?php echo $photo['url']?>" alt=""></div>
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
														<div class="accordion__buttons">
															<a class="btn-primary">Узнать больше</a>
															<a class="btn-primary btn-primary--outline btn-primary--icon icon-arrow-right">Готовые проекты</a>
														</div>
													</div>
												</div>
											</dd>
										</dl>
									<?php endwhile; ?>
								</div>
							</dd>
						<?php endif; ?>

						<?php if( have_rows('services_tab_3') ): ?>
							<dt class="badger-accordion__header">
								<a class="badger-accordion__trigger js-badger-accordion-header">
									<div class="badger-accordion__trigger-title">Строительство</div>
									<div class="badger-accordion__trigger-icon"><i class="icon-plus"></i></div>
								</a>
							</dt>
							<dd class="badger-accordion__panel js-badger-accordion-panel">
								<div class="badger-accordion__panel-inner js-badger-accordion-panel-inner">
									<?php while( have_rows('services_tab_3') ): 
										the_row(); 
										$photos = get_sub_field('services_tab_photo');
									?>
										<dl class="badger-accordion js-badger-accordion">
											<dt class="badger-accordion__header">
												<a class="badger-accordion__trigger js-badger-accordion-header">
													<div class="badger-accordion__trigger-title">
														<?php the_sub_field('services_tab_title'); ?>
													</div>
													<div class="badger-accordion__trigger-icon"><i class="icon-plus"></i></div>
												</a>
											</dt>
											<dd class="badger-accordion__panel js-badger-accordion-panel">
												<div class="badger-accordion__panel-inner js-badger-accordion-panel-inner">
													<div class="accordion">
														<div class="accordion__description"> 
															<p><?php the_sub_field('services_tab_description'); ?></p>
														</div>
														<div class="accordion__switcher">
															<div class="can-toggle demo-rebrand-1 can-toggle--size-large">
																<input id="mini_galary" type="checkbox">
																<label for="mini_galary">
																		<div class="can-toggle__switch" data-checked="Видео" data-unchecked="Фото"> </div>
																</label>
															</div>
														</div>
														<div class="accordion__gallery">
															<div class="slider-gallery-min">
																<div class="swiper-wrapper">
																	<?php if ( is_array( $photos ) ) : ?>
																		<?php foreach ($photos as $photo) : ?>
																			<div class="swiper-slide"> 
																				<div class="card-gallery">
																					<div class="card-gallery__img"><img src="<?php echo $photo['url']?>" alt=""></div>
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
														<div class="accordion__buttons">
															<a class="btn-primary">Узнать больше</a>
															<a class="btn-primary btn-primary--outline btn-primary--icon icon-arrow-right">Готовые проекты</a>
														</div>
													</div>
												</div>
											</dd>
										</dl>
									<?php endwhile; ?>
								</div>
							</dd>
						<?php endif; ?>

						<?php if( have_rows('services_tab_4') ): ?>
							<dt class="badger-accordion__header">
								<a class="badger-accordion__trigger js-badger-accordion-header">
									<div class="badger-accordion__trigger-title">Сопровождение</div>
									<div class="badger-accordion__trigger-icon">
										<i class="icon-plus"></i>
									</div>
								</a>
							</dt>
							<dd class="badger-accordion__panel js-badger-accordion-panel">
								<div class="badger-accordion__panel-inner js-badger-accordion-panel-inner">
									<?php while( have_rows('services_tab_4') ): 
										the_row(); 
										$photos = get_sub_field('services_tab_photo');
									?>
										<dl class="badger-accordion js-badger-accordion">
											<dt class="badger-accordion__header">
												<a class="badger-accordion__trigger js-badger-accordion-header">
													<div class="badger-accordion__trigger-title">
														<?php the_sub_field('services_tab_title'); ?>
													</div>
													<div class="badger-accordion__trigger-icon"><i class="icon-plus"></i></div>
												</a>
											</dt>
											<dd class="badger-accordion__panel js-badger-accordion-panel">
												<div class="badger-accordion__panel-inner js-badger-accordion-panel-inner">
													<div class="accordion">
														<div class="accordion__description"> 
															<p><?php the_sub_field('services_tab_description'); ?></p>
														</div>
														<div class="accordion__switcher">
															<div class="can-toggle demo-rebrand-1 can-toggle--size-large">
																<input id="mini_galary" type="checkbox">
																<label for="mini_galary">
																		<div class="can-toggle__switch" data-checked="Видео" data-unchecked="Фото"> </div>
																</label>
															</div>
														</div>
														<div class="accordion__gallery">
															<div class="slider-gallery-min">
																<div class="swiper-wrapper">
																	<?php if ( is_array( $photos ) ) : ?>
																		<?php foreach ($photos as $photo) : ?>
																			<div class="swiper-slide"> 
																				<div class="card-gallery">
																					<div class="card-gallery__img"><img src="<?php echo $photo['url']?>" alt=""></div>
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
														<div class="accordion__buttons">
															<a class="btn-primary">Узнать больше</a>
															<a class="btn-primary btn-primary--outline btn-primary--icon icon-arrow-right">Готовые проекты</a>
														</div>
													</div>
												</div>
											</dd>
										</dl>
									<?php endwhile; ?>
								</div>
							</dd>
						<?php endif; ?>
					</dl>
				</div>
			</section>
    <?php endif; ?>

		<?php  if( has_term( 'implemented', 'type' ) ) :?>
      <?php  get_template_part( 'template-parts/slider-projects' );?>
    <?php endif; ?>

		<?php get_template_part( 'template-parts/question'); ?>

		<?php 
			$theme = 'dark';
			get_template_part( 'template-parts/contact', null, $theme ); 	
		?>

<?php get_footer(); ?>