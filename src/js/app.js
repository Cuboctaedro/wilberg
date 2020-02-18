import 'lazysizes';

import h from "./helpers";

const body = document.querySelector('body');

const menuToggle = document.querySelector('#menutoggle');

menuToggle.addEventListener(
    'click',
    function(event) {
        if (body.classList.contains('menu-open')) {
            body.classList.remove('menu-open');
            menuToggle.setAttribute('aria-expanded', false);
        } else {
            body.classList.add('menu-open');
            menuToggle.setAttribute('aria-expanded', true);
        }
    },
    false
);

