import './bootstrap';

import Alpine from 'alpinejs';

window.Alpine = Alpine;

Alpine.start();

// Membuat Toggle Return Home
window.onscroll = function() {
    const header   = document.querySelector('header');
    const fixedNav = header.offsetTop;
    const btnReturn= document.querySelector('#btn-return');

    if(window.pageYOffset > fixedNav) {
        header.classList.add('navbar-fixed');
        btnReturn.classList.remove('hidden'); //Toggle Return Home
        btnReturn.classList.add('flex');
    }
    else {
        header.classList.remove('navbar-fixed');
        btnReturn.classList.remove('flex'); //Toggle Return Home
        btnReturn.classList.add('hidden');
    }
};