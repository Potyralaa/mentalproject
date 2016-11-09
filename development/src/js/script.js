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
    var menuSpy = new MenuSpy(dom);
    
    if(dom.window.width() > 691) {
        dom.fullpage.fullpage();
    }
    
    

});
