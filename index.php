<?php

get_header(); ?>
    
<div id="fullpage">

        <div class="section" data-anchor="strona-startowa" id="intro" style="background-image: url(img/bg-image.png)">
           
            <div class="container">
               
                <div class="row center-xs">
                    <div class="col-sm-10">
                        <h1 class="header">Mental Project</h1>
                    </div>
                </div>
                   
                <div class="row center-xs">
                    <div class="col-sm-8">
                        <h3>Provident ratione quibusdam. </h3>
                    </div>
                </div>
                    
                    
                <div class="row center-xs">
                    <div class="col-sm-6">
                        <h3>Sapiente optio aut, pariatur, officiis laboriosam totam?</h3>
                    </div>
                </div>     
                    
                <div class="row center-xs">
                    <div class="col-sm-8">
                        <a href="#przyklady-zaburzen">Przejdź dalej!</a>
                    </div>
                </div>
                    
            </div>
            
        </div>

        <div class="section" data-anchor="przyklady-zaburzen">
            <div class="container">
                <div class="row">
                    
                    <div class="col-sm-4 col-xs-12 disability">
                        
                        <figure>
                            <img src="img/small-image.png" alt="">
                            <figcaption>Zaburzenie</figcaption>
                        </figure>
                        
                    </div>
                    
                    <div class="col-sm-4 col-xs-12 disability">
                        
                        <figure>
                            <img src="img/small-image.png" alt="">
                            <figcaption>Zaburzenie</figcaption>
                        </figure>
                        
                    </div>
                    
                    <div class="col-sm-4 col-xs-12 disability">
                        
                        <figure>
                            <img src="img/small-image.png" alt="">
                            <figcaption>Zaburzenie</figcaption>
                        </figure>
                        
                    </div>
                    
                </div>
            </div>
        </div>

        <div class="section" data-anchor="artykuly">
        
        </div>
        
        <div class="section" data-anchor="newsletter">
 
        </div>

</div>
	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

		<?php if ( have_posts() ) : ?>

			<?php if ( is_home() && ! is_front_page() ) : ?>
				<header>
					<h1 class="page-title screen-reader-text"><?php single_post_title(); ?></h1>
				</header>
			<?php endif; ?>

			<?php
			// Start the loop.
			while ( have_posts() ) : the_post();

				/*
				 * Include the Post-Format-specific template for the content.
				 * If you want to override this in a child theme, then include a file
				 * called content-___.php (where ___ is the Post Format name) and that will be used instead.
				 */
				get_template_part( 'template-parts/content', get_post_format() );

			// End the loop.
			endwhile;

			// Previous/next page navigation.
			the_posts_pagination( array(
				'prev_text'          => __( 'Previous page', 'twentysixteen' ),
				'next_text'          => __( 'Next page', 'twentysixteen' ),
				'before_page_number' => '<span class="meta-nav screen-reader-text">' . __( 'Page', 'twentysixteen' ) . ' </span>',
			) );

		// If no content, include the "No posts found" template.
		else :
			get_template_part( 'template-parts/content', 'none' );

		endif;
		?>

		</main><!-- .site-main -->
	</div><!-- .content-area -->

<?php get_footer(); ?>
