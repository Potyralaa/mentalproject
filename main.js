"use strict";

$(document).ready(function () {

    Carousels.init();

    Smoothscroll.init();

    Nav.init();
});
function debounce(func, wait) {
    var timeout;
    return function () {
        var context = this,
            args = arguments;

        var later = function later() {
            timeout = null;
            func.apply(context, args);
        };

        clearTimeout(timeout);
        timeout = setTimeout(later, wait);
    };
};
var Carousels = {

    init: function init() {

        var $articles = $(".carousel-articles");

        $articles.owlCarousel(this.articles_config);
    },

    articles_config: {
        margin: 80,
        loop: true,
        autoplay: true,
        autoplayTimeout: 6000,
        autoplayHoverPause: true,
        responsive: {
            0: {
                items: 1
            },
            900: {
                items: 2
            },
            1600: {
                items: 3
            }
        }
    }
};
var Nav = {

    init: function init() {
        var _this = this;

        var $window = $(window),
            $navbar = $("#navbar"),
            $home = $("#home"),
            $main_container = $("#main_container"),
            $mobile_sidebar = $("#mobile_sidebar"),
            $slidebarToggler = $navbar.find('.burger-click-region').add('.sidebar_link');

        var clickDelay = 500,
            clickDelayTimer = null;

        $slidebarToggler.click(function () {

            if (clickDelayTimer === null) {

                var $burger = $('.burger-click-region');
                $burger.toggleClass('active');
                $burger.parent().toggleClass('is-open');
                $mobile_sidebar.toggleClass("active");

                if (!$burger.hasClass('active')) {
                    $burger.addClass('closing');
                }

                clickDelayTimer = setTimeout(function () {
                    $burger.removeClass('closing');
                    clearTimeout(clickDelayTimer);
                    clickDelayTimer = null;
                }, clickDelay);
            }
        });

        $window.on('scroll', function () {
            _this.checkIsActive($window, $navbar, $home);
        });

        this.checkIsActive($window, $navbar, $home);
    },

    checkIsActive: function checkIsActive($window, $navbar, $home) {

        if ($home.get(0)) {
            var topDifference = void 0;

            if ($window.width() < 600) {
                topDifference = 70;
            } else {
                topDifference = 96;
            }

            var top = $window.scrollTop() + topDifference;

            if (top > $home.height()) {
                $navbar.addClass('sticky');
            } else {
                $navbar.removeClass('sticky');
            }
        }
    }

};
var Smoothscroll = {
    init: function init() {

        var $smoothlinks = $('.smoothlink');

        this.scroll(window.location.hash);

        $smoothlinks.click(this.scroll);
    },
    scroll: function scroll() {

        var url = void 0;

        if (typeof arguments[0] == "string") {
            url = arguments[0];
        } else {
            url = $(this).prop('href');
            if (url.indexOf("/") == 0) {
                url = url.substr(2, url.length - 1);
            }
        }

        if (url != "") {
            var shortUrl = url.substr(url.indexOf('#') + 1, url.length - 1);

            var windowPosition = window.pageYOffset;
            var destination = $("[data-scrollspy=" + shortUrl + "]").offset().top;

            var topDifference = void 0;

            if ($(window).width() < 600) {
                topDifference = 69;
            } else {
                topDifference = 95;
            }

            $('html, body').animate({ scrollTop: destination - topDifference }, { duration: Math.abs(destination - windowPosition) / 3, queue: false, specialEasing: "easeIn" });
        }

        setTimeout(function () {
            history.pushState("", document.title, window.location.pathname);
        }, 0);
    }
};