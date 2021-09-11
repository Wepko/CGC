import { Swiper } from 'swiper';
import BadgerAccordion from 'badger-accordion';

{
  
}

{
  //const swiperOne = new Swiper('.slider', {loop:false})
  
// Creating a new instance of the accordion
const accordionDomNode = document.querySelector('.js-badger-accordion');

const accordion = new BadgerAccordion(accordionDomNode);
  window.accordion = accordion;

}



{
  var animateButton = function(e) {
  
    e.preventDefault;
    //reset animation
    e.target.classList.remove('animate');
    
    e.target.classList.add('animate');
    setTimeout(function(){
      e.target.classList.remove('animate');
    },700);
  };
  
  var bubblyButtons = document.getElementsByClassName("bubbly-button");
  
  for (var i = 0; i < bubblyButtons.length; i++) {
    bubblyButtons[i].addEventListener('click', animateButton, false);
  }
}