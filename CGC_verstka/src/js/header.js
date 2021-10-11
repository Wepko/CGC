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
    const html = document.querySelector('html');
    const humburger = html.querySelector('.menu-toggle');
    const menu = html.querySelector('.navigation');

    const links = menu.querySelectorAll('.navigation__subnav');

    for (let link of links) {
        link.addEventListener('click', () => {
            link.classList.toggle('active');
        });
    }

    humburger.addEventListener('click', () => {
        humburger.classList.toggle('active');
        menu.classList.toggle('active');
        html.classList.toggle('active')
    })

})

