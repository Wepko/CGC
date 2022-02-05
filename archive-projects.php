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

	<section class="projects projects--main header-clear">
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
				
				<div class="projects__filter">
          <div class="projects__filter-switcher">
            <div id="switcher" class="can-toggle demo-rebrand-1">
							<input id="d" type="checkbox">
              <label for="d">
                <div class="can-toggle__switch" data-checked="Текущие" data-unchecked="Реализованные"></div>
              </label>
            </div>
						<a class="btn-primary btn-primary--outline btn-primary--icon icon-arrow-right" href="<?php echo get_term_link( 'possible', 'type' ); ?>"> Каталог проектов</a>
          </div>
          <div  id="typeStatic" class="projects__filter-services  active">
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
					<?php $i = 0;?>
					<div id="typeSlider" class="projects__filter-services active">
						<div class="slider slider--one-sided" style="overflow: hidden">
							<div class="slider__overflow">
								<div class="slider-services-filter">
									<div class="swiper-wrapper">
										<div class="projects__filter-button">
											<input id="service<?=$i?>" type="radio" name="service" checked value="all">
											<label for="service<?=$i?>">Все</label>
										</div>
										<?php if($query->have_posts()) : ?>
											<?php while($query->have_posts()) : $query->the_post(); $i++; ?>
												<div class="swiper-slide">
													<div class="projects__filter-button">
														<input id="service<?=$i?>" type="radio" name="service" value="<?= $query->post->ID?>">
														<label for="service<?=$i?>"> <?php the_title(); ?></label>
													</div>
												</div>
											<?php endwhile;?>
										<?php else :?>
											<p>Ничего нет</p>
										<?php endif;?>
									</div>
								</div>
							</div>
						</div>
					</div>
        </div>

				<div class="projects__product">

					<?php 
						$query = new WP_Query([
							'post_type' => 'projects',
							'type' => 'implemented',
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

				<?php 
						$paged = get_query_var('paged') ? get_query_var('paged') : 1;

						$query = new WP_Query([
							'post_type' => 'projects',
							'type' => 'implemented',
							'status' => ['object_sale', 'object_not_sale'],
							'paged' => $paged,
						]);

						$max_pages = $query->max_num_pages;

						$param = [
							'paged' => $paged,
							'maxPages' => $max_pages,
							'type' => 'implemented',
							'services' => 'all',

						];

				?>
				<?php if ($paged <= $max_pages) : ?>
					<div class="projects__buttons">
						<a id="more" data-param="<?php echo $max_pages?>" class="btn-primary btn-primary--outline btn-primary--icon icon-arrow-right" href="">Загрузить еще</a>
					</div>
				<?php else : ?>
					<p></p>
				<?php endif; ?>
			</div>
		</section>

		<?php get_template_part( 'template-parts/question'); ?>

		<?php 
			$theme = 'dark';
			get_template_part( 'template-parts/contact', null, $theme ); 	
		?>

	
<?php get_footer(); ?>

