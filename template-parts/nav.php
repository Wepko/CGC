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
</div>
