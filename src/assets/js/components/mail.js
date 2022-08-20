import $ from "jquery";

const form = $('#mail');

form.on('submit', (e) => {
	console.log('asdf');
	e.preventDefault();
	const dataForm = form.serializeArray();
	const post_id = form.find('input[type=submit]').attr("data-post-id");
	console.log(post_id);
	$.ajax({
		url: true_obj.ajaxurl,
		data: {
			action: 'subscribe',
			email: dataForm[0].value,
			post_id,
		},
		method: "POST",
		
		beforeSend(xhr) {
			console.log("Идет загрузка...");
		},
		success(result) {
			
			console.log("итог", result);
			// const response = JSON.parse(result);
			// console.log(response);
	
		}
	})

}) 

