$(document).ready(function () {

    if(location.pathname == "/" || location.pathname == "/wordpress/") {
        Carousels.init();
        Smoothscroll.init();
    }
    
    Nav.init();
    
    Share.init();
    
});