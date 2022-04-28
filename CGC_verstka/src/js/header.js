'use strict';

document.addEventListener('DOMContentLoaded', () => {
    
    ///// humburger
    const html = document.querySelector('html');
    const humburger = html.querySelector('.menu-toggle');
    const menu = html.querySelector('.header__wrapper .navigation');

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

