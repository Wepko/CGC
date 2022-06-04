import $ from "jquery";




const sliderExterior = $('#exterior');
const sliderPlanning = $('#planning');
$(document).ready(function() {
	setTimeout(() => {
		sliderPlanning.addClass('slider-hidden');
	}, 1000)
});

$('.project-header__square').on('click', (e) => {
	e.preventDefault();
	
	sliderExterior.toggleClass('slider-hidden');
	sliderPlanning.toggleClass('slider-hidden');
})



const switchers = $('.accordion__switcher .can-toggle');
switchers.each((index, el) => {
	index++;
	el.addEventListener('change', (e) => {
		$(`.slider-${index} #photo`).toggleClass('slider-hidden');
		$(`.slider-${index} #video`).toggleClass('slider-hidden');
	});
});



// страница about О нас
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
			window.scroll(0, scrollHeight); 
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


