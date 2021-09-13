import { Swiper } from 'swiper';
import BadgerAccordion from 'badger-accordion';

{
  const swiper = new Swiper('.swiper', {
    // Optional parameters
    //direction: 'vertical',
    loop: false,
    slidesPerView: 1,
    centeredSlides: true,
    spaceBetween: 30,

  });

}

{
  //const swiperOne = new Swiper('.slider', {loop:false})
    
  // Creating a new instance of the accordion
  const accordionDomNode = document.querySelector('.js-badger-accordion');

  const accordion = new BadgerAccordion(accordionDomNode);
  window.accordion = accordion;

}
