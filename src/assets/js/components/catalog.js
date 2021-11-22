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
			console.log(result);

			const response = JSON.parse(result);
			console.log(response);

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

const createData = (filter, action='catalog') => {
	const obj = {
		action: 'catalog',
		filter,
	}

	return obj;
}

const filterArg = {
	area: 'full',
	bedroom: 'full',
	bathroom: 'full',
	paged: 1,
	maxPages: 1,
}

const area = $('#area');
const bedroom = $('#bedroom');
const bathroom = $('#bathroom');

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
