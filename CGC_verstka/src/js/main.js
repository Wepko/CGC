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


{
  const objsHidden = document.querySelectorAll('.projects__filter-buttons');
  const objHidden = [...objsHidden][1];
  const objToggle = document.querySelector('.projects__filter-next');
  objToggle.addEventListener('click', () => {
    objHidden.classList.toggle('hidden-js')
  })
  console.log(objHidden);
}


