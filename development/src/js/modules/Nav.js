const Nav = {

    init: function () {
        const
            $window = $(window),
            $navbar = $("#navbar"),
            $home = $("#home"),
            $overlay = $("#black_overlay"),

            $main_container = $("#main_container"),
            $mobile_sidebar = $("#mobile_sidebar"),
              
            $burger = $('.burger-click-region'),
            $sidebarToggler = $('.burger-click-region').add('.sidebar_link');
        
        
        
        var clickDelay = 500,
            clickDelayTimer = null;
        
        $overlay.click(function() {
            toggleSidebar();
        });
        
        $sidebarToggler.click(toggleSidebar);
        
        $window.on('scroll', () => {
            this.checkIsActive($window, $navbar, $home, $burger);
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
    

    checkIsActive: function ($window, $navbar, $home, $burger) {
        
        if($home.get(0)) {
            let topDifference;
        
            if($window.width() < 600) {
                topDifference = 21;
            }
            else {
               topDifference = 41;
            }

            const top = $window.scrollTop() + topDifference;

            if (top > $home.height()) {
                $navbar.addClass('sticky');
            } else {
                $navbar.removeClass('sticky');
            }
        }
        else if(location.pathname != "/") {
            $navbar.addClass('sticky');
        }

    },

}