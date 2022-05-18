<div class="card-project card-project--camera" style="background-image: url(); background-size: cover">
	<img src="<?php echo get_field('thumb')['url']; ?>" />

	<div class="card-project__components">
		
		<div class="card-project__tag">
		</div>
		
		<div class="card-project__title"><?php the_title(); ?></div>
		<div class="card-project__description">
	
			<div class="card-product__description-text">
				<p><?php echo get_field('content');?></p>
			</div>
		</div>
		<div class="card-project__button">
			<a class="btn-primary btn-primary--outline btn-primary--icon icon-arrow-right" href="<?php the_permalink(); ?>">Смотреть камеры</a>
			<a class="btn-secondary" data-custom-open="modal-camera-<?php echo $args['id'];?>" data-cameraId="<?php echo $args['id'];?>" href="javascript:void(0);"> Смотреть камеры</a>
		</div>
	</div>
</div>		