'use strict';

document.addEventListener('DOMContentLoaded', () => {
    // === logo loading on class
    const header = document.querySelector('.header');
    
    const isActiveClass = Boolean(header.getAttribute('.header--light'));

    if (isActiveClass) {
        console.log('im tyt');
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

