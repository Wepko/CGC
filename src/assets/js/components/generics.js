import $ from "jquery";

console.log('generics');
$('.project-header__square').on('click', (e) => {
	e.preventDefault();
	console.log('click');

	$('#exterior').toggleClass('slider-hidden');
	$('#planning').toggleClass('slider-hidden');
})
