import $ from "jquery";


console.log('generics.js');

const sliderExterior = $('#exterior');
$(document).ready(function() {
	sliderExterior.addClass('slider-hidden');
});

$('.project-header__square').on('click', (e) => {
	e.preventDefault();
	

	sliderExterior.toggleClass('slider-hidden');
	$('#planning').toggleClass('slider-hidden');
})



$('.accordion__switcher .can-toggle').on('change', (e) => {

	$('#photo').toggleClass('slider-hidden');
	$('#video').toggleClass('slider-hidden');
})

const showBtn = document.querySelector(".process__button a") ?? null;
const container = document.querySelector(".steps") ?? null;

function showAll() {
  let open = false;

  if (container.scrollHeight <= container.offsetHeight) {
    showBtn.style.display = "none";
    return false;
  }

  showBtn.addEventListener("click", function () {
    open = !open;

    if (container.style.maxHeight) {
      container.style.maxHeight = null;
    } else {
      container.style.maxHeight = container.scrollHeight + "px";
    }

    if (open) {
      this.textContent = "Скрыть";
    } else {
      this.textContent = "Смотреть все шаги";
    }
  });
}

if (showBtn && container) {
	showAll();
}


