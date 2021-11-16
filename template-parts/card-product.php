<div class="card-product">
	<?php if( get_field('thumb') ): ?>
		<img src="<?php echo get_field('thumb')['url']; ?>" />
	<?php endif; ?>
	<div class="card-product__components">
		<div class="card-product__tag">
			<?php 
				echo is_tag_cgc();
				echo is_stocs_cgc();
			?>
		</div>
		<div class="card-product__title"><?php the_title(); ?></div>
		<div class="card-product__description">
			<div class="card-product__description-icons">
				<span class="icon-icon1"><?php echo get_field('total_area')?> м<sup>2</sup></span>
				<span class="icon-icon2"><?php echo get_field('rooms')?></span>
				<span class="icon-icon3">от <?php echo get_field('min_area')?> соток</span>
				<span class="icon-icon4"><?php echo get_field('bathrooms')?></span>
			</div>
			<div class="card-product__description-text">
			<p><?php the_content(); ?></p>
			</div>
		</div>
		<div class="card-product__button">
			<a class="btn-secondary btn-secondary--icon icon-arrow-right" href="<?php the_permalink(); ?>"> Подробнее</a>
		</div>
	</div>
</div>		