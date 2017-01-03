'use strict';

if (location.hostname == "mentalproject.pl") {

    (function (i, s, o, g, r, a, m) {
        i['GoogleAnalyticsObject'] = r;i[r] = i[r] || function () {
            (i[r].q = i[r].q || []).push(arguments);
        }, i[r].l = 1 * new Date();a = s.createElement(o), m = s.getElementsByTagName(o)[0];a.async = 1;a.src = g;m.parentNode.insertBefore(a, m);
    })(window, document, 'script', 'https://www.google-analytics.com/analytics.js', 'ga');

    ga('create', 'UA-87991113-1', 'auto');
    ga('send', 'pageview');
}

$(document).ready(function () {

    if (location.pathname == "/" || location.pathname == "/wordpress/") {
        Carousels.init();
        Smoothscroll.init();
    }

    Nav.init();

    Share.init();
});
var Carousels = {

    init: function init() {

        var $articles = $(".carousel-articles");

        $articles.owlCarousel(this.articles_config);
    },

    articles_config: {
        margin: 80,
        loop: false,
        autoplay: true,
        autoplayTimeout: 5000,
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
            $overlay = $("#black_overlay"),
            $main_container = $("#main_container"),
            $mobile_sidebar = $("#mobile_sidebar"),
            $burger = $('.burger-click-region'),
            $sidebarToggler = $('.burger-click-region').add('.sidebar_link');

        var clickDelay = 500,
            clickDelayTimer = null;

        $overlay.click(function () {
            toggleSidebar();
        });

        $sidebarToggler.click(toggleSidebar);

        $window.on('scroll', function () {
            _this.checkIsActive($window, $navbar, $home, $burger);
        });

        this.checkIsActive($window, $navbar, $home, $burger);

        function toggleSidebar() {
            if (clickDelayTimer === null) {

                $burger.toggleClass('active');
                $burger.parent().toggleClass('is-open');
                $mobile_sidebar.toggleClass("active");
                $overlay.toggleClass('active');

                if (!$burger.hasClass('active')) {
                    $burger.addClass('closing');
                }

                clickDelayTimer = setTimeout(function () {
                    $burger.removeClass('closing');
                    clearTimeout(clickDelayTimer);
                    clickDelayTimer = null;
                }, clickDelay);
            }
        }
    },

    checkIsActive: function checkIsActive($window, $navbar, $home, $burger) {

        if ($home.get(0)) {
            var topDifference = void 0;

            if ($window.width() < 600) {
                topDifference = 21;
            } else {
                topDifference = 41;
            }

            var top = $window.scrollTop() + topDifference;

            if (top > $home.height()) {
                $navbar.addClass('sticky');
            } else {
                $navbar.removeClass('sticky');
            }
        } else if (location.pathname != "/") {
            $navbar.addClass('sticky');
        }
    }

};
var Share = {

    init: function init() {
        var $share_triggers = $(".share_area");

        var $overlay = $("#white_overlay");
        var $modal = $('#share_modal');
        var $sharer = $('.sharer');
        var $exit_icon = $modal.find('#exit_icon > path');

        var $share_input = $modal.find('#share_input');
        var $share_copy = $modal.find('#share_copy');

        $share_triggers.click(function () {
            var href = $(this).attr('data-href');
            $modal.addClass('open');
            $share_input.val(href);
            $sharer.attr('data-url', href);

            $overlay.addClass('active');
        });

        $share_copy.click(function () {
            $(this).prev().select();
            document.execCommand('copy');
        });

        $overlay.click(removeOverlay);
        $exit_icon.click(removeOverlay);

        function removeOverlay(e) {
            if (e.target != $overlay.get(0) && !$exit_icon.get().includes(e.target)) {
                return false;
            }
            $modal.removeClass('open');
            $overlay.removeClass('active');
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
                topDifference = 20;
            } else {
                topDifference = 40;
            }

            $('html, body').animate({ scrollTop: destination - topDifference }, { duration: Math.abs(destination - windowPosition) / 3, queue: false, specialEasing: "easeIn" });
        }

        setTimeout(function () {
            history.pushState("", document.title, window.location.pathname);
        }, 0);
    }
};