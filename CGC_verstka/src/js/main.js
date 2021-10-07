import BadgerAccordion from 'badger-accordion';

{
  //const swiperOne = new Swiper('.slider', {loop:false})
    
  // Creating a new instance of the accordion
  const accordionDomNode = document.querySelector('.js-badger-accordion');

  const accordion = new BadgerAccordion(accordionDomNode);
  window.accordion = accordion;

  // const accordions = document.querySelectorAll('.js-badger-accordion');
  // const arr = []; 
  // Array.from(accordions).forEach((accordion, index) => {

  //     const ba = new BadgerAccordion(accordion);

  //     // console.log(ba.getState([0]));
  // });

 
}

{

  // const control = document.querySelector('.o-play-btn');
  // control.addEventListener('click', (e) => {
  //   control.classList.toggle('o-play-btn--playing');
  // })

  const cardProducts = [...document.querySelectorAll('.card-product')];

  for (let cardProduct of cardProducts) {
    cardProduct.addEventListener('pointerdown', () => {
      cardProduct.classList.toggle('card-product-js');
      console.log('41233')
    });
  }
  

}


{

  //кнопка еще при вскрытие
  const objsHidden = document.querySelectorAll('.projects__filter-buttons');
  const objHidden = [...objsHidden][1];
  const objToggle = document.querySelector('.projects__filter-next');
  objToggle.addEventListener('click', () => {
    objHidden.classList.toggle('hidden-js')
  })
  console.log(objHidden);
}


