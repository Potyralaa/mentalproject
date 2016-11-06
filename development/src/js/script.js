$(document).ready(function () {
    var dom = {
        window: $(window),
        nav: $('nav.navbar'),
        body: $('body'),
        footer: $('footer'),
        fullpage: $('#fullpage')
    }
        
    var footerChecker = new HashChecker(dom.footer, ["newsletter"], dom);
    var mobileMenu = new MobileMenu(dom.nav, dom);
    
    dom.fullpage.fullpage();
    
});


class MobileMenu {
    constructor(nav, dom) {
        this.burger = nav.find('.burger');
        this.body = dom.body;
        
        this.init();
    }
    
    init() {
        this.burger.click(this.trigger.bind(this));
    }
    
    trigger() {
        
        this.body.toggleClass('moved');
    }
}

class HashChecker {

    constructor(element, hashes, dom) {
        this.element = element;
        this.hashes = hashes;
        this.window = dom.window;
    
        this.init();
    }
    
    init() {
        this.update();
        this.window.on('hashchange', this.update.bind(this));
    }
    
    update() {
        var hash = location.hash.substr(1, location.hash.length-1);
  
        if (this.hashes.includes(hash)) {
            this.element.addClass('active');
        } 
            
        else {
            this.element.removeClass('active');
        }
    }
}
