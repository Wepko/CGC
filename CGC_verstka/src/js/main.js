import BadgerAccordion from 'badger-accordion';

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




  document.addEventListener('DOMContentLoaded', () => {
    const q = document.querySelector('.projects__filter-next');
    const a1 = document.querySelector('.projects__filter-top'); 
    console.log(a1);
    q.onclick = () => {
      a1.classList.toggle('active');
    }

  })




