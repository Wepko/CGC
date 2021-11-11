<?php
/**
 * The template for displaying the footer
 * Contains the closing of the #content div and all content after.
 */
?>

    <footer class="footer">
      <div class="container">
        <div class="footer__wrapper">
          <div class="footer__logo">
            <a  href="<?php echo get_site_url()?>">
              <img src="<?php echo  get_template_directory_uri() . '/assets/img/icon/logo-white.svg' ?>" alt="">
          </a>
        </div>
          <div class="footer__links">
            <div class="footer__links-column">
              <h4>Услуги</h4><a href="">Проектирование</a><a href="">Сбор исходно-разрешительной документации</a><a href="">Дизайн проект</a><a href="">Архитектурное проектирование</a><a href="">Проектирование зданий</a><a href="">Проектирование инженерных коммуникаций</a><a href="">Проектирование систем безопасности и связи</a><a href="">Ландшафтное проектирование</a><a href="">Строительство</a><a href="">Сопровождение</a>
            </div>
            <div class="footer__links-column">
              <h4>Проекты</h4><a href="">Каталог проектов</a><a href="">Текущие проекты</a><a href="">Реализованные проекты</a><a href="">Объекты для продажи</a>
            </div>
            <div class="footer__links-column">
              <h4>О компании</h4><a href="">Контакты</a><a href="">Партнёры</a><a href="">О нас</a>
            </div>
          </div>
        </div>
      </div>
      <div class="footer__copyright">
        <div class="container">© CGC</div>
      </div>
    </footer>
    <?php wp_footer(); ?>
  </body>
</html>