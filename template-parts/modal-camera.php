<div class="modal micromodal-slide" id="modal-2" aria-hidden="true">
  <div class="modal__overlay" tabindex="-1" data-custom-close="modal-2">
    <div class="modal__container" role="dialog" aria-modal="true" aria-labelledby="modal-2-title">
      <header class="modal__header">
        <h2 class="modal__title" id="modal-2-title">
					Заказать проект
        </h2>
        <button class="modal__close" aria-label="Close modal" data-custom-close="modal-2"></button>
      </header>
      <main class="modal__content" id="modal-2-content">
<!-- 
		 -->

						
					<div class="slider">

						<div class="slider-camera">
							<div class="swiper-wrapper">
							<?php $camers = get_field('camers'); ?>
							
							<?php if ( is_array( $camers ) ) : ?>
								<?php foreach ($camers as $slide) : ?>
										<div class="swiper-slide"> 
										<iframe src="https://ipeye.ru/ipeye_service/api/iframe.php?iframe_player=1&dev=<?php echo $slide['id_camera'];?>&autoplay=0&archive=1" width="800" height="600" frameBorder="0" seamless="seamless" allowfullscreen>Ваш браузер не поддерживает фреймы!</iframe>
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