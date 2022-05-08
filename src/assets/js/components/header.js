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

		menu.insertAdjacentHTML('beforeend', `<div class="navigation__info">
		<p>8 800 000 00 00</p>
		<p>email@company.com</p>
		<a class="btn-primary" href="">Заказать звонок </a>
	</div>`);
		const linkProjects = document.querySelector(`a[href$="projects/"]`);

		linkProjects.addEventListener('click', e => {
			e.preventDefault();
		});
	 

})

