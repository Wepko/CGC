<section class="contacts <?php echo $args == 'dark' ? 'contacts--dark' : ''; ?>">
	<div class="container">
		<div class="contacts__wrapper">
			<div class="contacts__info">
				<div class="contacts__info-title text-accent">Контакты</div>
				<div class="contacts__info-description">Есть над чем задуматься: сторонники тоталитаризма в науке.</div>
				<div class="contacts__info-content">
					<p class="icon-email">email@company.com</p>
					<p class="icon-phone">8 800 000 00 00</p>
					<p class="icon-adress">ул. Герасима Курина, д. 10, корп. 2</p>
				</div>
				<div class="contacts__info-social">
					<div class="social"><a class="icon-facebook social__element" href="#"></a><a class="icon-twiter social__element" href="#"></a><a class="icon-instagram social__element" href="#"></a></div>
				</div>
			</div>
			<div class="contacts__form">
				<div class="contacts__form-title">Обратная <span class="text-accent">связь</span></div>
				<?php echo do_shortcode( '[contact-form-7 id="441" title="Контактная форма 1"]' ); ?>
				<!-- <form class="form" action="#" method="POST">
					<div class="form__field">
						<div class="inputbox">
							<input id="input0" type="text" required=""/>
							<label for="input0">Ваше имя </label><span class="underline"></span>
						</div>
					</div>
					<div class="form__field">
						<div class="inputbox">
							<input id="input1" type="text" required=""/>
							<label for="input1">Телефон</label><span class="underline"></span>
						</div>
					</div>
					<div class="form__field">
						<div class="inputbox">
							<textarea id="input2" type="text" rows="3" required=""></textarea>
							<label for="input2">Сообщение</label><span class="underline"></span>
						</div>
					</div>
					<div class="form__field">
						<label class="checkbox path">
							<input type="checkbox"/>
							<svg viewBox="0 0 21 21">
								<path d="M5,10.75 L8.5,14.25 L19.4,2.3 C18.8333333,1.43333333 18.0333333,1 17,1 L4,1 C2.35,1 1,2.35 1,4 L1,17 C1,18.65 2.35,20 4,20 L17,20 C18.65,20 20,18.65 20,17 L20,7.99769186"></path>
							</svg><span id="ch1" name="ch1">Даю согласие на обработку персональных данных</span>
						</label>
					</div><a class="btn-primary" href="#">Заказать звонок</a>
				</form> -->
			</div>
		
		</div>
	</div>
</section>