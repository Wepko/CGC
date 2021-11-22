<?php get_header(); ?>
	<section class="catalog">
		<div class="container">
			<div class="catalog__title">
				<h1>Каталог <span class="text-accent">проектов</span></h1>
			</div>
			<div class="catalog__filter">
				<div class="catalog__filter-area"> 
					<select id="area" name="area"> 
						<option value="full" data-display="Площадь">Любая</option>
						<option value="0:200">До 200</option>
						<option value="200:300"> От 200 до 300</option>
						<option value="300:400"> От 300 до 400</option>
						<option value="400:9999"> Более 400</option>
					</select>
				</div>
				<div class="catalog__filter-bedroom">
					<select id="bedroom" name="bedroom"> 
						<option value="full" data-display="Колличество спален">Любое</option>
						<option value="0:2">2</option>
						<option value="2:4"> От 2 до 4</option>
						<option value="4:99"> Более 4</option>
					</select>
				</div>
				<div class="catalog__filter-bathroom"> 
					<select id="bathroom" name="bathroom"> 
						<option value="full" data-display="Колличество сан узлов">Любое</option>
						<option value="0:2">2</option>
						<option value="3:3">3</option>
						<option value="4:4">4</option>
						<option value="4:99"> Более 4</option>
					</select>
				</div>
				<div class="catalog__filter-backspace"><span>Сбросить фильтр</span><i class="icon-backspace"></i></div>
			</div>
			<div class="projects__product">

				<?php 
					$query = new WP_Query([
						'post_type' => 'projects',
						'type' => 'possible',
						'status' => ['object_sale', 'object_not_sale'],
					]);

					function is_tag_cgc() {
						$slug = get_the_terms( get_the_ID(), 'status' )[0]->slug;

						if ($slug == 'object_sale') {
							return '<p class="tag tag_solid"> Обьект в продаже</p>';
						} else {	
							return ' ';
						} 
						return false;
					}

					function is_stocs_cgc() {
						$stock = get_field('stock'); 
						if (!empty($stock)) {
							return '<p class="tag tag_primary">Спецпредложение</p>';
						} else {
							return '  ';
						}
					}
					

				?>

				<?php if ($query->have_posts()) :?>
					<?php while($query->have_posts()) : $query->the_post()?>
						<?php get_template_part( 'template-parts/card-product' );?>
					<?php endwhile;?>
				<?php else :?>
					<p>Записей нет</p>
				<?php endif;?>

			</div>

			<div class="projects__buttons"><a class="btn-primary btn-primary--outline btn-primary--icon icon-arrow-right" href="">Загрузить еще</a></div>
		</div>
	</section>


	<div class="questions">
		<div class="container">
			<div class="questions__wrapper">
				<div class="questions__title">Остались 
					<div class="text-accent">вопросы?</div>
				</div>
				<div class="questions__description">Оставьте свой номер телефона и мы перезвоним вам в ближайшее время</div>
				<div class="questions__buttons"><a class="btn-primary" href="#">Заказать звонок</a></div>
			</div>
		</div>
	</div>
	<section class="contacts contacts--dark">
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
