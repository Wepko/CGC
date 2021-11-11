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
				<?php get_template_directory( 'template-parts/nav' ); ?>
			</div>
			<p>hemde top bro</p>
		</header>
		<div class="slider-header">
			<!-- Additional required wrapper-->
			<div class="swiper-wrapper">
				<?php if( have_rows('main-slider') ): ?>
					<?php while( have_rows('main-slider') ): the_row(); 
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
	<section class="service container">
		<div class="service__title gs_reveal gs_reveal_fromLeft">Наши <span class="text-accent">услуги</span></div>
		<div class="service__description gs_reveal gs_reveal_fromLeft">Прежде всего, современная методология разработки прекрасно подходит для реализации распределения.</div>
		<div class="service__accordion gs_reveal gs_reveal_fromRight">
		<dl class="badger-accordion js-badger-accordion">
			<dt class="badger-accordion__header"><a class="badger-accordion__trigger js-badger-accordion-header">
				<div class="badger-accordion__trigger-title">Сбор исходно-разрешительной документации</div>
				<div class="badger-accordion__trigger-icon"><i class="icon-plus"></i></div></a></dt>
			<dd class="badger-accordion__panel js-badger-accordion-panel">
			<div class="badger-accordion__panel-inner js-badger-accordion-panel-inner">
				<p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Hic, recusandae!</p>
			</div>
			</dd>
			<dt class="badger-accordion__header"><a class="badger-accordion__trigger js-badger-accordion-header">
				<div class="badger-accordion__trigger-title">Проектирование</div>
				<div class="badger-accordion__trigger-icon"><i class="icon-plus"></i></div></a></dt>
			<dd class="badger-accordion__panel js-badger-accordion-panel">
			<div class="badger-accordion__panel-inner text-module js-badger-accordion-panel-inner"><a class="badger-accordion__panel-subitem" href="#">Архитектурное проектирование</a><a class="badger-accordion__panel-subitem" href="#">Проектирование зданий</a><a class="badger-accordion__panel-subitem" href="#">Проектирование инженерных коммуникаций</a><a class="badger-accordion__panel-subitem" href="#">Дизайн проектирование</a><a class="badger-accordion__panel-subitem" href="#">Ландшафтное проектирование</a></div>
			</dd>
			<dt class="badger-accordion__header"><a class="badger-accordion__trigger js-badger-accordion-header">
				<div class="badger-accordion__trigger-title">Строительство</div>
				<div class="badger-accordion__trigger-icon"><i class="icon-plus"></i></div></a></dt>
			<dd class="badger-accordion__panel js-badger-accordion-panel">
			<div class="badger-accordion__panel-inner text-module js-badger-accordion-panel-inner"><a class="badger-accordion__panel-subitem" href="#">Строительство объекта</a><a class="badger-accordion__panel-subitem" href="#">Внешняя отделка</a><a class="badger-accordion__panel-subitem" href="#">Внутренняя отделка</a><a class="badger-accordion__panel-subitem" href="#">Благоустройство территории</a></div>
			</dd>
			<dt class="badger-accordion__header"><a class="badger-accordion__trigger js-badger-accordion-header">
				<div class="badger-accordion__trigger-title">Сопровождение</div>
				<div class="badger-accordion__trigger-icon"><i class="icon-plus"></i></div></a></dt>
			<dd class="badger-accordion__panel js-badger-accordion-panel">
			<div class="badger-accordion__panel-inner text-module js-badger-accordion-panel-inner">
				<p>Although badgers are a solitary animal the young Hog Badger tends to be quite playful and social.  I would be careful playing with any animal that has extremely large claws.  Remember folks, it is all fun and games until someone loses an eye.</p>
				<p>Hog Badgers are omnivores and they feed on a variety of things from honey and fruit to insects and small mammals.</p>
				<p>A young / baby of a hog badger is called a 'kit'. The females are called 'sow' and males 'boar'. A hog badger group is called a 'cete, colony, set or company'.</p>
			</div>
			</dd>
		</dl>
		</div>
	</section>
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
	<?php include 'parts/slider-projects.php';?>
	<section class="contacts">
		<div class="container">
		<div class="contacts__wrapper">
			<div class="contacts__info">
			<div class="contacts__info-title text-accent">Контакты</div>
			<div class="contacts__info-description">Есть над чем задуматься: сторонники тоталитаризма в науке.</div>
			<div class="contacts__info-content">
				<p class="icon-email">email@company.com</p>
				<p class="icon-phone">8 800 000 00 00</p>
				<p class="icon-adress">ул. Герасима Курина, д. 10, корп. 2</p>
			</div>
			<div class="contacts__info-social">
				<div class="social"><a class="icon-facebook social__element" href="#"></a><a class="icon-twiter social__element" href="#"></a><a class="icon-instagram social__element" href="#"></a></div>
			</div>
			</div>
			<div class="contacts__form">
			<div class="contacts__form-title">Обратная <span class="text-accent">связь</span></div>
			<form class="form" action="#" method="POST">
				<div class="form__field">
				<div class="inputbox">
					<input id="input0" type="text" required=""/>
					<label for="input0">Ваше имя </label><span class="underline"></span>
				</div>
				</div>
				<div class="form__field">
				<div class="inputbox">
					<input id="input1" type="text" required=""/>
					<label for="input1">Телефон</label><span class="underline"></span>
				</div>
				</div>
				<div class="form__field">
				<div class="inputbox">
					<textarea id="input2" type="text" rows="3" required=""></textarea>
					<label for="input2">Сообщение</label><span class="underline"></span>
				</div>
				</div>
				<div class="form__field">
				<label class="checkbox path">
					<input type="checkbox"/>
					<svg viewBox="0 0 21 21">
					<path d="M5,10.75 L8.5,14.25 L19.4,2.3 C18.8333333,1.43333333 18.0333333,1 17,1 L4,1 C2.35,1 1,2.35 1,4 L1,17 C1,18.65 2.35,20 4,20 L17,20 C18.65,20 20,18.65 20,17 L20,7.99769186"></path>
					</svg><span id="ch1" name="ch1">Даю согласие на обработку персональных данных</span>
				</label>
				</div><a class="btn-primary" href="#">Заказать звонок</a>
			</form>
			</div>
		</div>
		</div>
	</section>

<?php get_footer(); ?>
