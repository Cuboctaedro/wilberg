import 'lazysizes';

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


class Tab {
    button: ''
    content: ''
    constructor(button, content) {
      this.button = button;
      this.content = content;
    }

    isOpen() {
        return this.button.getAttribute('aria-expanded');
    }

    setHeight() {
        this.content.style.setProperty('--height', this.content.scrollHeight + 'px');
    }

    open() {
        this.content.classList.add('is-open');
        this.content.setAttribute('aria-hidden', false);
        this.button.setAttribute('aria-expanded', true);
        this.button.setAttribute('aria-selected', true);
    }

    close() {
        this.content.classList.remove('is-open');
        this.content.setAttribute('aria-hidden', true);
        this.button.setAttribute('aria-expanded', false);
        this.button.setAttribute('aria-selected', false);
    }
}

  
const tabHeaders = document.querySelectorAll('.section-tab__header');

const sectionTabs = Array.from(tabHeaders).map( (tabHeader) => {
    let tabContent = document.querySelector('#' + tabHeader.getAttribute('aria-controls'));
    return new Tab(tabHeader, tabContent)
});


sectionTabs.forEach(tab => {
    tab.setHeight();
    tab.button.addEventListener(
        'click',
        () => {
            if (tab.isOpen() == 'true') {
                tab.close();
            } else {
                tab.open();
                sectionTabs.forEach(otherTab => {
                    if (otherTab != tab) {
                        otherTab.close();
                    }
                })
            }
        },
        false
    );
});

