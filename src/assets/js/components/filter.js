jQuery($ => {


	$('.menu-item-has-children').addClass(() => 'navigation__subnav icon-arrow-down');

/////////////////////////////Фильтер///////////////////////////////////////
	const filter = $('.can-toggle');
	const input = document.querySelector('#d');



	function createData(filter, typeSlider = false) {
		const obj = {
			action: 'hello',
			typeSlider: true,
			filter
		};
		
		return obj;
	}

	const filterArg = {
		swithcerType: 'implemented',
		servicesId: 'all'
	}

	const typeSlider = Boolean($('.projects').data('slider'));

	function queryAjax(data) {
		$.ajax({
			url: true_obj.ajaxurl,
			data,
			method: "POST",

			beforeSend(xhr) {
				$('#d').prop('disabled', true);
				if (typeSlider) {
					$('.projects .swiper-wrapper').html(`<div class="preloader preloader--part">
					<div class="banter-loader">
					<div class="banter-loader__box"></div>
					<div class="banter-loader__box"></div>
					<div class="banter-loader__box"></div>
					<div class="banter-loader__box"></div>
					<div class="banter-loader__box"></div>
					<div class="banter-loader__box"></div>
					<div class="banter-loader__box"></div>
					<div class="banter-loader__box"></div>
					<div class="banter-loader__box"></div>
					</div>
				</div>`)
				} else {

					$('.projects__product').html(`<div class="preloader preloader--part">
					<div class="banter-loader">
					<div class="banter-loader__box"></div>
					<div class="banter-loader__box"></div>
					<div class="banter-loader__box"></div>
					<div class="banter-loader__box"></div>
					<div class="banter-loader__box"></div>
					<div class="banter-loader__box"></div>
					<div class="banter-loader__box"></div>
					<div class="banter-loader__box"></div>
					<div class="banter-loader__box"></div>
					</div>
				</div>`)
				}

			},
			success(data) {
				$('#d').prop('disabled', false);
				if (typeSlider) {
					$('.projects .swiper-wrapper').html(data);
					console.log(data)
				} else {
					$('.projects__product').html(data);
				}
	
			}
		})
	}
	


	const hash = location.hash.slice(1);

	if (hash === "implemented") {
		input.checked = false;
		filterArg.swithcerType = 'implemented';
		const data = createData(filterArg);
		queryAjax(data);
	}

	if (hash === "current") {
		input.checked = true;
		filterArg.swithcerType = 'current';
		const data = createData(filterArg);
		queryAjax(data);
	}

	window.addEventListener("hashchange", () => {
		const hash = location.hash.slice(1);
		if (hash === "implemented") {
			input.checked = false;
			filterArg.swithcerType = 'implemented';
			const data = createData(filterArg)
			queryAjax(data);
		}
		
		if (hash === "current") {
			input.checked = true;
			filterArg.swithcerType = 'current';
			const data = createData(filterArg)
			queryAjax(data);
		}
	})

	filter.on('change', (e) => {
		if (e.target.checked) {
			filterArg.swithcerType = 'current';
			history.pushState(null, 'current', `${location.pathname}#current`);
		} else {
			filterArg.swithcerType = 'implemented';
			history.pushState(null, 'implemented', `${location.pathname}#implemented`);
		}

		const data = createData(filterArg)

		queryAjax(data);
	})



	$('.projects__filter-buttons label').on('click', (e) => {
		e.preventDefault();
		const inputId = e.target.htmlFor;
		const input = $(`.projects__filter-buttons input[id=${inputId}]`);
		const inputValue = input.val();

		filterArg.servicesId = inputValue;

		const data = createData(filterArg);

		queryAjax(data);
		
	})

	$('.projects__filter-next').on('click', (e) => {
		e.preventDefault();
		$('.projects__filter-services').toggleClass('active')
		$('.projects__filter-next').toggleClass('active')
	}) 
	


/////////////////////////////Загрузить еще///////////////////////////////////////

	const btnMore = $('#more');
	const startParam =  btnMore.data('param');
	//param = {paged: 1, maxPages: ???, type: 'current', services: 'all'}
	
	const data = {
		action: 'more',
		paged: startParam['paged'], 
		filter: filterArg
	}

	const renderProjects = (place, projects) => {
		const htmlProjects = [];
		for (const project of projects) {
			
			const htmlProject = `<div class="card-product"><img src="img/home4.png" alt="">
				<div class="card-product__components">
				<div class="card-product__tag">
					<p class="tag tag_solid">${project['type']} </p>
				</div>
				<div class="card-product__title">${project['title']}</div>
				<div class="card-product__description">
					<div class="card-product__description-icons"><span class="icon-icon1">160 м<sup>2</sup></span><span class="icon-icon2">4</span><span class="icon-icon3">от 6.0 соток</span><span class="icon-icon4">2</span></div>
					<div class="card-product__description-text">
					<p>${project['content']}</p>
					</div>
				</div>
				<div class="card-product__button">
					<a class="btn-secondary btn-secondary--icon icon-arrow-right" href="<?php the_permalink(); ?>"> Подробнее</a>
				</div>
				</div>
			</div>`

			htmlProjects.push(htmlProject);
		}

		$(place).append(htmlProjects)
	}

	btnMore.on('click', (e) => {
		e.preventDefault();

		$.ajax({
			url: true_obj.ajaxurl,
			data,
			method: "POST",

			beforeSend(xhr) {
				btnMore.prop('disabled', true);
			},
			success(result) {
				console.log('Запрос',data)
				const received = JSON.parse(result);
				const projects = received['projects'];
				const param = received['param'];
				console.log('Ответ', received);
				console.log(param);
				console.log('start', data.paged)

				
				console.log(data.paged, param['maxPages'] )
				if (data.paged < param['maxPages'] ) {
					console.log('условие прошло');
					data.paged++;
					renderProjects('.projects__product', projects)
				} else {
					console.log('условие не прошло');
					data.paged = startParam['paged'];
				}

				console.log('end', data.paged)
				// if (data.paged  >=  param['maxPages']) {
				// 	btnMore.remove();
				// } 

			}
		})
	})

})