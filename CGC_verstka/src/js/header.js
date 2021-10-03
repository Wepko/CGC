'use strict';

document.addEventListener('DOMContentLoaded', () => {
    // === logo loading on class
    const header = document.querySelector('.header');
    
    const isActiveClass = header.classList.contains('header--light');

    if (isActiveClass) {
        const logo = header.querySelector('img.logo');
        logo.src = 'img/icon/logo-dark.svg';
    }


    ///// humburger

    const humburger = document.querySelector('.menu-toggle');
    console.log(humburger)
    humburger.addEventListener('click', () => {
        humburger.classList.toggle('active');
    })

})

