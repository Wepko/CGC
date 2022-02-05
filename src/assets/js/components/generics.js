import $ from "jquery";


console.log('generics.js');
$('.project-header__square').on('click', (e) => {
	e.preventDefault();
	console.log('click');

	$('#exterior').toggleClass('slider-hidden');
	$('#planning').toggleClass('slider-hidden');
})



$('.accordion__switcher .can-toggle').on('change', (e) => {
	console.log('change');

	$('#photo').toggleClass('slider-hidden');
	$('#video').toggleClass('slider-hidden');
})


