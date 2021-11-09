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
    <div class="questions">
      <div class="container">
        <div class="questions__wrapper">
          <div class="questions__title">Остались 
            <div class="text-accent">вопросы?</div>
          </div>
          <div class="questions__description">Оставьте свой номер телефона и мы перезвоним вам в ближайшее время</div>
          <div class="questions__buttons"><a class="btn-primary" href="#">Заказать звонок</a></div>
        </div>
      </div>
    </div>
    <section class="contacts contacts--dark">
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
            <form class="form" action="#" method="POST">
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
            </form>
          </div>
        </div>
      </div>
    </section>


<?php get_footer(); ?>