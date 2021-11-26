import $ from "jquery";

const queryAjax = (data, type) => {
	$.ajax({
		url: true_obj.ajaxurl,
		data,
		method: "POST",
		
		beforeSend(xhr) {
		
		},
		success(result) {
			//switcherCheckbox.prop('disabled', false);
			//console.log(result);

			const response = JSON.parse(result);
			//console.log(response);

			const projects = response['projects'].length != 0  ? 
			response['projects'].reduce( (prevProject, project) => prevProject + project ) :
			' ';

			switch (type) {
				case 'more':				
					$('.projects__product').append(projects);
					filterArg.maxPages = response.maxPages;
					break;
			
				default:
					$('.projects__product').html(projects);
					filterArg.maxPages = response.maxPages;
			}	
		}
	})
}

const isType = Boolean($('section[data-type]').data('type') == 'objsale');
console.log(isType, $('section[data-type]').data('type'));

const createData = (filter, action='catalog') => {
	const obj = {
		action: isType ? 'objsale' : 'catalog',
		filter,
	}

	return obj;
}


const area = $('#area');
const bedroom = $('#bedroom');
const bathroom = $('#bathroom');
const reset = $('#reset');
const btnMore = $('#more2');


const filterArg = {
	area: 'full',
	bedroom: 'full',
	bathroom: 'full',
	paged: 1,
	maxPages: typeof(btnMore.data('param')) == 'number' ? btnMore.data('param') : 1,
}

reset.on('click', e => {
	filterArg.area = "full";
	filterArg.bedroom = "full";
	filterArg.bathroom = "full";
	filterArg.maxPages = 1;
	filterArg.paged = 1;
	const customSiblings = el => [].slice.call(el.parentNode.children).filter(child => (child !== el));
	const list = $('ul.list');
	list.each((i, ul) => {
		const text = ul.querySelector('li[data-display]').getAttribute('data-display')
		
		const span = customSiblings(ul)[0];
		span.innerText = text;

		ul.querySelector('li.selected').classList.remove('selected');
		ul.querySelector('li[data-display]').classList.add('selected');
	});

	const data = createData(filterArg);
	queryAjax(data);
})


area.on('change', (e) => {
	const value = area.val();
	filterArg.area = value;
	const data = createData(filterArg);
	queryAjax(data);
})

bedroom.on('change', (e) => {
	const value = bedroom.val();
	filterArg.bedroom = value;
	const data = createData(filterArg);
	queryAjax(data);
})

bathroom.on('change', (e) => {
	const value = bathroom.val();
	filterArg.bathroom = value;
	const data = createData(filterArg);
	queryAjax(data);
})


btnMore.on('click', (e) => {
	e.preventDefault();
	//console.log(filterArg);
	//console.log('btnMore', filterArg.maxPages, '>', filterArg.paged);
	if (filterArg.maxPages > filterArg.paged) {
		filterArg.paged += 1; 
		const data = createData(filterArg);
		queryAjax(data, 'more');
	} else {
		btnMore.hide();
		return true;
	}
})