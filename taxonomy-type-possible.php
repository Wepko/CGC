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
						<option value="401:9999"> Более 400</option>
					</select>
				</div>
				<div class="catalog__filter-bedroom">
					<select id="bedroom" name="bedroom"> 
						<option value="full" data-display="Колличество спален">Любое</option>
						<option value="0:2">2</option>
						<option value="2:4"> От 2 до 4</option>
						<option value="5:99"> Более 4</option>
					</select>
				</div>
				<div class="catalog__filter-bathroom"> 
					<select id="bathroom" name="bathroom"> 
						<option value="full" data-display="Колличество сан узлов">Любое</option>
						<option value="0:2">2</option>
						<option value="3:3">3</option>
						<option value="4:4">4</option>
						<option value="5:99"> Более 4</option>
					</select>
				</div>
				<div class="catalog__filter-backspace" id="reset">
					<span>Сбросить фильтр</span>
					<i class="icon-backspace"></i>
				</div>
			</div>
			<div class="projects__product">

				<?php 
					$query = new WP_Query([
						'post_type' => 'projects',
						'type' => 'possible',
						'status' => ['object_sale', 'object_not_sale'],
						'orderby' => 'meta_value',
						'meta_key' => 'total_area',
						'order' => 'ASC'
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
				$query = new WP_Query([
					'post_type' => 'projects',
					'type' => 'possible',
					'status' => ['object_sale', 'object_not_sale'],
				]);

				$max_pages = $query->max_num_pages;
			?>


			<div class="projects__buttons">
				<a id="more2" data-param="<?php echo $max_pages; ?>" class="btn-primary btn-primary--outline btn-primary--icon icon-arrow-right" href="">Загрузить еще</a>
			</div>
		</div>
	</section>


	<?php get_template_part( 'template-parts/question'); ?>

	<?php 
		$theme = 'dark';
		get_template_part( 'template-parts/contact', null, $theme ); 	
	?>

<?php get_footer(); ?>
