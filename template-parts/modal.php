<div class="modal micromodal-slide" id="modal-1" aria-hidden="true">
  <div class="modal__overlay" tabindex="-1" data-custom-close="modal-1">
    <div class="modal__container" role="dialog" aria-modal="true" aria-labelledby="modal-1-title">
      <header class="modal__header">
        <h2 class="modal__title" id="modal-1-title">
					Заказать проект
        </h2>
        <button class="modal__close" aria-label="Close modal" data-custom-close="modal-1"></button>
      </header>
      <main class="modal__content" id="modal-1-content">
        <p>
				Оставь заявку и мы перезвоним в течении 15 минут
        </p>
				<?php echo do_shortcode( '[contact-form-7 id="441" title="Контактная форма 1"]' ); ?>
      </main>

    </div>
  </div>
</div>


<div class="modal micromodal-slide" id="modal-checkbox" aria-hidden="true">
  <div class="modal__overlay" tabindex="-1" data-custom-close="modal-checkbox">
    <div class="modal__container" role="dialog" aria-modal="true" aria-labelledby="modal-checkbox-title">
      <header class="modal__header">
        <h2 class="modal__title" id="modal-checkbox-title">
					Согласие на обработку персональных данных
        </h2>
        <button class="modal__close" aria-label="Close modal" data-custom-close="modal-checkbox"></button>
      </header>
      <main class="modal__content modal__content--form"  id="modal-checkbox-content">
				<?php echo get_field("contact-popup-form", 117)?>
      </main>

    </div>
  </div>
</div>


