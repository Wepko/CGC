import $ from "jquery";

console.log('generics');
$('.square').on('click', (e) => {
	e.preventDefault();
	console.log('click');

	$('#exterior').toggleClass('slider-hidden');
	$('#planning').toggleClass('slider-hidden');
})
