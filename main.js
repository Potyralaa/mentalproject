'use strict';

var _createClass = function () { function defineProperties(target, props) { for (var i = 0; i < props.length; i++) { var descriptor = props[i]; descriptor.enumerable = descriptor.enumerable || false; descriptor.configurable = true; if ("value" in descriptor) descriptor.writable = true; Object.defineProperty(target, descriptor.key, descriptor); } } return function (Constructor, protoProps, staticProps) { if (protoProps) defineProperties(Constructor.prototype, protoProps); if (staticProps) defineProperties(Constructor, staticProps); return Constructor; }; }();

function _classCallCheck(instance, Constructor) { if (!(instance instanceof Constructor)) { throw new TypeError("Cannot call a class as a function"); } }

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

    var dom = {
        window: $(window),
        nav: $('nav.navbar'),
        body: $('body'),
        footer: $('footer'),
        fullpage: $('#fullpage')
    };

    var footerChecker = new HashChecker(dom.footer, ["newsletter"], dom);
    var mobileMenu = new MobileMenu(dom.nav, dom);
    var menuSpy = new MenuSpy(dom);

    if (dom.window.width() > 691) {
        dom.fullpage.fullpage();
    }
});

var HashChecker = function () {
    function HashChecker(element, hashes, dom) {
        _classCallCheck(this, HashChecker);

        this.element = element;
        this.hashes = hashes;
        this.window = dom.window;

        this.init();
    }

    _createClass(HashChecker, [{
        key: 'init',
        value: function init() {
            this.update();
            this.window.on('hashchange', this.update.bind(this));
        }
    }, {
        key: 'update',
        value: function update() {
            var hash = location.hash.substr(1, location.hash.length - 1);

            if (this.hashes.includes(hash)) {
                this.element.addClass('active');
            } else {
                this.element.removeClass('active');
            }
        }
    }]);

    return HashChecker;
}();

var MenuSpy = function () {
    function MenuSpy(dom) {
        _classCallCheck(this, MenuSpy);

        this.window = dom.window;
        this.nav = dom.nav;

        this.init();
    }

    _createClass(MenuSpy, [{
        key: 'init',
        value: function init() {
            this.window.on('hashchange', this.update.bind(this));
        }
    }, {
        key: 'update',
        value: function update() {
            var hash = location.hash.substr(1, location.hash.length - 1);

            var navElement = this.nav.find('.nav-' + hash);

            this.nav.find('.menu a').removeClass('active');

            navElement.addClass('active');
        }
    }]);

    return MenuSpy;
}();

var MobileMenu = function () {
    function MobileMenu(nav, dom) {
        _classCallCheck(this, MobileMenu);

        this.burger = nav.find('.burger');
        this.body = dom.body;

        this.init();
    }

    _createClass(MobileMenu, [{
        key: 'init',
        value: function init() {
            this.burger.click(this.trigger.bind(this));
        }
    }, {
        key: 'trigger',
        value: function trigger() {

            this.body.toggleClass('moved');
        }
    }]);

    return MobileMenu;
}();