<?php get_header(); ?>

<?php 
	/*
		Template Name: about
	*/
?>
		<?php get_template_part( 'template-parts/modal' ); ?>
		
    <section class="about">
      <div class="container">
        <div class="about__title"> 
          <h1>Информация <br><span class="text-accent">о компании </span></h1>
        </div>
        <div class="about__content">
          <div class="post">
            <div class="post__title"> 
              <h2> <span class="text-accent">Ценности </span><span>компании</span></h2>
            </div>
            <div class="post__content">
              <div class="about__description">
                <p>Наша цель — раздвинуть границы! Мы поднимаем стандарты строительной отрасли, хорошо знаем своё дело и не перестаём двигаться вперёд. </p>
                <p class="text-accent"> Мы стремимся к совершенству во всех направлениях и не изменяем своим идеалам: </p>
              </div>
              <div class="about__benefit"> 
                <div class="about-benefit icon-magic">
                  <h3>Новаторство</h3>
                  <ul>
                    <li>высокие стандарты</li>
                    <li>передовые идеи</li>
                    <li>революционный подход</li>
                    <li>вызов обыденности</li>
                  </ul>
                </div>
                <div class="about-benefit icon-rocet">
                  <h3>Развитие</h3>
                  <ul>
                    <li>амбициозность</li>
                    <li>постоянный рост</li>
                    <li>превосходство ожиданий клиента</li>
                    <li>коммерческая осведомлённость</li>
                  </ul>
                </div>
                <div class="about-benefit icon-professional">
                  <h3>Профессионализм</h3>
                  <ul>
                    <li>мастерство высокого уровня</li>
                    <li>решение сложных задач</li>
                    <li>безопасность</li>
                    <li>предупреждение возникновения проблем</li>
                  </ul>
                </div>
                <div class="about-benefit icon-socail">
                  <h3>Коллектив</h3>
                  <ul>
                    <li>взаимопомощь и уважение</li>
                    <li>открытость и честность</li>
                    <li>сплочённость</li>
                    <li>поддержка</li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
        </div>
				<!-- <p class="text-accent">Наша команда — это большая и дружная семья, состоящая из честных и надёжных профессионалов своего дела. Мы гордимся тем, что тщательно проверяем каждую деталь и неустанно следим за качеством работы, что позволяет не дожидаться возникновения проблем, а заранее выявлять потенциальные сложности на раннем этапе.</p> -->
        <div class="about__command">
					<?php	if( have_rows('block_information') ): ?>
						<?php	while( have_rows('block_information') ) : the_row(); ?>
							<div class="post">
								<div class="post__title"> 
									<h2> <span class="text-accent">	<?php echo get_sub_field('name_block');?> </span><span></span></h2>
								</div>
								<div class="post__content">
									<?php echo get_sub_field('description_block');?>
								</div>
							</div>
						<?php endwhile;?>
					<?php else : ?>

					<?php endif; ?>
        </div>
      </div>
    </section>
    <section class="process"> 
      <div class="container">
        <h2 class="process__title">	<?php echo get_field('process_title');?></h2>
        <div class="process__description">
					<?php echo get_field('process_description');?>
        </div>
        <div class="process__steps"> 
          <ul class="steps">
						<?php	if( have_rows('process_step') ): ?>
							<?php	while( have_rows('process_step') ) : the_row(); ?>
								<li class="steps__item"> 
									<h3><?php echo get_sub_field('process_step-title');?></h3>
									<div class="steps__content"> 
										<?php echo get_sub_field('process_step-description');?>
									</div>
								</li>
							<?php endwhile;?>
						<?php else : ?>
							
						<?php endif; ?>
            <!-- <li class="steps__item">
              <h3>Выбор участка</h3>
              <div class="steps__content"> 
                <p>Прежде всего необходимо выбрать участок, на котором будет производиться строительство. От его характеристик зависят многие технические тонкости, такие как глубина фундамента и используемые материалы. Поэтому на начальном этапе вместе с заказчиком мы производим поиск и подбор участка, оформляем покупку, а также проводим различного рода изыскания (топографические, геодезические, геологические и другие).</p>
              </div>
            </li>
            <li class="steps__item"> 
              <h3>Проектирование объекта <br> и подготовка документов</h3>
              <div class="steps__content"> 
                <ul>
                  <li>Оформление технического задания: определяемся с материалами для фундамента, стен, перекрытий, кровли и фасадной отделки;</li>
                  <li>Индивидуальное проектирование: составляем проект здания, хозяйственных построек, генплан участка и проект наружных инженерных сетей;</li>
                  <li>Подготовка и подписание документов (договор купли-продажи, договор обслуживания, расчёт сметы, договор подряда и нотариальная доверенность).</li>
                </ul>
              </div>
            </li>
            <li class="steps__item"> 
              <h3>Капитальное строительство</h3>
              <div class="steps__content"> 
                <p>На этом этапе, помимо прочего, происходит уточнение с заказчиком цветовых решений по фасаду и кровле, перечня материалов, комплектации дверей и гаражных ворот. Здесь обеспечивается:</p>
                <ul>
                  <li>Правовое сопровождение (получение уведомления о строительстве);</li>
                  <li>Подготовительные работы на площадке: создание временного ограждения, вырубка леса, уборка кустарников и зарослей, обустройство “строительного городка”, проведение временных коммуникаций и вертикальная планировка земельного участка;</li>
                  <li>Выбор участка и проекта для строительства частного дома;</li>
                  <li>Зонирование участка, геодезические работы;</li>
                  <li>Устройство фундамента (земляные, бетонные работы);</li>
                  <li>Возведение стен и межкомнатных перегородок;</li>
                  <li>Устройство  межэтажных перекрытий;</li>
                  <li>Устройство стропильной системы и монтаж кровельного покрытия;</li>
                  <li>Фасадные работы;</li>
                  <li>Монтаж окон и дверей.</li>
                </ul>
              </div>
            </li>
            <li class="steps__item">
              <h3>Дизайн-проект</h3>
              <div class="steps__content"> 
                <p>Разрабатываем план внутренней отделки помещений:</p>
                <ul>
                  <li>Эскизный проект интерьерных решений (функциональные планировки помещений и разработка стилевой концепции);</li>
                  <li>Рабочий проект интерьерных решений;</li>
                  <li>3D-визуализация интерьера.</li>
                </ul>
              </div>
            </li>
            <li class="steps__item">
              <h3>Инженерные коммуникации</h3>
              <div class="steps__content"> 
                <ul>
                  <li>Газоснабжение;</li>
                  <li>Проект и прокладка внутренних инженерных сетей: тёплые полы, отопление, канализация и водоснабжение, кондиционирование, вентиляция, телефония, пожарная и охранная сигнализация, система пожаротушения, интернет, элементы системы умного дома;</li>
                  <li>Строительно-монтажные работы по наружным сетям: подключение канализации, водоснабжения, электричества, организация системы полива и освещения на участке;</li>
                  <li>Финальная проверка работы инженерных систем и пуск в эксплуатацию.</li>
                </ul>
              </div>
            </li>
            <li class="steps__item">
              <h3>Внутренняя отделка</h3>
              <div class="steps__content"> 
                <ul>
                  <li>Подготовительные работы;</li>
                  <li>Внутренняя отделка: Черновая отделка; Чистовая отделка.</li>
                </ul>
              </div>
            </li>
            <li class="steps__item">
              <h3>Ландшафтные работы</h3>
              <div class="steps__content"> 
                <p>установка ограждений, въездных ворот, малых архитектурных объектов, дренаж, террасирование, освещение участка, посадка деревьев и кустарников, оформление газона и дорожек.</p>
              </div>
            </li>
            <li class="steps__item">
              <h3>Ввод в эксплуатацию <br> и передача документов</h3>
              <div class="steps__content"> 
                <p>Наше обслуживание гарантирует передачу объекта вместе со всей необходимой документацией и включает в себя регистрацию прав собственности на объект и присвоение почтового адреса.</p>
              </div>
            </li>
            <li class="steps__item">
              <h3>И наконец - новоселье! <br> Объект готов к эксплуатации!</h3>
              <div class="steps__content"> 
								<a class="btn-primary" data-custom-open="modal-1">Заказать проект</a>
							</div>
            </li> -->
          </ul>
					<div class="process__button">
						<a class="btn-primary" data-custom-open="modal-1">Заказать проект</a>
						<a href="javascript:void(0)" class="btn-secondary">Смотреть все шаги</a>
					</div>	
        </div>
      </div>
    </section>

		<?php get_template_part( 'template-parts/slider-projects' ); ?>

		<?php get_template_part( 'template-parts/question'); ?>

		<?php 
			$theme = 'dark';
			get_template_part( 'template-parts/contact', null, $theme ); 	
		?>

<?php get_footer(); ?>