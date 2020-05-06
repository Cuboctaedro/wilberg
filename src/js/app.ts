import 'lazysizes';

const body = document.querySelector('body');

const menuToggle = document.querySelector('#menutoggle');

menuToggle.addEventListener(
    'click',
    function(event) {
        if (body.classList.contains('menu-open')) {
            body.classList.remove('menu-open');
            menuToggle.setAttribute('aria-expanded', 'false');
        } else {
            body.classList.add('menu-open');
            menuToggle.setAttribute('aria-expanded', 'true');
        }
    },
    false
);


class Tab {

    constructor(public button: HTMLElement, public content: HTMLElement) {
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
        this.content.setAttribute('aria-hidden', 'false');
        this.button.setAttribute('aria-expanded', 'true');
        this.button.setAttribute('aria-selected', 'true');
    }

    close() {
        this.content.classList.remove('is-open');
        this.content.setAttribute('aria-hidden', 'true');
        this.button.setAttribute('aria-expanded', 'false');
        this.button.setAttribute('aria-selected', 'false');
    }
}

class Tabs {
    constructor (public tabList: Tab[] ) {
        this.tabList = tabList
    }
    
    getOpenTab() {
        return this.tabList.find( tab => tab.isOpen() == 'true' );
    }
    
    hasOpenTab() {
        if (this.getOpenTab() != undefined ) {
            return true;
        }
        return false;
    }
    
    toggleTab(tab: Tab) {
        if (tab === this.getOpenTab() ) {
            tab.close();
            
        } else {
            tab.open();
            this.tabList.forEach(otherTab => {
                if (otherTab != tab) {
                    otherTab.close();
                }
            })
        }
    }

    openTab(tab: Tab) {
        if ( !this.hasOpenTab() ) {
            tab.open();
        } else {
            this.toggleTab(tab);
        }
    }
    
    init() {
        this.tabList.forEach( tab => {
            // tab.setHeight();
            tab.button.addEventListener(
                'click',
                () => this.toggleTab(tab),
                false
            );
        })
    }
}


const sectionTabs = new Tabs( Array.from( document.querySelectorAll('.section-tab__header') ).map( (tabHeader) => {
    let tabContent = document.querySelector('#' + tabHeader.getAttribute('aria-controls'));
    return new Tab(<HTMLElement>tabHeader, <HTMLElement>tabContent)
}) );

sectionTabs.init();

const gdprPopup = document.querySelector('#gdprpopup');
const gdprButton = gdprPopup.querySelector('#gdprclose');
gdprButton.addEventListener('click', (e) => {
    e.preventDefault();
    gdprPopup.remove(); 
});