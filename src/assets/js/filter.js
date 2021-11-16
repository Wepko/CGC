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

	function createHTMLCardProduct(projects) {
		
		const htmlProjects = [];
		for (const project of projects) {
			console.log(project['img']);
			const tag = () => {
				
				if (project['tag'] == 'object_sale')  {
					return `<p class="tag tag_solid">объект в продаже</p>`;
				} 
	
				return '';
			}
			const tagStock = () => {

				if (project['stock']) {
					return `<p class="tag tag_primary">Спецпредложение</p>`;
				}
				return '';
			}

			const htmlProject = 
			`<div class="swiper-slide">
				<div class="card-product">
					<img src="${project['img']['url']}" alt="">
					<div class="card-product__components">
					<div class="card-product__tag">
						${tag()}
						${tagStock()}
					</div>
					<div class="card-product__title">${project['title']}</div>
					<div class="card-product__description">
						<div class="card-product__description-icons">
							<span class="icon-icon1">${project['total_area']} м<sup>2</sup></span>
							<span class="icon-icon2">${project['rooms']}</span>
							<span class="icon-icon3">от ${project['min_area']} соток</span>
							<span class="icon-icon4">${project['bathrooms']}</span></div>
						<div class="card-product__description-text">
						<p>${project['content']}</p>
						</div>
					</div>
					<div class="card-product__button">
						<a class="btn-secondary btn-secondary--icon icon-arrow-right" href="${project['link']}"> Подробнее</a>
					</div>
					</div>
				</div>
			</div>
			`

			htmlProjects.push(htmlProject);
		}
		return htmlProjects;
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
			success(result) {
				$('#d').prop('disabled', false);
				const received = JSON.parse(result);
				const projects = createHTMLCardProduct(received['projects']);

				if (typeSlider) {
					$('.projects .swiper-wrapper').html(projects);
				} else {
					$('.projects__product').html(projects);
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
		// e.preventDefault();
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
	//paged: startParam['paged']
	const data = {
		action: 'more',
		paged: 1, 
		filter: filterArg
	}

	const renderProjects = (place, projects) => {
		const htmlProjects = createHTMLCardProduct(projects);

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
				console.log('Запрос',data);
				const received = JSON.parse(result);
				const projects = received['projects'];
				const param = received['param'];
				console.log('Ответ', received);
				//console.log(param);
				//console.log('start', data.paged)

				

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
