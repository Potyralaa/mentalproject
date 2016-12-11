<section data-scrollspy="artykuly" id="articles">
        <div class="container_articles container">
         
            <h1 class="section_title">Artykuły</h1>
          
            <?php
        
                $pages = get_pages();
                
                $articles  = array();

                foreach($pages as $page) {

                    if($page->post_parent == 10) {

                        $articles[] = $page;

                    }

                }
        
            ?>
            
            <div class="carousel-articles">
            
            <?php foreach($articles as $article): ?>
               
                <?php
                    $image = wp_get_attachment_image_src( get_post_thumbnail_id( $article->ID ), 'single-post-thumbnail' )[0];
                    $content = substr($article->post_content, 0, 200) . "...";
                    $date = str_replace("-", "/", substr($article->post_date, 0, 11));
                    
                    str_replace("-", "/", $date);
            
                ?>
               
                <article>
                    <h2><?php echo $article->post_title; ?></h2>
                    <div class="img" style="background-image: url(<?php echo $image;?>)"></div>
                    <div class="main">
                        <p><?php echo $content ; ?></p>
                        <a href="<?php echo $article->guid; ?>">
                            Czytaj więcej
                            <img src="<?php echo get_home_url(); ?>/wp-content/uploads/2016/12/arrow.png" alt="">
                        </a>
                    </div>
                    
                    <footer>
                        
                        <img class="date" src="<?php echo get_home_url(); ?>/wp-content/uploads/2016/12/clock.png" alt="">
                        <span><?php echo $date; ?></span>
                        
                        <img class="heart" src="<?php echo get_home_url(); ?>/wp-content/uploads/2016/12/empty-heart.png" alt="">
                        <span>241</span>
                        
                    </footer>
                </article>
                
            <?php endforeach; ?>
            
            </div>
            
        </div>
    </section>