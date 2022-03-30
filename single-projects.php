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

<?php get_template_part( 'template-parts/modal-camera' ); ?>

<?php 
	$stock = get_field('stock'); 
	$content = trim($stock->post_content);
	$text = "<p>Это акция существует, но пока в ней нету текста, за помощью обратитесь к администрации сайта</p>";

	$obj_sale_description = get_field('obj_sale_description');
?>
<?php get_template_part( 'template-parts/modal' ); ?>
<!-- Слайдер -->
	<section class="project-header">
		<div class="container">
			<div class="project-header__title"> 
				<h1>Дом <span class="text-accent"><?= the_title();?></span></h1>
				<div class="project-header__square">
					<a class="square" href="#"><i class="icon-icon1"></i></a>
					<a class="btn-primary btn-primary--outline btn-primary--icon icon-icon1" href="#" id="plan">Планировка</a></div>
			</div>
			<div class="project-header__tags mh">
			<?php if (!empty($obj_sale_description)) : ?>
				<span class="tag tag_solid mrib"> Обьект в продаже</span>
			<?php endif ?>
			<?php if (!empty($stock)) : ?>
				<span class="tag tag_primary">Спецпредложение</span>
			<?php endif ?>
			</div>
			<div class="project-header__slider"> 
				<div id="planning" >
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
		</div>
	</section>
	<!-- Информация и харакктеристики -->
	<section class="project-content">
		<div class="container">
			<?php if ( (!empty(get_field('info_time'))) || (!empty(get_field('info_place'))) || (!empty(get_field('camers')))): ?>
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
								
								<?php if (!empty(get_field('camers'))) : ?>
									<div class="project-content__info-button">
										<a class="btn-live" data-custom-open="modal-2" href="#">live Камера</a>
									</div>
								<?php endif; ?>
					
							</div>
						</div>
					</div>
				</div>
			<?php endif; ?>
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
		</div>
	</section>

	<!-- Акция и обьект в продаже -->
	<?php if ( (!empty($stock)) || (!empty($obj_sale_description)) ) : ?>
		<section class="project-content">
			<div class="container">
				<div class="project-content__wrapper">
					<div class="project-content__stock"> 
		
						<h2>Доступен<span class="text-accent"> к заказу</span></h2>
		
						<?php if (!empty(	$stock)) : ?>
							<div class="project-content__stock-text"> 
								<h4 style="margin: 1.6rem 0"><span class="">Спецпредложение</span></h4>
								<?php echo strlen($content) != 0 ? $content : $text; ?>
							</div>
						<?php endif ?>
							


						<?php  if( has_term( ['current', 'implemented'], 'type' ) ) : ?>
							<?php if (!empty(	$obj_sale_description)) : ?>
								<div class="project-content__stock-text  bg-greay"> 
									<h4 style="margin: 1.6rem 0"><span class="">Об объекте</span></h4>
									<?php echo $obj_sale_description?>
									<p style="margin-top: 4rem"><a href="#" data-custom-open="modal-1" class="btn-secondary">Узнать больше</a></p>
								</div>
							<?php endif ?>
						<?php endif ?>
						
						<?php  if( has_term( 'possible', 'type' ) ) : ?>
							<?php if (!empty(	$obj_sale_description)) : ?>
								<div class="project-content__stock-text  bg-greay"> 
									<h4 style="margin: 1.6rem 0"><span class="">Проект <?php echo the_title()?></span></h4>
									<?php echo $obj_sale_description?>
									<p style="margin-top: 4rem"><a href="#" data-custom-open="modal-1" class="btn-secondary">Заказать проект</a></p>
								</div>
							<?php endif ?>
						<?php endif ?>
						
					</div>
				</div>
			</div>
		</section>
	<?php endif ?>

	<!-- Подпишись на проект -->
	<!-- <?php  if( has_term( 'current', 'type' ) ) :?>
		<div class="questions questions--subscribe">
			<div class="container">
				<?php dynamic_sidebar('sidebar-2'); ?>
			</div>
		</div> -->

		<div class="questions questions--subscribe">
			<div class="container">
				<div class="questions__wrapper">
					<div class="questions__title">Подпишись 
						<div class="text-accent">На проект</div>
					</div>
					<div class="fc">
					<div class="questions__description">Укажите адрес электронной почты, на который вы хотели бы  получать уведомления об изменениях на донном объекте</div>
						<div class="form__field">
							<div class="inputbox">
							<span class="wpcf7-form-control-wrap text-phone">
								<input type="text" required="required" name="text-phone" value="" size="40" class="wpcf7-form-control wpcf7-text wpcf7-validates-as-required" id="input20" aria-required="true" aria-invalid="false">
								<label for="input20">Email</label>
								<span class="underline"></span>
							</span>
							</div>
						</div>
					</div>
					<div></div>
					<div class="questions__buttons"><a class="btn-primary">Подписаться</a></div>
				</div>
			</div>
		</div>

	<?php endif; ?>

	<!-- Аккардион -->
	<?php  if( has_term( ['current', 'implemented'], 'type' ) ) :?>
		
			<section class="service container">
				<div class="service__title">Перечень <span class="text-accent">услуг</span></div>
				<div class="service__description">Прежде всего, современная методология разработки прекрасно подходит для реализации распределения.</div>
				<div class="service__accordion">
					<dl class="badger-accordion js-badger-accordion">
						<?php if( have_rows('services_tabs') ): $i = 0; ?>
							<?php while( have_rows('services_tabs') ): 
								the_row(); 
								$i++;
								$photos = get_sub_field('services_tab_photo');
								$videos = get_sub_field('services_tab_video');
								// echo '<pre>';
								// print_r($videos);
								// echo '</pre>';
							?>
							<!-- <?php	get_template_part( 'template-parts/modal-accordion', null, [$photos, $i]);	?>  -->
								<dt class="badger-accordion__header">
									<a class="badger-accordion__trigger js-badger-accordion-header">
										<div class="badger-accordion__trigger-title">
											<?php the_sub_field('services_tab_title'); ?>
										</div>
										<div class="badger-accordion__trigger-icon">
											<i class="icon-plus"></i>
										</div>
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
													<input id="mini_galary-<?php echo $i;?>" type="checkbox">
													<label for="mini_galary-<?php echo $i;?>">
														<div class="can-toggle__switch" data-checked="Видео" data-unchecked="Фото"> </div>
													</label>
												</div>
											</div>
											<div class="accordion__gallery">
												<div class="slider slider-<?php echo $i;?>">
													<div id="photo" class="slider-gallery-min">
														<div class="swiper-wrapper">
															<?php if ( is_array( $photos ) ) : ?>
																<?php foreach ($photos as $index => $photo) : ?>
																	<div class="swiper-slide"> 
																		<div class="card-gallery" data-custom-open="modal-accordion-<?php echo $index?>">
																			<div class="card-gallery__img">
																				<img src="<?php echo $photo['url']?>" alt="">
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
													<div id="video" class="slider-gallery-min slider-hidden">
														<div class="swiper-wrapper">
															<?php if ( is_array( $videos ) ) : ?>
																<?php foreach ($videos as $video) : ?>
																	<div class="swiper-slide"> 
																		<div class="card-gallery">
																			<div class="card-gallery__img" data-type="video">
																				<img src="<?php echo $video['services_tab_video-cover']['url']?>" data-video="<?php echo $video['services_tab_video-file']['url'];?>" alt="">
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
											<div class="accordion__buttons">
												<a href="<?php echo get_post_type_archive_link( 'services' ); ?>" class="btn-primary btn-primary--outline btn-primary--icon icon-arrow-right">Перейти к услугам</a>
											</div>
										</div>
									</div>
								</dd>
								<?php endwhile; ?>
						<?php endif; ?>
					</dl>
				</div>
			</section>

	<?php endif; ?>

	<!-- Задай вопрос  -->
	<?php  if( has_term( 'possible', 'type' ) ) :?>	
		<?php get_template_part( 'template-parts/question'); ?>
	<?php endif; ?>

	<!-- Понравился проект  -->
	<?php  if( has_term( ['current', 'implemented'], 'type' ) ) :?>
		<section class="project-content">
			<div class="container">
				<div class="project-content__wrapper">
					<div class="post">
						<div class="post__title"> 
							<h2><span class="text-accent">Понравился проект?</span></h2>
						</div>
						<div class="post__content">
							<p>Если вам понравился проект вы можете перейти в каталог проектов и ознакомиться с проектом более детально, если у вас останутся вопросы мы с удовольсвтем ответим на них и проконсультируем вас. </p>
							<p class="mh">
								<a href="<?php echo get_term_link( 'possible', 'type' ); ?>" class="btn-primary btn-primary--outline btn-primary--icon icon-arrow-right mrib">Перейти в каталог</a>
								<a href="#"  data-custom-open="modal-1" class="btn-primary">Cвязаться с менеджером</a>
							</p>
						</div>
					</div>
				</div>
			</div>
		</section>
	<?php endif; ?>

	<?php 
		$theme = 'dark';
		get_template_part( 'template-parts/contact', null, $theme ); 	
	?>

	<script>
		const generationModal = (index, url, type) => {
			let divRoot = document.createElement('div');
			const isVideo = (type) => {
				if (!type) {
					return `<img src="${url}" style="width: 100%" alt="">`;
				} else {
					return `
						<video id='video' controls="controls" preload='none' width="600" >
							<source id='mp4' src="${type}" type='video/mp4' />
						</video>`;
				}
			}
			let modalHtmlTemplate = 
			`<div class="modal modal--s micromodal-slide" id="modal-accord-${index}" aria-hidden="true">
				<div class="modal__overlay" tabindex="-1" data-custom-close="modal-accord-${index}">
					<div class="modal__container" role="dialog" aria-modal="true" aria-labelledby="modal-title">
						<header class="modal__header">
							<button class="modal__close " aria-label="Close modal" data-custom-close="modal-accord-${index}"></button>
						</header>
						<main class="modal__content  modal__content--form" id="modal-content">
							${isVideo(type)}
						</main>
					</div>
				</div>
			</div>`;

			let div = document.createElement('div');
			div.insertAdjacentHTML('afterbegin', modalHtmlTemplate);
			divRoot.append(div);
			document.body.append(divRoot);
		}

		const $cardsGallery = document.querySelectorAll('.card-gallery');
		const cardsGallery = [...$cardsGallery];
		window.cardsGallery = cardsGallery;
		for (const [index, cardGallery] of cardsGallery.entries()) {

			let img = cardGallery.firstElementChild.children[0];
			let  data = img.dataset;
			console.log(data.url);
			generationModal(index, img.src, data.url);
			cardGallery.addEventListener('click', (e) => {
				e.preventDefault();
				MicroModal.show(`modal-accord-${index}`, {
					closeTrigger: 'data-custom-close',
				});
			});
		}



	</script>

<?php get_footer(); ?>