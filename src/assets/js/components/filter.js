import $ from "jquery";
// Настройка меню 
	$('.menu-item-has-children').addClass(() => 'navigation__subnav icon-arrow-down');
// Кнопка раскрытия услуг еще
	$('.projects__filter-next').on('click', (e) => {
		e.preventDefault();
		$('.projects__filter-services').toggleClass('active')
		$('.projects__filter-next').toggleClass('active')
	}) 
	/////////////////////////////Фильтер///////////////////////////////////////
	const loaderHTML = () => {
		return `<div class="preloader preloader--part">
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
</div>`;
}



const createData = (filter, action='hello') => {
	const obj = {
		action: 'hello',
		filter,
	}

	return obj;
}



const switcher = $('.can-toggle');

const switcherCheckbox = switcher.find('input');

const labels = $('.projects__filter-buttons label');
const btnMore = $('#more');
// Состояние фильтра


const filterArg = {
	swithcerType: 'implemented',
	servicesId: 'all',
	paged: 1,
	maxPages: typeof(btnMore.data('param')) == 'number' ? btnMore.data('param') : 1,
}

console.log('max', filterArg.maxPages);

const queryAjax = (data, type) => {
	$.ajax({
		url: true_obj.ajaxurl,
		data,
		method: "POST",
		
		beforeSend(xhr) {
			switcherCheckbox.prop('disabled', true);
		},
		success(result) {
			switcherCheckbox.prop('disabled', false);
			//console.log(result);

			const response = JSON.parse(result);
			//console.log(response);

			const projects = response['projects'].length != 0  ? 
			response['projects'].reduce( (prevProject, project) => prevProject + project ) :
			' ';

			if ($('.projects').data('slider')) {
				type = 'slider';
			}

			switch (type) {
				case 'more':				
					$('.projects__product').append(projects);
					filterArg.maxPages = response.maxPages;
					break;
				case 'slider': 
					const sliderWrapper = response['projects'].length != 0  ? 
					response['projects'].map( (elem) => `<div class="swiper-slide">${elem}</div>`) :
					' ';

					const sliderProjects = sliderWrapper.length != 0  ? 
					sliderWrapper.reduce( (prevProject, project) => prevProject + project ) :
					' ';
				
					//const script = `<script src="//${location.hostname}/wp-content/themes/wp-pro/dist/assets/js/slider.js"></script>`;
					const script = '';
					
					$('.projects__product-slider .swiper-wrapper').html(sliderProjects + script);

					filterArg.maxPages = response.maxPages;
					break;
				default:
					$('.projects__product').html(projects);
					filterArg.maxPages = response.maxPages;
			}	
		}
	})
}


const switcherChange = (checked, swithcerType) => {
	switcherCheckbox.prop("checked", Boolean(checked))
	filterArg.swithcerType = String(swithcerType);
	filterArg.paged = 1;
	const data = createData(filterArg);
	queryAjax(data);
	return false;
}

const hash = location.hash.slice(1);

if (hash === "implemented") {
	switcherChange(false, 'implemented');
}

if (hash === "current") {
	switcherChange(true, 'current');
}

window.addEventListener("hashchange", () => {
	const hash = location.hash.slice(1);
	if (hash === "implemented") {
		switcherChange(false, 'implemented');
	}
	
	if (hash === "current") {
		switcherChange(true, 'current');
	}
})

switcher.on('change', (e) => {
	if (e.target.checked) {
		filterArg.swithcerType = 'current';
		history.pushState(null, 'current', `${location.pathname}#current`);
	} else {
		filterArg.swithcerType = 'implemented';
		history.pushState(null, 'implemented', `${location.pathname}#implemented`);
	}

	btnMore.show();
	filterArg.paged = 1;
	const data = createData(filterArg)
	queryAjax(data);
	return false;
})

labels.on('click', (e) => {

	const inputId = e.target.htmlFor;
	const input = $(`.projects__filter-buttons input[id=${inputId}]`);
	const inputValue = input.val();

	filterArg.servicesId = inputValue;

	const data = createData(filterArg);

	queryAjax(data);
})

btnMore.on('click', (e) => {
	e.preventDefault();
	console.log(filterArg);
	console.log('btnMore', filterArg.maxPages, '>', filterArg.paged);
	if (filterArg.maxPages > filterArg.paged) {
		filterArg.paged += 1; 
		const data = createData(filterArg);
		queryAjax(data, 'more');
	} else {
		btnMore.hide();
		return true;
	}
})
