<?php
	// echo '<pre>';
	// var_dump($args[0]['url']);
	// echo '</pre>';

	$photos = $args[0];
	$index = $args[1];
?>
<div class="modal micromodal-slide" id="modal-accordion-<?php echo $index?>" aria-hidden="true">
  <div class="modal__overlay" tabindex="-1" data-custom-close="modal-accordion-<?php echo $index?>">
    <div class="modal__container" role="dialog" aria-modal="true" aria-labelledby="modal-3-title">
      <header class="modal__header">
        <h2 class="modal__title" id="modal-3-title">
					Заказать проект
        </h2>
        <button class="modal__close" aria-label="Close modal" data-custom-close="modal-accordion-<?php echo $index?>"></button>
      </header>
      <main class="modal__content" id="modal-3-content">

						
					<div class="slider">
						
						<div class="slider-gallery-main-<?php echo $index;?>">
							<div class="swiper-wrapper">
						
							<?php if ( is_array( $photos ) ) : ?>
								<?php foreach ($photos as $photo) : ?>
									<div class="swiper-slide"> 
										<div class="card-gallery">
											<div class="card-gallery__img">
												<img src="<?php echo $photo['url']?>" alt="">
											</div>
										</div>
									</div>
								<?php endforeach; ?>
							<?php endif; ?>
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

				</main>

    </div>
  </div>
</div>