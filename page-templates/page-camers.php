<?php get_header(); ?>

<?php 
	/*
		Template Name: camers
	*/
?>


	


  <section class="partners">
      <div class="container">
        <div class="partners__title">
          <h1>
            <?php 
              $title = explode(' ',  get_the_title() );
              echo $title[0];
            ?>
            <span class="text-accent"><?= $title[1]?></span>
          </h1>
        </div>
        <div class="partners__content"> 
        
				<div class="projects__product">
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
						<?php while($query->have_posts()) : $query->the_post();  $id = get_the_ID();?>
							<?php get_template_part( 'template-parts/card-camera', null, ["id" => $id]);?>
							<?php get_template_part( 'template-parts/modal-camera', null, ["id" => $id] );?>
						<?php endwhile;?>
					<?php else :?>
						<p>Записей нет</p>
					<?php endif;?>
				</div>




        </div>
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