<div class="header__wrapper">
	<a class="header__logo" href="<?php echo get_site_url()?>">
		<img class="logo" src="<?php echo  get_template_directory_uri() . '/dist/assets/img/icon/logo-white.svg' ?>" alt="" />
	</a>
	<nav class="header__nav">
		<div class="header__nav-menu">
			<div class="menu-toggle">
				<div class="hamburger"><span> </span><span> </span><span> </span></div>
				<div class="cross"><span> </span><span> </span></div>
			</div>
		</div>
		<!-- <ul class="navigation">
			<li><a href="about.html">О нас</a></li>
			<li class="navigation__subnav icon-arrow-down">
				<a href="services.html">Улсуги</a>
				<ul>
					<li><a href="">Проектирование</a></li>
					<li><a href="#">Сбор исходно-разрешительной документации</a></li>
					<li><a href="#">Архитектурное проектирование</a></li>
					<li><a href="#">Проектирование зданий</a></li>
					<li><a href="#">Проектирование инженерных коммуникаций</a></li>
					<li><a href="#">Проектирование инженерных коммуникаций</a></li>
					<li><a href="#">Проектирование систем безопасности и связи</a></li>
					<li><a href="#">Ландшафтное проектирование</a></li>
					<li><a href="#">Строительство</a></li>
					<li><a href="#">Сопровождение</a></li>
				</ul>
			</li>
			<li class="navigation__subnav icon-arrow-down"><a href="#">Проекты</a>
				<ul>
					<li><a href="catalog.html">Каталог проектов</a></li>
					<li><a href="projects.html">Текущие проекты</a></li>
					<li><a href="catalog.html">Реализованные проекты</a></li>
				</ul>
			</li>
			<li><a href="#">Объекты в продаже</a></li>
			<li><a href="partners.html">Партнёры</a></li>
			<li><a href="contacts.html">Контакты</a></li>
		</ul> -->

		<?php wp_nav_menu([
			'container' => false,
			'menu_class' => 'navigation',
			//'walker' => new My_Walker_Nav_Menu(),
		]); ?> 
	</nav>
</div>


