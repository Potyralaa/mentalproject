const Smoothscroll = {
    
    init() {
        
        const $smoothlinks = $('.smoothlink');
        
        this.scroll(window.location.hash)
        
        $smoothlinks.click(this.scroll);
        
    },
    
    scroll() {
        
        let url;
        
        if(typeof arguments[0] == "string") {
            url = arguments[0];
        }
        
        else {
            url = $(this).prop('href');
            if(url.indexOf("/") == 0) {
                url = url.substr(2, url.length-1);
            }
        }
        
        if(url != "") {
            const shortUrl = url.substr(url.indexOf('#') + 1, url.length - 1);
            
            const windowPosition = window.pageYOffset;
            const destination = $("[data-scrollspy=" + shortUrl + "]").offset().top;
            
            let topDifference;
            
            if($(window).width() < 600) {
                topDifference = 69;
            }
            else {
               topDifference = 95;
            }
            
            $('html, body').animate(
                { scrollTop: destination - topDifference}, 
                { duration: Math.abs(destination-windowPosition)/3, queue: false, specialEasing : "easeIn"}
            );
        }
        
        setTimeout(function() { history.pushState("", document.title, window.location.pathname); }, 0);
    }
}