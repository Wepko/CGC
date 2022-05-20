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


		<?php wp_nav_menu([
			'container' => false,
			'menu_class' => 'navigation',
			//'walker' => new My_Walker_Nav_Menu(),
		]); ?> 

	</nav>
	<div class="header__button"><a class="btn-secondary" data-custom-open="modal-1" href="#">Заказать звонок</a></div>
</div>




<!-- 
<div class="header__wrapper">
	<a class="header__logo" href="index.html"><img class="logo" src="img/icon/logo-white.svg" alt=""/></a>
	<nav class="header__nav">
		<div class="header__nav-menu">
			<div class="menu-toggle">
				<div class="hamburger"><span> </span><span> </span><span> </span></div>
				<div class="cross"><span> </span><span> </span></div>
			</div>
		</div>
		<ul class="navigation">
			<li class="navigation__subnav icon-arrow-down"><a href="about.html">О нас</a>
				<ul> 
					<li><a href="partners.html">О компании</a></li>
					<li><a href="partners.html">Партнёры</a></li>
				</ul>
			</li>
			<li class="navigation__subnav icon-arrow-down"><a href="services.html">Улсуги</a>
				<ul>
					<li><a href="service.html">Проектирование</a></li>
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
					<li><a href="project.html">Реализованные проекты</a></li>
				</ul>
			</li>
			<li><a href="#">Объекты в продаже</a></li>
			<li><a href="contacts.html">Контакты</a></li>
			<div class="navigation__info">
				<p>8 800 000 00 00</p>
				<p>email@company.com</p><a class="btn-primary" href="">Заказать звонок </a>
			</div>
		</ul>
	</nav>

</div>
</div> -->