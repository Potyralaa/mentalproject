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