
<section class="service container">
		<div class="service__title">Наши <span class="text-accent">услуги</span></div>
		<div class="service__description">Прежде всего, современная методология разработки прекрасно подходит для реализации распределения.</div>
		<div class="service__accordion">
			<dl class="badger-accordion js-badger-accordion">
					<?php $cats = get_categories(); ?>
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
						<dt class="badger-accordion__header">
							<a class="badger-accordion__trigger js-badger-accordion-header">
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