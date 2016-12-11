const Nav = {

    init: function () {
        const
            $window = $(window),
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

        $window.on('scroll', () => {
            this.checkIsActive($window, $navbar, $home);
        });
        
        this.checkIsActive($window, $navbar, $home);
    },
    

    checkIsActive: function ($window, $navbar, $home) {
        
        if($home.get(0)) {
            let topDifference;
        
            if($window.width() < 600) {
                topDifference = 70;
            }
            else {
               topDifference = 96;
            }

            const top = $window.scrollTop() + topDifference;

            if (top > $home.height()) {
                $navbar.addClass('sticky');
            } else {
                $navbar.removeClass('sticky');
            }
        }
        
        

    },

}