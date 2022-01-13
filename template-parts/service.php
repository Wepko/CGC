
<section class="service container <?php echo $args == 'main' ? 'service--main' : ''; ?>">
	<div class="service__title">Наши <span class="text-accent">услуги</span></div>
	<div class="service__description">Прежде всего, современная методология разработки прекрасно подходит для реализации распределения.</div>
	<div class="service__accordion">
		<dl class="badger-accordion js-badger-accordion">
				<?php $cats = get_categories(); 

				?>
				<?php
				function Truncate($string, $maxLen)
				{
					if (strlen($string) > $maxLen)
					{
						return substr($string, 0, $maxLen) . '...';
					}
					return $string;
				}
				?>
				<?php foreach ($cats as $cat) : ?>
					<?php 
						$term_id = get_query_var('category');
						$term_image = get_term_meta($cat->cat_ID,'services_bg', true );
						$image_attributes = wp_get_attachment_image_src( $term_image,'full');
					?>
					<style> 
						<?php echo "[data-id='$cat->cat_ID']"?>::before {
							background-image: url(<?php echo"$image_attributes[0]"?>);
							box-shadow: 1rem 2rem 4rem 7rem #20294590 inset, -1rem -2rem 4rem 7rem #20294590 inset, 0 -4rem 10rem  7rem #20294590 inset;
						}
						<?php echo "[data-id='$cat->cat_ID']"?>.-ba-is-active {
								background-image: url(<?php echo"$image_attributes[0]"?>)!important;
								box-shadow: 1rem 2rem 4rem 7rem #20294527 inset, -1rem -2rem 4rem #20294527 inset, 0 -4rem 10rem #20294527 inset;
							}
					</style>
					
					<dt class="badger-accordion__header">
						<a data-id="<?php echo $cat->cat_ID?>" class="badger-accordion__trigger js-badger-accordion-header">
							<div class="badger-accordion__trigger-title"><?php echo $cat->cat_name;?></div>
							<div class="badger-accordion__trigger-icon"><i class="icon-plus"></i></div>
						</a>
					</dt>
		
					
					<?php
						$my_query = new WP_Query([
							'post_type' => 'services',
							'taxonomy' => 'category',
							'category__in' => "$cat->cat_ID",
							'posts_per_page' => -1,
						]);
					?>

					<?php if ($my_query->have_posts()) : ?>
						<dd class="badger-accordion__panel js-badger-accordion-panel">
							<div class="badger-accordion__panel-inner js-badger-accordion-panel-inner">
								<?php while($my_query->have_posts()) : $my_query->the_post();?>

									<?php if ($my_query->found_posts <= 1) : ?>
										<div class="accordion">
											<div class="accordion__description"> 
												<p><?php echo Truncate(get_field('group1-service')['service-info'], 750);?></p>
											</div>
											<div class="accordion__buttons">
												<a href="<?php the_permalink(); ?>" class="btn-primary btn-primary--outline btn-primary--icon icon-arrow-right">Подробнее</a>
											</div>
										</div>
									<?php endif; ?>

									<?php if ($my_query->found_posts > 1) : ?>
										<a class="badger-accordion__panel-subitem" href="<?php the_permalink();?>"><?php echo get_the_title();?></a>
									<?php endif; ?>

								<?php endwhile; ?>
							</div>
						</dd>
			
					<?php endif; ?>

				<?php endforeach; ?>

		</dl>
	</div>
</section>