<?php
/**
 * The template for displaying pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages and that
 * other "pages" on your WordPress site will use a different template.
 *
 * @package WordPress
 * @subpackage Twenty_Sixteen
 * @since Twenty Sixteen 1.0
 */

get_header(); 

include( 'functions/normalize_menu.php');
    
get_template_part( 'layout-templates/mobile_nav');

get_template_part( 'layout-templates/nav');

?>



<main class="container container-article">
    <?php
    // Start the loop.
    while ( have_posts() ) : the_post();

        // Include the page content template.
        get_template_part( 'template-parts/content', 'page' );

        // If comments are open or we have at least one comment, load up the comment template.
//        if ( comments_open() || get_comments_number() ) {
//            comments_template();
//        }

        // End of the loop.
    endwhile;
    ?>

</main><!-- .site-main -->

<?php get_footer(); ?>
