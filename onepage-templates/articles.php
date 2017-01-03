<section data-scrollspy="artykuly" id="articles">
       
        <div class="container_articles container">
         
            <h2 class="section_title">Artykuły</h2>
          
            <?php

                $articles  = get_posts();
            
                function strip_images($content){
                    return preg_replace('/<img[^>]+./','',$content);
                }
        
            ?>
            
            <div class="carousel-articles">
            
            
            
            <?php foreach($articles as $article): ?>
               
                <?php
                
                    $image = wp_get_attachment_image_src( get_post_thumbnail_id( $article->ID ), 'single-post-thumbnail' )[0];
                
                    $article->post_content = strip_images($article->post_content);
                
                    $content = substr($article->post_content, 0, 200) . "...";
                    $date = str_replace("-", "/", substr($article->post_date, 0, 11));
                    
                    str_replace("-", "/", $date);
            
                ?>
               
                <article>
                    <h3><?php echo $article->post_title; ?></h3>
                    <div class="img_wrapper">
                        <div class="img" style="background-image: url(<?php echo $image;?>)"></div>
                    </div>
                    
                    <div class="main">
                        <p><?php echo $content ; ?></p>
                        <a href="<?php echo $article->guid; ?>">
                            Czytaj więcej
                            <img src="<?php echo get_home_url(); ?>/wp-content/uploads/2016/12/arrow.png" alt="">
                        </a>
                    </div>
                    
                    <footer>
                        
                        <svg xmlns="http://www.w3.org/2000/svg" fill="#000000" height="24" viewBox="0 0 24 24" width="24">
                            <path d="M11.99 2C6.47 2 2 6.48 2 12s4.47 10 9.99 10C17.52 22 22 17.52 22 12S17.52 2 11.99 2zM12 20c-4.42 0-8-3.58-8-8s3.58-8 8-8 8 3.58 8 8-3.58 8-8 8z"/>
                            <path d="M0 0h24v24H0z" fill="none"/>
                            <path d="M12.5 7H11v6l5.25 3.15.75-1.23-4.5-2.67z"/>
                        </svg>
                        <span><?php echo $date; ?></span>
                        
                        <div class="share_area" data-href="<?php echo $article->guid; ?>">
                            <svg viewBox="0 0 24 24"  xmlns="http://www.w3.org/2000/svg" class="share_icon">
                                <path d="M0 0h24v24H0z" fill="none"/>
                                <path d="M18 16.08c-.76 0-1.44.3-1.96.77L8.91 12.7c.05-.23.09-.46.09-.7s-.04-.47-.09-.7l7.05-4.11c.54.5 1.25.81 2.04.81 1.66 0 3-1.34 3-3s-1.34-3-3-3-3 1.34-3 3c0 .24.04.47.09.7L8.04 9.81C7.5 9.31 6.79 9 6 9c-1.66 0-3 1.34-3 3s1.34 3 3 3c.79 0 1.5-.31 2.04-.81l7.12 4.16c-.05.21-.08.43-.08.65 0 1.61 1.31 2.92 2.92 2.92 1.61 0 2.92-1.31 2.92-2.92s-1.31-2.92-2.92-2.92z"/>
                            </svg>
                            <span>Udostępnij</span>
                        </div>
                        
                    </footer>
                </article>
                
            <?php endforeach; ?>
            
            </div>
            
        </div>
    </section>