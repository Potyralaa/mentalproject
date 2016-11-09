<?php

    get_header(); 

?>

<div id="fullpage">

    <header class="section site-header " role="banner" data-anchor="strona-startowa" id="masthead" style="background-image: url(<?php header_image(); ?>)">

        <div class="container">

            <div class="row center-xs">
                <div class="col-xs-12">
                    <h1 class="header">Mental Project</h1>
                </div>
            </div>

            <div class="row center-xs">
                <div class="col-xs-12">
                    <h3>Provident ratione quibusdam. </h3>
                </div>
            </div>


            <div class="row center-xs">
                <div class="col-xs-12">
                    <h3>Sapiente optio aut, pariatur, officiis laboriosam totam?</h3>
                </div>
            </div>

            <div class="row center-xs">
                <div class="col-xs-12">
                    <a href="#przyklady-zaburzen" class="button">Przejdź dalej!</a>
                </div>
            </div>

        </div>

    </header>

    <div class="section" data-anchor="przyklady-zaburzen">
        <div class="container disabilities">
            <div class="row disability-list between-sm center-xs">
            
                <?php
                    $pages = get_pages();
                    $disabilities  = array();
                    
                    foreach($pages as $page) {
                        
                        if($page->post_parent == 7) {
                
                            $disabilities[] = $page;
                            
                        }
                        
                    }
                
                ?>
                
                <?php foreach($disabilities as $disability): ?>
                
                    <div class="box col-xs-12">
                        <div class="img" style="background-image: url(<?php echo get_stylesheet_directory_uri() . '/img/small-image.png';?>)"></div>
                        <h3 class="caption"><?php echo $disability->post_title; ?></h3>
                        <a href="#<?php echo $disability->post_name; ?>" class="button">Czytaj więcej</a>
                    </div>
                
                <?php endforeach; ?>
              
            </div>
            
            <div class="row disability-pointer-wrapper between-sm">
                <div class="box col-xs-12">
                    <div class="disability-pointer active"></div>
                </div>
                <div class="box col-xs-12">
                    <div class="disability-pointer"></div>
                </div>
                <div class="box col-xs-12">
                    <div class="disability-pointer"></div>
                </div>
                
            </div>
            
            <div class="disability-description">
            
            <?php foreach($disabilities as $disability): ?>
               
                <?php
                    $image = wp_get_attachment_image_src( get_post_thumbnail_id( $article->ID ), 'single-post-thumbnail' )[0];
                ?>
               
                <div class="row">

                    <div class="col-sm-5 img" style="background-image: url(<?php echo $image;?>)"></div>


                    <div class="col-sm-7">
                        <div class="text">
                            <?php echo $disability->post_content; ?>
                        </div>
                    </div>

                </div>
            <?php endforeach; ?>
            
            </div>
        </div>
    </div>

    <div class="section" data-anchor="artykuly">
        <div class="container articles">
          
            <?php
                $articles  = array();

                foreach($pages as $page) {

                    if($page->post_parent == 10) {

                        $articles[] = $page;

                    }

                }
        
            ?>
           
            <?php foreach($articles as $article): ?>
                <?php
                    $image = wp_get_attachment_image_src( get_post_thumbnail_id( $article->ID ), 'single-post-thumbnail' )[0];
                ?>
               
                <div class="row article middle-xs">
                    <div class="col-sm-2 col-xs-12 img" style="background-image: url(<?php echo $image;?>)"></div>
                    <div class="col-sm-10 col-xs-12 text">
                        <h3><?php echo $article->post_title; ?></h3>
                        <p><?php echo $article->post_content; ?></p>
                    </div>
                </div>
            <?php endforeach; ?>
            
        </div>
    </div>

    <div class="section" data-anchor="newsletter">
<!--
        <pre>

            <?php print_r(get_pages()); ?>

        </pre>
-->
    </div>
</div>

<?php get_footer(); ?>