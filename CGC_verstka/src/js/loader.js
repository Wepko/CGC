'use strict';

document.addEventListener('DOMContentLoaded', () => {
    document.body.classList.add('loaded-hiding');
    window.setTimeout(() => {
      document.body.classList.add('loaded');
      document.body.classList.remove('loaded-hiding');
    }, 5000);

})
