$(document).ready(function () {

    const DOMElements = {
        nav: $('nav.navbar'),
        fullpage: $('#fullpage'),
        footer: $('footer')
    };

    changeStatusByHash(DOMElements.footer, ["newsletter"]);

    setFooterDate(DOMElements);
    addEvents(DOMElements);
    DOMElements.fullpage.fullpage();

});

function addEvents(elements) {

    $(window).on('hashchange', function () {
        changeStatusByHash(elements.footer, ["newsletter"]);
    });

}

function setFooterDate(elements) {
    var date = (new Date()).getFullYear();
    elements.footer.append(date);
}

function changeStatusByHash(element, hashes) {

    var hash = location.hash.substr(1, location.hash.length-1);
    
    if (hashes.includes(hash)) {
        element.addClass('active');
    } 
    
    else {
        element.removeClass('active');
    }

}