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

<?php 

    if( has_term( 'current', 'type') ){
        echo '<p>Это страница archive-projects.php current</p>';
    }

    if( has_term( 'implemented', 'type' ) ){
        echo '<p>Это страница archive-projects.php implemented</p>';
    }
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
        <div class="swiper slider-project-single">
         

					<?php 
						$images = get_field('pl_photo_gallery');
						$size = 'full'; // (thumbnail, medium, large, full или произвольный размер)

						if( $images ): ?>
								 <div class="swiper-wrapper">
										<?php foreach( $images as $image ): ?>
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
    </section>
    <section class="project-content">
      <div class="container">
        <div class="project-content__wrapper">
					<?php 
						$stock = get_field('stock'); 
						// echo '<pre>';
						// print_r( $stock  );
						// echo '</pre>';
						$content = trim($stock->post_content);
						$text = "<p>Это акция существует, но пока в ней нету текста, за помощью обратитесь к администрации сайта</p>";
					?>
					<?php if (!empty(	$stock)) : ?>
						<div class="project-content__stock"> 
							<h2>Действует <span class="text-accent">акция</span></h2>
							
							<div class="project-content__stock-text"> 
								<?php echo strlen($content) != 0 ? $content : $text; ?>
							</div>
						</div>
					<?php endif ?>
          <div class="post">
            <div class="post__title"> 
              <h2> <span class="text-accent">Информация </span></h2>
            </div>
            <div class="post__content">
              <div class="project-content__info">
                <div class="project-content__info-block icon-adress-bold">
                  <h3>Место реализации</h3>
                  <p><?php echo the_field('info_place')?></p>
                </div>
                <div class="project-content__info-block icon-time">
                  <h3>Время реализации</h3>
                  <p><?php echo the_field('info_time')?></p>
                </div>
                <?php  if( has_term( 'implemented', 'type' ) ) :?>
                    <div class="project-content__info-button">
                        <a class="btn-live" href="">live Камера</a>
                    </div>
                <?php endif; ?>
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
                        <h4><?the_field('min_width')?> x <?the_field('min_length')?> м</h4>
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
      </div>
    </section>
    <?php  if( has_term( 'current', 'type' ) ) :?>
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
																				<!-- Additional required wrapper-->
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
																		<div class="accordion__buttons"><a class="btn-primary">Узнать больше</a><a class="btn-primary btn-primary--outline btn-primary--icon icon-arrow-right">Готовые проекты</a></div>
																		</div>
																</div>
																</dd>
														</dl>
													<?php endwhile; ?>
									
											</div>
									</dd>
								<?php endif; ?>
								<?php if( have_rows('services_tab_2') ): ?>
									<dt class="badger-accordion__header"><a class="badger-accordion__trigger js-badger-accordion-header">
											<div class="badger-accordion__trigger-title">Проектирование</div>
											<div class="badger-accordion__trigger-icon"><i class="icon-plus"></i></div></a>
									</dt>
									<dd class="badger-accordion__panel js-badger-accordion-panel">
											<div class="badger-accordion__panel-inner text-module js-badger-accordion-panel-inner"><a class="badger-accordion__panel-subitem" href="#">Архитектурное проектирование</a><a class="badger-accordion__panel-subitem" href="#">Проектирование зданий</a><a class="badger-accordion__panel-subitem" href="#">Проектирование инженерных коммуникаций</a><a class="badger-accordion__panel-subitem" href="#">Дизайн проектирование</a><a class="badger-accordion__panel-subitem" href="#">Ландшафтное проектирование</a></div>
									</dd>
								<?php endif; ?>
								<!-- <?php if( have_rows('services_tab_3') ): ?>
									<dt class="badger-accordion__header"><a class="badger-accordion__trigger js-badger-accordion-header">
											<div class="badger-accordion__trigger-title">Строительство</div>
											<div class="badger-accordion__trigger-icon"><i class="icon-plus"></i></div></a>
									</dt>
									<dd class="badger-accordion__panel js-badger-accordion-panel">
											<div class="badger-accordion__panel-inner text-module js-badger-accordion-panel-inner"><a class="badger-accordion__panel-subitem" href="#">Строительство объекта</a><a class="badger-accordion__panel-subitem" href="#">Внешняя отделка</a><a class="badger-accordion__panel-subitem" href="#">Внутренняя отделка</a><a class="badger-accordion__panel-subitem" href="#">Благоустройство территории</a></div>
									</dd>
								<?php endif; ?>
								<?php if( have_rows('services_tab_4') ): ?>
									<dt class="badger-accordion__header"><a class="badger-accordion__trigger js-badger-accordion-header">
										<div class="badger-accordion__trigger-title">Сопровождение</div>
										<div class="badger-accordion__trigger-icon"><i class="icon-plus"></i></div></a>
									</dt>
									<dd class="badger-accordion__panel js-badger-accordion-panel">
											<div class="badger-accordion__panel-inner text-module js-badger-accordion-panel-inner">
											<p>Although badgers are a solitary animal the young Hog Badger tends to be quite playful and social.  I would be careful playing with any animal that has extremely large claws.  Remember folks, it is all fun and games until someone loses an eye.</p>
											<p>Hog Badgers are omnivores and they feed on a variety of things from honey and fruit to insects and small mammals.</p>
											<p>A young / baby of a hog badger is called a 'kit'. The females are called 'sow' and males 'boar'. A hog badger group is called a 'cete, colony, set or company'.</p>
											</div>
									</dd>
								<?php endif; ?> -->
              </dl>
            </div>
        </section>
    <?php endif; ?>

    <?php  if( has_term( 'implemented', 'type' ) ) :?>
        <?php  get_template_part( 'template-parts/slider-projects' );?>
    <?php endif; ?>

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