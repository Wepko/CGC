<?php
/**
 * The template for displaying archive pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package cgc
 */

get_header();

$filter = ['switcher' => true ];

?>

	<section class="projects header-clear">
			<div class="container">
				<div class="projects__title title-h1">
					<p>Наши <span class="text-accent">проекты</span></p>
				</div>
				<?php 
						$query = new WP_Query([
							'post_type' => 'services',
							'posts_per_page' => -1,
						]);
						$i = 0;
				?>

				<form class="projects__filter">
          <div class="projects__filter-switcher">
            <div class="can-toggle demo-rebrand-1">
							<input id="d" type="checkbox" <? echo  false ? 'checked' : ''?> >
              <label for="d">
                <div class="can-toggle__switch" data-checked="Текущие" data-unchecked="Реализованные"></div>
              </label>
            </div>
						<a class="btn-primary btn-primary--outline btn-primary--icon icon-arrow-right" href="#"> Каталог проектов</a>
          </div>
          <div class="projects__filter-services active">
						<div class="projects__filter-buttons">
								<div class="projects__filter-button">
									<input id="service<?=$i?>" type="radio" name="service" checked value="all">
									<label for="service<?=$i?>">Все</label>
								</div>
								<?php if($query->have_posts()) : ?>
									<?php while($query->have_posts()) : $query->the_post(); $i++; ?>
										<div class="projects__filter-button">
											<input id="service<?=$i?>" type="radio" name="service" value="<?= $query->post->ID?>">
											<label for="service<?=$i?>"> <?php the_title(); ?></label>
										</div>
									<?php endwhile;?>
								<?php else :?>
									<p>Ничего нет</p>
								<?php endif;?>
							</div>
            <div class="projects__filter-next"><span>Еще</span><i class="icon-arrow-right"> </i></div>
          </div>
        </form>

				<div class="projects__product">

					<?php 
						$query = new WP_Query([
							'post_type' => 'projects',
							'type' => 'implemented',
						]);
					?>
					
					<?php if ($query->have_posts()) :?>
						<?php while($query->have_posts()) : $query->the_post()?>
							<div class="card-product"><img src="img/home4.png" alt="">
								<div class="card-product__components">
								<div class="card-product__tag">
									<p class="tag tag_solid"> <?php echo  get_the_terms( get_the_ID(), 'type' )[0]->name;?></p>
								</div>
								<div class="card-product__title"><?php the_title(); ?></div>
								<div class="card-product__description">
									<div class="card-product__description-icons"><span class="icon-icon1">160 м<sup>2</sup></span><span class="icon-icon2">4</span><span class="icon-icon3">от 6.0 соток</span><span class="icon-icon4">2</span></div>
									<div class="card-product__description-text">
									<p><?php the_content(); ?></p>
									</div>
								</div>
								<div class="card-product__button">
									<a class="btn-secondary btn-secondary--icon icon-arrow-right" href="<?php the_permalink(); ?>"> Подробнее</a>
								</div>
								</div>
							</div>					
						<?php endwhile;?>

						<div class="navigation">
							<div class="next-posts"><?php next_posts_link(); ?></div>
							<div class="prev-posts"><?php previous_posts_link(); ?></div>
						</div>
					<?php else :?>
						<p>Записей нет</p>
					<?php endif;?>

				</div>
				<?php 

						$paged = get_query_var('paged') ? get_query_var('paged') : 1;

						$query = new WP_Query([
							'post_type' => 'projects',
							'type' => 'current',
							'paged' => $paged,
						]);

						$max_pages = $query->max_num_pages;

						$param = [
							'paged' => $paged,
							'maxPages' => $max_pages,
							'type' => 'current',
							'services' => 'all',

						];

				?>
				<?php if ($paged <= $max_pages) : ?>
					<div class="projects__buttons">
						<a id="more" data-param='<?php echo json_encode($param, JSON_UNESCAPED_UNICODE) ?>' class="btn-primary btn-primary--outline btn-primary--icon icon-arrow-right" href="">Загрузить еще</a>
					</div>
				<?php else : ?>
					<p></p>
				<?php endif; ?>
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

