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
		<div class="projects__product">
			<?php 
				$query = new WP_Query([
					'post_type' => 'projects',
					'type' => 'implemented',
				]);
			?>
			<div class="slider-project">
			<!-- Additional required wrapper-->
			<div class="swiper-wrapper">
				<!-- Slides-->
		
					
					<?php if ($query->have_posts()) :?>
						<?php while($query->have_posts()) : $query->the_post()?>
							<div class="swiper-slide">
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
			<div class="swiper-buttons">
				<div class="swiper-button-next"></div>
				<div class="swiper-button-prev"></div>
			</div>
			<div class="swiper-scrollbar"></div>
			</div>
		</div>
	</div>
</section>
