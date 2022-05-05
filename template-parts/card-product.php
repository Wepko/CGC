<div class="card-project" style="background-image: url(); background-size: cover">
	<img src="<?php echo get_field('thumb')['url']; ?>" />

	<div class="card-project__components">
		
		<div class="card-project__tag">
			<?php 
				echo is_tag_cgc();
				echo is_stocs_cgc();
				$width = floatval(get_field('min_width'));
				$length = floatval(get_field('min_length'));

				$coefficient_witdth = floatval(get_field('coefficient_witdth'));
				$coefficient_length = floatval(get_field('coefficient_length'));
				$sumW =	$width +	$coefficient_witdth;
				$sumH = $length + $coefficient_length;
			?>
		</div>
		
		<div class="card-project__title"><?php the_title(); ?></div>
		<div class="card-project__description">
			
			<div class="card-project__description-price">
		
				<h3>
					<?php if ( (!empty(get_field('price'))) ) : ?>
						от <span><?php echo get_field('price')?></span> ₽
					<?php else :?>
						| 
					<?php endif; ?>
				</h3>
			</div>
			<div class="card-project__description-icons">
				<span class="icon-icon1"><?php echo get_field('total_area')?> м<sup>2</sup></span>
				<span class="icon-icon3"><?php echo get_field('bedrooms')?></span>
			
				<span class="icon-icon2"><?php echo $sumW . " ". "x". " " . $sumH?> м</span>
				<span class="icon-icon4"><?php echo get_field('bathrooms')?></span>
			</div>
		</div>
		<div class="card-project__button">
			<a class="btn-primary btn-primary--outline btn-primary--icon icon-arrow-right" href="<?php the_permalink(); ?>">Подробнее</a>
			<a class="btn-secondary btn-secondary--icon icon-arrow-right" href="<?php the_permalink(); ?>"> Подробнее</a>
		</div>
	</div>
</div>		