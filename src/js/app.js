import 'lazysizes';

import h from "./helpers";


function toggleTarget(toggleAttr, targetClasses, selfClasses) {
    var togglesArray = Array.from(document.querySelectorAll('[' + toggleAttr + ']'));
    togglesArray.forEach(function(item) {
        item.addEventListener(
            'click',
            function(event) {
                var target = document.querySelectorAll(this.getAttribute(toggleAttr))[0];
                targetClasses.forEach(function(targetclass) {
                    h.toggleClass(target, targetclass);
                })
                selfClasses.forEach(function(selfclass) {
                    h.toggleClass(item, selfclass);
                })
                event.preventDefault();
            },
            false
        );
    });
}


function toggleMenu() {
    var togglesArray = Array.from(document.querySelectorAll('[data-toggle-menu]'));
    togglesArray.forEach(function(item) {

        item.addEventListener(
            'click',
            function(event) {
                var target = document.querySelectorAll(this.getAttribute('data-toggle-menu'))[0];
                h.toggleClass(target, 'show');
                var state = this.getAttribute('aria-expanded');
                this.setAttribute('aria-expanded', !state);
            },
            false
        );
    });
}

function toggleSubmenu() {
    var togglesArray = Array.from(document.querySelectorAll('[data-toggle-submenu]'));

    var targets = togglesArray.map(toggle => document.querySelectorAll(toggle.getAttribute('data-toggle-submenu'))[0]);

    togglesArray.forEach(function(item) {
        item.addEventListener(
            'click',
            function(event) {
                var subtarget = document.querySelectorAll(this.getAttribute('data-toggle-submenu'))[0];
                subtarget.hidden = !subtarget.hidden;
                targets.forEach(function(el) {
                    if (el != subtarget ) {
                        el.hidden = true;
                    }
                })
                var state = this.getAttribute('aria-expanded');
                this.setAttribute('aria-expanded', !state);
            },
            false
        );
    });
}

