<section class="service container">
		<div class="service__title gs_reveal gs_reveal_fromLeft">Наши <span class="text-accent">услуги</span></div>
		<div class="service__description gs_reveal gs_reveal_fromLeft">Прежде всего, современная методология разработки прекрасно подходит для реализации распределения.</div>
		<div class="service__accordion gs_reveal gs_reveal_fromRight">

		<!-- <?php 
				$query = new WP_Query([
					'post_type' => 'services',
					'category_name' => 'proektirovanie',
					'posts_per_page' => -1,
				]);
				$i = 0;
				echo '<pre>';
				print_r($query);
				echo '</pre>';
				if ($query->have_posts()) {
					echo '<ul>';
						while($query->have_posts()) {
							$query->the_post();

							echo '<li>';
								echo get_the_title();
							echo '</li>';

							
						}
					echo '</ul>';
				}
				
			?> -->

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