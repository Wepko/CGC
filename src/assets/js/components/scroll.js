'use strict';

import {gsap} from 'gsap';
import {ScrollTrigger} from 'gsap/ScrollTrigger';

  function animateFrom(elem, direction) {
    direction = direction || 1;
    var x = 0,
        y = direction * 100;
    if(elem.classList.contains("gs_reveal_fromLeft")) {
      x = -100;
      y = 0;
    } else if (elem.classList.contains("gs_reveal_fromRight")) {
      x = 100;
      y = 0;
    }
    elem.style.transform = "translate(" + x + "px, " + y + "px)";
    elem.style.opacity = "0";
    gsap.fromTo(elem, {x: x, y: y, autoAlpha: 0}, {
      duration: 1.25, 
      x: 0,
      y: 0, 
      autoAlpha: 1, 
      ease: "expo", 
      overwrite: "auto"
    });
  }
  
  function hide(elem) {
    gsap.set(elem, {autoAlpha: 0});
  }
  
  document.addEventListener("DOMContentLoaded", function() {
    gsap.registerPlugin(ScrollTrigger);

    const scrollUp = document.querySelector('.header');

    ScrollTrigger.create({
      start: 'top -100',
      end: 99999,
      toggleClass: {className: 'header--scrolled', targets: '.header'}
    });
    
    ScrollTrigger.create({
      start: 'top -300',
      end: 99999,
      toggleClass: {className: 'header--up', targets: '.header'},
      onUpdate: ({direction}) => {
        if (direction == -1) {
          scrollUp.classList.remove('header--up');
        } else {
          scrollUp.classList.add('header--up');
        }}
    });
    
    // gsap.from(".header--scrolled", {
    //   position:"absolute", 
    //       scrollTrigger: {
    //       trigger:".header--scrolled",
    //       start: 'top -300',
    //       end: 99999,   
    //     }
    // }) 
    
    gsap.utils.toArray(".gs_reveal").forEach(function(elem) {
      hide(elem); // assure that the element is hidden when scrolled into view
      
      ScrollTrigger.create({
        trigger: elem,
        onEnter: function() { animateFrom(elem) }, 
        onEnterBack: function() { animateFrom(elem, -1) },
        // onLeave: function() { hide(elem) } // assure that the element is hidden when scrolled into view
      });
    });
  });
  