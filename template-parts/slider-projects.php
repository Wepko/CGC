<section class="projects" data-slider="true">
	<div class="container">
		<div class="projects__title">
			<p>Наши <span class="text-accent">проекты</span>
		</div>
		<div class="projects__filter">
			<?php 
				$query = new WP_Query([
					'post_type' => 'services',
					'posts_per_page' => -1,
				]);
				$i = 0;
			?>

			<div class="projects__filter-switcher">
				<div class="can-toggle demo-rebrand-1">
					<input id="d" type="checkbox">
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

		</div>

		<div class="projects__product-slider">
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

			<div class="slider">
				<div class="slider__overflow">
					<div class="slider-project">
						<div class="swiper-wrapper">
							<!-- Slides-->
					
								
								<?php if ($query->have_posts()) :?>
									<?php while($query->have_posts()) : $query->the_post()?>
										<div class="swiper-slide">
											<?php get_template_part( 'template-parts/card-product' );?>
										</div>			
									<?php endwhile;?>
		
								<?php else :?>
									<p>Записей нет</p>
								<?php endif;?>
		
		
						</div>
					</div>
				</div>
				<div class="slider__navigation">
					<div class="swiper-button-next"></div>
					<div class="slider__scrollbar">
						<div class="swiper-scrollbar"></div>
					</div>
					<div class="swiper-button-prev"></div>
				</div>
			</div>


	</div>
</section>
