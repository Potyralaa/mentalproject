const Carousels = {
    
    init: function() {
        
        const $articles = $(".carousel-articles");
        
        $articles.owlCarousel(this.articles_config);
    },
    
    articles_config: {
        margin:80,
        loop: true,
        autoplay:true,
        autoplayTimeout:6000,
        autoplayHoverPause:true,
        responsive:{
            0:{
                items:1
            },
            900: {
                items: 2
            },
            1600: {
                items: 3
            }
        }
    }
}