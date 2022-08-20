import $ from "jquery";


$('.sms-type select').on('change', function() {
	console.log($('.sms-type select'));
	var title = $('#title').val();
	console.log(this.value);
	if (this.value == 'vodoprovod') {
		var message = 'Закончен этап строительства «Водопровод» на объекте «' +  title+ '»';
	}
	if (this.value == 'kanal') {
		var message = 'Закончен этап строительства «Канализация» на объекте «' + title + '»';
	}
	if (this.value == 'electr') {
		var message = 'Закончен этап строительства «Электричество» на объекте «' + title + '»';
	}
	if (this.value == 'light') {
		var message = 'Закончен этап строительства «Столбы освещения» на объекте «' + title + '»';
	}
	if (this.value == 'plp_roads') {
		var message = 'Закончен этап строительства «Пешеходное покрытия» на объекте «' + title + '»';
	}
	if (this.value == 'car_roads') {
		var message = 'Закончен этап строительства «Дорожное покрытие» на объекте «' + title + '»';
	}
	if (this.value == 'green') {
		var message = 'Закончен этап строительства «Озеленения» на объекте «' + title + '»';
	}
	if (this.value == 'cctv') {
		var message = 'Закончен этап строительства «Видеонаблюдения» на объекте «' + title + '»';
	}
	if (this.value == 'fire') {
		var message = 'Закончен этап строительства «Пожарные гидранты» на объекте «' + title + '»';
	}
	if (this.value == 'megaphone') {
		var message = 'Закончен этап строительства «Мегафон» на объекте «' + title + '»';
	}

	$('.sms-text textarea').val(message);

});

$('.send-mail button').on('click', function() {
	console.log('click');
	var message = $('.sms-text textarea').val();
	var post_id = $('#post_ID').val();

	$('.send-mail label').html('Рассылаю, ждите, не закрывайте страницу');
	$('.send-mail label').css({
		color: 'red',
		fontSize: '18px'
	});


	$.ajax({
		type: "POST",
		url: true_obj.ajaxurl,
		data: {
			action: 'mail',
			message: message,
			post_id: post_id,
		},
	}).done(function (data) {

		console.log(data);

		$('.send-mail label').html('Рассылка закончена!');
		$('.send-mail label').css({
			color: 'green',
			fontSize: '18px'
		});

		setTimeout(() => {
			$('.send-mail label').html('Отправить');
			$('.send-mail label').css({
				color: 'black',
				fontSize: '13px'
			});
		}, 5000);


	});




	console.log(11111);
});

