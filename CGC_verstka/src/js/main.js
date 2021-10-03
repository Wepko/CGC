import BadgerAccordion from 'badger-accordion';
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



