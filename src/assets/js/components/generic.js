import BadgerAccordion from 'badger-accordion';



const accordions = document.querySelectorAll('.js-badger-accordion');

Array.from(accordions).forEach((accordion) => {
    const ba = new BadgerAccordion(accordion);

    console.log(ba.getState([0]));
});


{
  //const swiperOne = new Swiper('.slider', {loop:false})
    
  // Creating a new instance of the accordion
  const accordionDomNode = document.querySelector('.js-badger-accordion');

  const accordion = new BadgerAccordion(accordionDomNode);
  window.accordion = accordion;


  const cardProducts = [...document.querySelectorAll('.card-product')];

  for (let cardProduct of cardProducts) {
    cardProduct.addEventListener('pointerdown', () => {
      cardProduct.classList.toggle('card-product-js');
    });
  }
  
}



