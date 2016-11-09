class MenuSpy {
    
    constructor(dom) {
        this.window = dom.window;
        this.nav = dom.nav;
        
        this.init();
    }
    
    init() {
        this.window.on('hashchange', this.update.bind(this));
    }
    
    update() {
        var hash = location.hash.substr(1, location.hash.length-1);
        
        var navElement = this.nav.find('.nav-' + hash);
  
        this.nav.find('.menu a').removeClass('active');
        
        navElement.addClass('active');
    }
}