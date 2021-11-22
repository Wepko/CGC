<?php get_header(); ?>

<?php 
	/*
		Template Name: sale-obj
	*/
?>

	<section class="catalog">
		<div class="container">
			<div class="catalog__title">
				<h1><span class="text-accent">Готовые объекты </span> в продаже</h1>
			</div>
			<div class="catalog__filter">
				<div class="catalog__filter-area"> 
					<select id="s" name="r"> 
						<option value="" data-display="Площадь">Любая1</option>
						<option value="">До 2001</option>
						<option value=""> От 200 до 300</option>
						<option value=""> От 300 до 400</option>
						<option value=""> Более 400</option>
					</select>
				</div>
				<div class="catalog__filter-bedroom">
					<select id="s" name="r"> 
						<option value="" data-display="Колличество спален">Любая2</option>
						<option value="">До 2002</option>
						<option value=""> От 200 до 300</option>
						<option value=""> От 300 до 400</option>
						<option value=""> Более 400</option>
					</select>
				</div>
				<div class="catalog__filter-bathroom"> 
					<select id="s" name="r"> 
						<option value="" data-display="Колличество сан узлов">Любая3</option>
						<option value="">До 2003</option>
						<option value=""> От 200 до 300</option>
						<option value=""> От 300 до 400</option>
						<option value=""> Более 400</option>
					</select>
				</div>
				<div class="catalog__filter-backspace"><span>Сбросить фильтр</span><i class="icon-backspace"></i></div>
			</div>
			<div class="projects__product">

				<?php 
					$query = new WP_Query([
						'post_type' => 'projects',
						'type' => ['implemented', 'current'],
						'status' => 'object_sale',
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

	<?php get_template_part( 'template-parts/question'); ?>

	<?php 
		$theme = 'dark';
		get_template_part( 'template-parts/contact', null, $theme ); 	
	?>



<?php get_footer(); ?>