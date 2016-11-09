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