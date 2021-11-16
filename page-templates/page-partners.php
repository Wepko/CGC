<?php get_header(); ?>

<?php 
	/*
		Template Name: partners
	*/
?>



  <section class="partners">
      <div class="container">
        <div class="partners__title">
          <!-- <h1>Наши<span class="text-accent">    партнеры </span></h1> -->
          <h1>
            <?php 
              $title = explode(' ',  get_the_title() );
              echo $title[0];
            ?>
            <span class="text-accent"><?= $title[1]?></span>
          </h1>
        </div>
        <div class="partners__content"> 
          <div class="post">
            <div class="post__title"> 
              <h2> <?= the_field('partners-pod_zagolovok'); ?></h2>
            </div>
            <div class="post__content">
              <div class="partners__description">
                <!-- <p class="text-accent">Мы вынуждены отталкиваться.</p> -->
                <p><?php the_content() ?></p>
              </div>
              <?php 
                $query = new WP_Query([
                  'post_type' => 'partners',
                ]);
              ?>
              <div class="partners__brand">
                <?php if ($query->have_posts()) :?>
                  <?php while ($query->have_posts()) : $query->the_post()?>
                    <div class="partners-brand">

                      <?php 
                        $image = get_field('partners-img');
                        $size = 'full';
                        if( $image ) {
                          echo wp_get_attachment_image( $image, $size );
                        }
                      ?>
                      <img src="<?php echo $image['url']?>" alt="">
                      <div class="partners-brand__contacts">
                        <p>Телефон: <span><?php the_field('partners-phone')?></span></p>
                        <p>Сайт: <span><?php the_field('partners-sait'); ?></span></p>
                      </div>
                      <p><?php the_content();?></p>
                    </div>
                  <?php endwhile; ?>
                <?php else :?>
                    <p>Ничего не найдено</p>
                <?php endif; ?>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
		
		<?php get_template_part( 'template-parts/question'); ?>

		<?php 
			$theme = 'dark';
			get_template_part( 'template-parts/contact', null, $theme ); 	
		?>

<?php get_footer(); ?>