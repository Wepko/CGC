import { Swiper, EffectFade, Navigation, Pagination, Scrollbar, Controller, Parallax, Mousewheel } from 'swiper'
Swiper.use([EffectFade, Navigation, Pagination, Scrollbar, Controller, Parallax, Mousewheel])
import BadgerAccordion from 'badger-accordion';



{
  new Swiper('.slider-project', {
    // Optional parameters
    //direction: 'vertical',
    loop: false,
    slidesPerView: 1,
    centeredSlides: true,
    spaceBetween: 30,

  });


  const headerSlider = new Swiper('.slider-header', {
    // Optional parameters
    //direction: 'vertical',
    loop: true,
    effect: "fade",
    slidesPerView: 1,
    centeredSlides: true,

  });

  const thumbsSlider = new Swiper('.slider-thumbs', {
    loop: true,
    spaceBetween: 30,
    effect: "fade",
    navigation: {
      nextEl: ".swiper-button-next",
      prevEl: ".swiper-button-prev",
    },
    pagination: {
      el: ".swiper-pagination",
      clickable: true,
    },
    scrollbar: {
			el: '.swiper-scrollbar',
			draggable: true,
		},
  });

	headerSlider.controller.control = thumbsSlider
	thumbsSlider.controller.control = headerSlider
}

{
  //const swiperOne = new Swiper('.slider', {loop:false})
    
  // Creating a new instance of the accordion
  const accordionDomNode = document.querySelector('.js-badger-accordion');

  const accordion = new BadgerAccordion(accordionDomNode);
  window.accordion = accordion;

}

{

  // const control = document.querySelector('.o-play-btn');
  // control.addEventListener('click', (e) => {
  //   control.classList.toggle('o-play-btn--playing');
  // })


}



