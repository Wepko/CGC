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
 * @package CGC
 */

get_header();
?>

	
	<section class="main">
		<div class="container">
			<header class="header">
				<div class="header__logo"><img src="img/logo.png" alt="" class="logo"></div>
				<nav class="header__nav">
					<ul class="navigation">
						<li><a href="#">О нас</a></li>
						<li><a href="#">Улсуги</a></li>
						<li><a href="#">Проекты</a></li>
						<li><a href="#">Объекты в продаже</a></li>
						<li><a href="#">Партнёры</a></li>
						<li><a href="#">Новости</a></li>
						<li><a href="#">Контакты</a></li>
					</ul>	
				</nav>
			</header>
			<div class="info-content">
				<div class="info-block">
					<div class="info-blog__tag tag">Спецпредложение</div>
					<div class="info-block__title">
						<span class="text-accent"><?php echo the_field('main_title_1');?></span>	
						<br> 
						<span><?php echo the_field('main_title_2');?></span>
					</div>
					<p class="info-block__description" style="background: url('<?php echo the_field("main_images")?>')">
					<?php echo the_field('main_description');?>
					</p>
					<div class="info-block__buttons">
						<a href="#" class="btn-gift">Забрать подарок</a>
						<a href="#" class="btn-secondary">Посмотреть подарок</a>
					</div>
				</div>
				<div class="info-content__slider"></div>
			</div>
		</div>
	</section>

	<section class="about-company">
		<div class="about-company__title">
			<p>
				<span class="text-accent">Информация</span>
				 <br> о компании
				</div>
			</p>
		<div class="about-company__description">
			<p>
				Залогом успеха нашей компании является <span class="text-accent">строгая последовательность</span>	 выполнения строительных работ. Благодаря обширному опыту, мы разработали план, по которому осуществляем все процессы подготовки, проектирования и реализации. За годы деятельности наши клиенты не раз проверили его эффективность на практике. 
			</p>
			<p>Мы неустанно продолжаем совершенствовать наш процесс, чтобы идти в ногу со временем и даже опережать его.</p>

			<div class="about-company__button">
				<a class="btn-secondary" href="#">Прочитать полностью</a>
			</div>
		</div>

	</section>
	
	<section class="service container">
		<div class="service__title">Наши <span class="text-accent">услуги</span></div>
		<div class="service__description">Прежде всего, современная методология разработки прекрасно подходит для реализации распределения.</div>
		<div class="service__accordion">
			<dl class="badger-accordion js-badger-accordion">
					<dt class="badger-accordion__header">
							<button class="badger-accordion__trigger js-badger-accordion-header">
									<div class="badger-accordion__trigger-title">
										Сбор исходно-разрешительной документации
									</div>
									<div class="badger-accordion__trigger-icon">
									</div>
							</button>
					</dt>
					<dd class="badger-accordion__panel js-badger-accordion-panel">
							<div class="badger-accordion__panel-inner text-module js-badger-accordion-panel-inner">
									<p>Badgers are short-legged omnivores in the family Mustelidae, which also includes otters, polecats, weasels and wolverines. They belong to the caniform suborder of carnivoran mammals.</p>
									<p>Badgers are thought to have got their name because of the white mark – or badge – on their head, although there are other theories.</p>
									<p>Another old name for badgers is ‘brock’, meaning grey. You can often see the word brock in street names. Brock is also the name of a character in the Pokemon TV series!</p>
									<p>Badgers are fast – they can run up to 30km per hour (nearly 20 mph) for short periods.</p>
							</div>
					</dd>
					<dt class="badger-accordion__header">
							<button class="badger-accordion__trigger js-badger-accordion-header">
									<div class="badger-accordion__trigger-title">
											Honey Badger - Mellivora capensis
									</div>
									<div class="badger-accordion__trigger-icon">
									</div>
							</button>
					</dt>
					<dd class="badger-accordion__panel js-badger-accordion-panel">
							<div class="badger-accordion__panel-inner text-module js-badger-accordion-panel-inner">
									<p>Honey badgers can reach 2.4 feet in length and weigh between 19 and 26 pounds. They have bushy tail that is usually 12 inches long.</p>
									<p>Honey badger has incredible thick skin that cannot be pierced with arrows, spears or even machete. Skin is also very loose, which is useful in the case of attack. When predator grabs a badger, animal rotates in its skin and turns toward predator's face to fight back (attacking its eyes).</p>
									<p>Honey badger has very sharp teeth. They can easily break tortoise shell.</p>
							</div>
					</dd>
					<dt class="badger-accordion__header">
							<button class="badger-accordion__trigger js-badger-accordion-header">
									<div class="badger-accordion__trigger-title">
											Hog Badger - Arctonyx collaris
									</div>
									<div class="badger-accordion__trigger-icon">
									</div>
							</button>
					</dt>
					<dd class="badger-accordion__panel js-badger-accordion-panel">
							<div class="badger-accordion__panel-inner text-module js-badger-accordion-panel-inner">
									<p>Although badgers are a solitary animal the young Hog Badger tends to be quite playful and social.  I would be careful playing with any animal that has extremely large claws.  Remember folks, it is all fun and games until someone loses an eye.</p>
									<p>Hog Badgers are omnivores and they feed on a variety of things from honey and fruit to insects and small mammals. </p>
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
				<p>
					Приятно, граждане, наблюдать, как элементы политического процесса своевременно верифицированы. Банальные, но
				</p>
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

	<section class="projects">
		<div class="container">
			<div class="projects__title">
				<p>Наши <span class="text-accent">проекты</span></p>
				<a href="#" class="btn-gift"> Все проекты</a>
			</div>
	
			<div class="projects__filter">
				<div class="projects__filter-top">
					<div class="switcher">123</div>
					<div class="projects__filter-buttons">
						<div class="projects__filter-button">Все</div>
						<div class="projects__filter-button">Проектирование</div>
						<div class="projects__filter-button">Сбор исходно-разрешительной документации</div>
					</div>
					<div class="projects__filter-next">Еще</div>
				</div>
				<div class="projects__filter-bottom">
					<div class="projects__filter-buttons">
						<div class="projects__filter-button">Архитектурное проектирование</div>
						<div class="projects__filter-button">Проектирование зданий</div>
						<div class="projects__filter-button">Проектирование инженерных коммуникаций</div>
						<div class="projects__filter-button">Дизайн проект</div>
						<div class="projects__filter-button">Проектирование систем безопасности и связи</div>
						<div class="projects__filter-button">Ландшафтное проектирование</div>
						<div class="projects__filter-button">Строительство</div>
						<div class="projects__filter-button">Сопровождение</div>
					</div>
				</div>
			</div>
			<div class="projects__product">
				

				<div class="swiper">
					<!-- Additional required wrapper -->
					<div class="swiper-wrapper">
						<!-- Slides -->
						<div class="swiper-slide">
							<div class="card-product">
								<img src="img/home1.png" alt="">
								<div class="card-product__components">
									<div class="card-product__tag">
										<p class="tag">Обьект в продаже1</p>
									</div>
									<div class="card-product__title">Дан-Бланш G+</div>
									<div class="card-product__button">
										<a href="#" class="btn-secondary"> Подробнее</a>
									</div>
								</div>
							</div>
						</div>
						<div class="swiper-slide">
							<div class="card-product">
								<div class="card-product__tag">
									<p class="tag">Обьект в продаже2</p>
								</div>
								<div class="card-product__title">Дан-Бланш G+</div>
								<div class="card-product__button">
									<a href="#" class="btn-secondary"> Подробнее</a>
								</div>
							</div>
						</div>
						<div class="swiper-slide">
							<div class="card-product">
								<div class="card-product__tag">
									<p class="tag">Обьект в продаже3</p>
								</div>
								<div class="card-product__title">Дан-Бланш G+</div>
								<div class="card-product__button">
									<a href="#" class="btn-secondary"> Подробнее</a>
								</div>
							</div>
						</div>
						<div class="swiper-slide">
							<div class="card-product">
								<div class="card-product__tag">
									<p class="tag">Обьект в продаже4</p>
								</div>
								<div class="card-product__title">Дан-Бланш G+</div>
								<div class="card-product__button">
									<a href="#" class="btn-secondary"> Подробнее</a>
								</div>
							</div>
						</div>
					</div>

				</div>


			</div>
		</div>
	</section>

	<section class="contacts">
		<div class="container">
			<div class="contacts__wrapper">
				<div class="contacts__info">
					<div class="contact">
						<div class="contact__title">Контакты</div>
						<div class="contact__description">Есть над чем задуматься: сторонники тоталитаризма в науке.</div>
						<div class="contact__info">
							<p>email@company.com</p>
							<p>8 800 000 00 00</p>
							<p>ул. Герасима Курина, д. 10, корп. 2</p>
						</div>
						<div class="contact__social">
							<div class="social"></div>
						</div>
					</div>

				</div>
				<div class="contacts__form">
					<div class="form">

					</div>
				</div>
			</div>
		</div>
	</section>

<?php
get_footer();
