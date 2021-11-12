<?php
/**
 * The template for displaying archive pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package cgc
 */

get_header();
?>


<section class="service container">
      <div class="service__title gs_reveal gs_reveal_fromLeft">Наши <span class="text-accent">услуги</span></div>
      <div class="service__description gs_reveal gs_reveal_fromLeft">Прежде всего, современная методология разработки прекрасно подходит для реализации распределения.</div>
      <div class="service__accordion gs_reveal gs_reveal_fromRight">
        <dl class="badger-accordion js-badger-accordion">
          <dt class="badger-accordion__header"><a class="badger-accordion__trigger js-badger-accordion-header">
              <div class="badger-accordion__trigger-title">Сбор исходно-разрешительной документации</div>
              <div class="badger-accordion__trigger-icon"><i class="icon-plus"></i></div></a></dt>
          <dd class="badger-accordion__panel js-badger-accordion-panel">
            <div class="badger-accordion__panel-inner js-badger-accordion-panel-inner">
              <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Hic, recusandae!</p>
            </div>
          </dd>
          <dt class="badger-accordion__header"><a class="badger-accordion__trigger js-badger-accordion-header">
              <div class="badger-accordion__trigger-title">Проектирование</div>
              <div class="badger-accordion__trigger-icon"><i class="icon-plus"></i></div></a></dt>
          <dd class="badger-accordion__panel js-badger-accordion-panel">
            <div class="badger-accordion__panel-inner text-module js-badger-accordion-panel-inner"><a class="badger-accordion__panel-subitem" href="#">Архитектурное проектирование</a><a class="badger-accordion__panel-subitem" href="#">Проектирование зданий</a><a class="badger-accordion__panel-subitem" href="#">Проектирование инженерных коммуникаций</a><a class="badger-accordion__panel-subitem" href="#">Дизайн проектирование</a><a class="badger-accordion__panel-subitem" href="#">Ландшафтное проектирование</a></div>
          </dd>
          <dt class="badger-accordion__header"><a class="badger-accordion__trigger js-badger-accordion-header">
              <div class="badger-accordion__trigger-title">Строительство</div>
              <div class="badger-accordion__trigger-icon"><i class="icon-plus"></i></div></a></dt>
          <dd class="badger-accordion__panel js-badger-accordion-panel">
            <div class="badger-accordion__panel-inner text-module js-badger-accordion-panel-inner"><a class="badger-accordion__panel-subitem" href="#">Строительство объекта</a><a class="badger-accordion__panel-subitem" href="#">Внешняя отделка</a><a class="badger-accordion__panel-subitem" href="#">Внутренняя отделка</a><a class="badger-accordion__panel-subitem" href="#">Благоустройство территории</a></div>
          </dd>
          <dt class="badger-accordion__header"><a class="badger-accordion__trigger js-badger-accordion-header">
              <div class="badger-accordion__trigger-title">Сопровождение</div>
              <div class="badger-accordion__trigger-icon"><i class="icon-plus"></i></div></a></dt>
          <dd class="badger-accordion__panel js-badger-accordion-panel">
            <div class="badger-accordion__panel-inner text-module js-badger-accordion-panel-inner">
              <p>Although badgers are a solitary animal the young Hog Badger tends to be quite playful and social.  I would be careful playing with any animal that has extremely large claws.  Remember folks, it is all fun and games until someone loses an eye.</p>
              <p>Hog Badgers are omnivores and they feed on a variety of things from honey and fruit to insects and small mammals.</p>
              <p>A young / baby of a hog badger is called a 'kit'. The females are called 'sow' and males 'boar'. A hog badger group is called a 'cete, colony, set or company'.</p>
            </div>
          </dd>
        </dl>
      </div>
    </section>
    <section class="projects">
      <div class="container">
        <div class="projects__title">
          <p>Наши <span class="text-accent">проекты</span></p><a class="btn-primary btn-primary--outline btn-primary--icon icon-arrow-right" href="#"> Все проекты</a>
        </div>
        <div class="projects__filter">
          <div class="projects__filter-top">
            <div class="projects__filter-switcher">
              <div class="can-toggle demo-rebrand-1">
                <input id="d" type="checkbox">
                <label for="d">
                  <div class="can-toggle__switch" data-checked="Текущие" data-unchecked="Реализованные"></div>
                </label>
              </div>
            </div>
            <div class="projects__filter-buttons">
              <div class="projects__filter-button">Все</div>
              <div class="projects__filter-button">Проектирование</div>
              <div class="projects__filter-button">Сбор исходно-разрешительной документации</div>
            </div>
            <div class="projects__filter-next"><span>Еще</span><i class="icon-arrow-right"> </i></div>
          </div>
          <div class="projects__filter-bottom">
            <div class="projects__filter-buttons hidden-js">
              <div class="projects__filter-button">Архитектурное проектирование</div>
              <div class="projects__filter-button">Проектирование зданий</div>
              <div class="projects__filter-button">Проектирование инженерных коммуникаций</div>
              <div class="projects__filter-button">Дизайн проект</div>
              <div class="projects__filter-button">Проектирование систем безопасности и связи</div>
              <div class="projects__filter-button">Ландшафтное проектирование</div>
              <div class="projects__filter-button">Строительство</div>
              <div class="projects__filter-button">Сопровождение</div>
            </div>
          </div>
        </div>
        <div class="projects__product">
          <div class="slider-project">
            <!-- Additional required wrapper-->
            <div class="swiper-wrapper">
              <!-- Slides-->
              <div class="swiper-slide">
                <div class="card-product"><img src="img/home1.png" alt="">
                  <div class="card-product__components">
                    <div class="card-product__tag">
                      <p class="tag tag_solid">Обьект в продаже</p>
                    </div>
                    <div class="card-product__title">Дан-Бланш G+</div>
                    <div class="card-product__description">
                      <div class="card-product__description-icons"><span class="icon-icon1">160 м<sup>2</sup></span><span class="icon-icon2">4</span><span class="icon-icon3">от 6.0 соток</span><span class="icon-icon4">2</span></div>
                      <div class="card-product__description-text">
                        <p>Приятно, граждане, наблюдать, как элементы политического процесса своевременно верифицированы. Банальные, но неопровержимые выводы...</p>
                      </div>
                    </div>
                    <div class="card-product__button"><a class="btn-secondary btn-secondary--icon icon-arrow-right" href="#"> Подробнее</a></div>
                  </div>
                </div>
              </div>
              <div class="swiper-slide">
                <div class="card-product"><img src="img/home2.png" alt="">
                  <div class="card-product__components">
                    <div class="card-product__tag">
                      <p class="tag tag_solid">Обьект в продаже</p>
                    </div>
                    <div class="card-product__title">Монблан VS</div>
                    <div class="card-product__description">
                      <div class="card-product__description-icons"><span class="icon-icon1">160 м<sup>2</sup></span><span class="icon-icon2">4</span><span class="icon-icon3">от 6.0 соток</span><span class="icon-icon4">2</span></div>
                      <div class="card-product__description-text">
                        <p>Приятно, граждане, наблюдать, как элементы политического процесса своевременно верифицированы. Банальные, но неопровержимые выводы...</p>
                      </div>
                    </div>
                    <div class="card-product__button"><a class="btn-secondary btn-secondary--icon icon-arrow-right" href="#"> Подробнее</a></div>
                  </div>
                </div>
              </div>
              <div class="swiper-slide">
                <div class="card-product"><img src="img/home3.png" alt="">
                  <div class="card-product__components">
                    <div class="card-product__tag">
                      <p class="tag tag_solid">Обьект в продаже</p>
                    </div>
                    <div class="card-product__title">Норден GX</div>
                    <div class="card-product__description">
                      <div class="card-product__description-icons"><span class="icon-icon1">160 м<sup>2</sup></span><span class="icon-icon2">4</span><span class="icon-icon3">от 6.0 соток</span><span class="icon-icon4">2</span></div>
                      <div class="card-product__description-text">
                        <p>Приятно, граждане, наблюдать, как элементы политического процесса своевременно верифицированы. Банальные, но неопровержимые выводы...</p>
                      </div>
                    </div>
                    <div class="card-product__button"><a class="btn-secondary btn-secondary--icon icon-arrow-right" href="#"> Подробнее</a></div>
                  </div>
                </div>
              </div>
              <div class="swiper-slide">
                <div class="card-product"><img src="img/home4.png" alt="">
                  <div class="card-product__components">
                    <div class="card-product__tag">
                      <p class="tag tag_solid">Обьект в продаже</p>
                    </div>
                    <div class="card-product__title">Монблан VS</div>
                    <div class="card-product__description">
                      <div class="card-product__description-icons"><span class="icon-icon1">160 м<sup>2</sup></span><span class="icon-icon2">4</span><span class="icon-icon3">от 6.0 соток</span><span class="icon-icon4">2</span></div>
                      <div class="card-product__description-text">
                        <p>Приятно, граждане, наблюдать, как элементы политического процесса своевременно верифицированы. Банальные, но неопровержимые выводы...</p>
                      </div>
                    </div>
                    <div class="card-product__button"><a class="btn-secondary btn-secondary--icon icon-arrow-right" href="#"> Подробнее</a></div>
                  </div>
                </div>
              </div>
            </div>
            <div class="swiper-buttons">
              <div class="swiper-button-next"></div>
              <div class="swiper-button-prev"></div>
            </div>
            <div class="swiper-scrollbar"></div>
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
