
<section class="projects" data-slider="true">
	<div class="container">
		<div class="projects__title">
			<p>Онлайн <span class="text-accent">камеры</span></p>
		</div>
	</div>

	<div class="container-one-side">

		<div class="projects__product-slider">
			<?php 
				$query = new WP_Query([
					'post_type' => 'projects',
					'meta_query' => [
						[	
							[
								'key' => 'isActiveCamera',
								'value' => true,
								'compare' => '='
							]
						],
					]
				]);
	
			?>
	
			<div class="slider slider--one-sided">
				<div class="slider__overflow">
					<div class="slider-project">	
						<div class="swiper-wrapper">
						<?php echo '<pre>';
							print_r($query->sub_fields);
							echo '</pre>';
							?> 
								<?php if ($query->have_posts()) :?>
									<?php while($query->have_posts()) : $query->the_post(); $id = get_the_ID();?>
										<div class="swiper-slide">
											<?php get_template_part( 'template-parts/card-camera', null, ["id" => $id]);?>
										</div>			
									<?php endwhile;?>
		
								<?php else :?>
									<p>Записей нет</p>
								<?php endif;?>

						</div>
				
						<div class="slider__navigation">
							<div class="swiper-button-prev"></div>
							<div class="slider__scrollbar">
								<div class="swiper-scrollbar"></div>
							</div>
							<div class="swiper-button-next"></div>
						</div>
	
					</div>
				</div>
			</div>
		</div>
		
	</div>
	<?php 
		$query = new WP_Query([
			'post_type' => 'projects',
			'meta_query' => [
				[	
					[
						'key' => 'camers',
						'value' => [],
						'compare' => 'NOT LIKE'
					]
				],
			]
		]);

	?>

	<?php if ($query->have_posts()) :?>
		<?php while($query->have_posts()) : $query->the_post(); $id = get_the_ID();?>		
			<?php get_template_part( 'template-parts/modal-camera', null, ["id" => $id] );?>
		<?php endwhile;?>

	<?php else :?>
		<p>Записей нет</p>
	<?php endif;?>
</section>
