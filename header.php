<!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js">
<head>
	
	<meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <title><?php wp_title(); ?></title>
    
    <link rel="profile" href="http://gmpg.org/xfn/11">
    
	<?php if ( is_singular() && pings_open( get_queried_object() ) ) : ?>
	    <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
	<?php endif; ?>

    <link rel="apple-touch-icon" href="apple-touch-icon.png">

    <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri() . '/vendor/css/flexbox-grid.css';?>">
    
    <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri() . '/vendor/css/fullpage.css';?>">
    
    <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri() . '/style.css';?>">
    
    <?php wp_head(); ?>
    
</head>

<body <?php body_class(); ?>>
   
    <?php
        
        $menu_pages = array();
        
        foreach(get_pages() as $page) {
            if($page->post_parent == 0) {
                $menu_pages[] = $page;
            }
        }
        
    ?>
        
    
    <nav class="navbar">
        
        <div class="logo_wrapper">
            <div class="logo">
                
                <a href="/wordpress" class="responsive-link"></a>
            </div>
            
        </div>
        
        <div class="burger">Burger</div>

        <ul class="menu">
            <?php foreach($menu_pages as $page): ?>
            <li>
                <a href="#<?php echo $page->post_name; ?>"><?php echo $page->post_title; ?></a>
            </li>
            <?php endforeach; ?>
        </ul>
 
    </nav>
    
    <div class="navbar_mobile">
        <ul class="menu">
            <?php foreach($menu_pages as $page): ?>
            <li>
                <a href="#<?php echo $page->post_name; ?>"><?php echo $page->post_title; ?></a>
            </li>
            <?php endforeach; ?>
        </ul>
    </div>
