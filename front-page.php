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
?>
   
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
?>



<div class="modal micromodal-slide" id="modal-1" aria-hidden="true">
  <div class="modal__overlay" tabindex="-1" data-custom-close="modal-1">
    <div class="modal__container" role="dialog" aria-modal="true" aria-labelledby="modal-1-title">
      <header class="modal__header">
        <h2 class="modal__title" id="modal-1-title">
					Заказать проект
        </h2>
				<!-- <p class="modal__description">
					
				</p> -->
        <button class="modal__close" aria-label="Close modal" data-custom-close="modal-1"></button>
      </header>
      <main class="modal__content" id="modal-1-content">
        <p>
				Оставь заявку и мы перезвоним в течении 15 минут
        </p>
				<?php echo do_shortcode( '[contact-form-7 id="441" title="Контактная форма 1"]' ); ?>
      </main>
      <!-- <footer class="modal__footer">
        <button data-custom-close="modal-1">close</button>
      </footer> -->
    </div>
  </div>
</div>


<button data-custom-open="modal-1" class="myButton">Clic Clic</button>

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



	<div class="main-page">
		<header class="header">
			<div class="container">
				<?php get_template_part( 'template-parts/nav' ); ?>
			</div>
		</header>
		<div class="slider-header">
			<!-- Additional required wrapper-->
			<div class="swiper-wrapper">
				<?php if( have_rows('main-slider') ) : ?>
					<?php while( have_rows('main-slider') ) : the_row(); 
						$image = get_sub_field('fon');
					?>
						<div class="swiper-slide">
							<section class="main" style="background: url(<?php echo $image['url'] ?>); background-size:cover;">
								<div class="bg-wrapper"></div>
								<div class="container">
									<div class="info-block gs_reveal gs_reveal_fromLeft">
									<?php if (get_sub_field('slide-switcher-tag')) :?>
										<div class="info-block__tag">
											<div class="tag"><?php the_sub_field('slide-tag'); ?></div>
										</div>
									<?php endif; ?>
										<div class="info-block__title" >
											<?php $slide_title = get_sub_field('zagolovok');?>
										<span class="text-accent"><?php echo $slide_title['slide-title-bold']; ?></span><br>
										<span><?php echo $slide_title['slide-title']; ?></span>
											
											<!-- <span class="text-accent">Получи подарок</span><br>
											<span>при заказе до 6 июля</span> -->
										</div>
										<p class="info-block__description" style="max-width: 75rem"><?php the_sub_field('slide-description'); ?></p>
										<div class="info-block__buttons">
											<a class="btn-primary btn-primary--icon icon-gift" href="#"><?php the_sub_field('slide-button-1'); ?></a>
											<a class="btn-secondary btn-secondary--icon icon-arrow-right" href="catalog.html"><?php the_sub_field('slide-button-2'); ?></a>
										</div>
										
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
	
	<section class="about-company gs_reveal">
		<div class="about-company__title gs_reveal">
			<h2><span class="text-accent">Информация</span><br> о компании</h2>
		</div>
		<p></p>
		<div class="about-company__description gs_reveal">
		<h2>	Информация <br><span class="text-accent">о компании</span></h2>
		<p>Залогом успеха нашей компании является <span class="text-accent">строгая последовательность</span>	 выполнения строительных работ. Благодаря обширному опыту, мы разработали план, по которому осуществляем все процессы подготовки, проектирования и реализации. За годы деятельности наши клиенты не раз проверили его эффективность на практике.</p>
		<p>Мы неустанно продолжаем совершенствовать наш процесс, чтобы идти в ногу со временем и даже опережать его.</p>
		<div class="about-company__button"><a class="btn-primary btn-primary--outline btn-primary--icon icon-arrow-right" href="about.html">Прочитать полностью</a></div>
		</div>
	</section>

	<?php get_template_part( 'template-parts/service' ); ?>

	<section class="benefit">
		<div class="container">
		<div class="benefit__title">Наши <br><span class="text-accent">преимущества</span></div>
		<div class="benefit__description">
			<p>Приятно, граждане, наблюдать, как элементы политического процесса своевременно верифицированы. Банальные, но</p>
			<div class="mark-items">
			<div class="mark-items__item">
				<p>10</p>
				<p>Лет успешно работаем</p>
			</div>
			<div class="mark-items__item">
				<p>253</p>
				<p>Выполненых проекта</p>
			</div>
			<div class="mark-items__item">
				<p>43</p>
				<p>Как уже неоднократно</p>
			</div>
			<div class="mark-items__item">
				<p>94</p>
				<p>Предварительные выводы</p>
			</div>
			</div>
		</div>
		<div class="benefit__statistics"></div>
		</div>
	</section>

	<?php get_template_part( 'template-parts/slider-projects' ); ?>
	<?php get_template_part( 'template-parts/contact' ); ?>

<?php get_footer(); ?>
