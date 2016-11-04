'use strict';

if (!Array.prototype.includes) {
    Array.prototype.includes = function (searchElement /*, fromIndex*/) {
        'use strict';

        if (this == null) {
            throw new TypeError('Array.prototype.includes called on null or undefined');
        }

        var O = Object(this);
        var len = parseInt(O.length, 10) || 0;
        if (len === 0) {
            return false;
        }
        var n = parseInt(arguments[1], 10) || 0;
        var k;
        if (n >= 0) {
            k = n;
        } else {
            k = len + n;
            if (k < 0) {
                k = 0;
            }
        }
        var currentElement;
        while (k < len) {
            currentElement = O[k];
            if (searchElement === currentElement || searchElement !== searchElement && currentElement !== currentElement) {
                // NaN !== NaN
                return true;
            }
            k++;
        }
        return false;
    };
}
$(document).ready(function () {

    var DOMElements = {
        body: $('body'),
        nav: $('nav.navbar'),
        fullpage: $('#fullpage'),
        footer: $('footer')
    };

    changeStatusByHash(DOMElements.footer, ["newsletter"]);

    setFooterDate(DOMElements);
    addEvents(DOMElements);
    DOMElements.fullpage.fullpage();

    DOMElements.nav.find('.burger').click(function () {
        DOMElements.body.toggleClass('moved');
    });
});

function addEvents(elements) {

    $(window).on('hashchange', function () {
        changeStatusByHash(elements.footer, ["newsletter"]);
    });
}

function setFooterDate(elements) {
    var date = new Date().getFullYear();
    elements.footer.append(date);
}

function changeStatusByHash(element, hashes) {

    var hash = location.hash.substr(1, location.hash.length - 1);

    if (hashes.includes(hash)) {
        element.addClass('active');
    } else {
        element.removeClass('active');
    }
}