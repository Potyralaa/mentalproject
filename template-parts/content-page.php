<?php
/**
 * The template used for displaying page content
 *
 * @package WordPress
 * @subpackage Twenty_Sixteen
 * @since Twenty Sixteen 1.0
 */
?>
<section class="full_article">
    <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
        <header class="entry-header">
            <?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
        </header><!-- .entry-header -->


        <div class="entry-content">
            <?php
            the_content();

            wp_link_pages( array(
                'before'      => '<div class="page-links"><span class="page-links-title">' . __( 'Pages:', 'twentysixteen' ) . '</span>',
                'after'       => '</div>',
                'link_before' => '<span>',
                'link_after'  => '</span>',
                'pagelink'    => '<span class="screen-reader-text">' . __( 'Page', 'twentysixteen' ) . ' </span>%',
                'separator'   => '<span class="screen-reader-text">, </span>',
            ) );
            ?>
        </div><!-- .entry-content -->

        <?php
            edit_post_link(
                sprintf(
                    /* translators: %s: Name of current post */
                    __( 'Edit<span class="screen-reader-text"> "%s"</span>', 'twentysixteen' ),
                    get_the_title()
                ),
                '<footer class="entry-footer"><span class="edit-link">',
                '</span></footer><!-- .entry-footer -->'
            );
        ?>

    </article><!-- #post-## -->
</section>

<section class="all_categories">
    <h1 class="entry-title">Wszystkie artykuły</h1>
    <div class="categories_wrapper">
      
        <?php
        
            $home_url = get_home_url();
        
        ?>
       
        <div class="category">
            <div class="thumbnail" style="background-image: url(<?php echo $home_url; ?>/wp-content/uploads/2016/12/creepy-man-without-a-face-in-a-hoodie-picjumbo-com.png)"></div>
            
            <a class="hyperlink" href="<?php echo $home_url; ?>/category/depresja">Depresja</a>
        </div>

        <div class="category">
            <div class="thumbnail" style="background-image: url(<?php echo $home_url; ?>/wp-content/uploads/2016/12/creepy-man-without-a-face-in-a-hoodie-picjumbo-com.png)"></div>
            <a class="hyperlink" href="<?php echo $home_url; ?>/category/schizofrenia">Schizofrenia</a>
        </div>
        
        <div class="category">
            <div class="thumbnail" style="background-image: url(<?php echo $home_url; ?>/wp-content/uploads/2016/12/creepy-man-without-a-face-in-a-hoodie-picjumbo-com.png)"></div>
            <a class="hyperlink" href="<?php echo $home_url; ?>/category/alkoholizm">Alkoholizm</a>
        </div>
        
        <div class="category">
            <div class="thumbnail" style="background-image: url(<?php echo $home_url; ?>/wp-content/uploads/2016/12/creepy-man-without-a-face-in-a-hoodie-picjumbo-com.png)"></div>
            
            <a class="hyperlink" href="<?php echo $home_url; ?>/category/adhd">ADHD</a>
        </div>
        
        <div class="category">
            <div class="thumbnail" style="background-image: url(<?php echo $home_url; ?>/wp-content/uploads/2016/12/creepy-man-without-a-face-in-a-hoodie-picjumbo-com.png)"></div>
            <a class="hyperlink" href="<?php echo $home_url; ?>/category/autyzm">Autyzm</a>
        </div>
        
        <div class="category">
            <div class="thumbnail" style="background-image: url(<?php echo $home_url; ?>/wp-content/uploads/2016/12/creepy-man-without-a-face-in-a-hoodie-picjumbo-com.png)"></div>
            <a class="hyperlink" href="<?php echo $home_url; ?>/category/osd">OSD</a>
        </div>
        
    </div>
</section>


