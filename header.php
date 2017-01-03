<!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js">
<head>
	
	<meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=0"/>
    
    <title>
    <?php 
      
        if (is_home()) {
            bloginfo(‘name’);
        }
        else {
            wp_title();
        }
        
    ?>
    </title>
    
    <link rel="profile" href="http://gmpg.org/xfn/11">
    
	<?php if ( is_singular() && pings_open( get_queried_object() ) ) : ?>
	    <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
	<?php endif; ?>

    <link rel="apple-touch-icon" href="apple-touch-icon.png">
    
    <link rel="icon" href="<?php echo get_home_url(); ?>/wp-content/uploads/2016/12/favicon.ico">
    
    <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri() . '/vendor/css/owl.carousel.css';?>">
    
    <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri() . '/vendor/css/owl.theme.default.css';?>">
    
    <link rel="apple-touch-icon" sizes="57x57" href="<?php echo get_home_url(); ?>/wp-content/uploads/2016/12/apple-touch-icon-57x57.png" />
    
    <link rel="apple-touch-icon" sizes="114x114" href="<?php echo get_home_url(); ?>/wp-content/uploads/2016/12/apple-touch-icon-114x114.png" />
    
    <link rel="apple-touch-icon" sizes="72x72" href="<?php echo get_home_url(); ?>/wp-content/uploads/2016/12/apple-touch-icon-72x72.png" />
    
    <link rel="apple-touch-icon" sizes="144x144" href="<?php echo get_home_url(); ?>/wp-content/uploads/2016/12/apple-touch-icon-144x144.png" />
    
    <link rel="apple-touch-icon" sizes="120x120" href="<?php echo get_home_url(); ?>/wp-content/uploads/2016/12/apple-touch-icon-120x120.png" />
    
    <link rel="apple-touch-icon" sizes="152x152" href="<?php echo get_home_url(); ?>/wp-content/uploads/2016/12/apple-touch-icon-152x152.png" />
    
    <link rel="icon" type="image/png" href="<?php echo get_home_url(); ?>/wp-content/uploads/2016/12/favicon-32x32.png" sizes="32x32" />
    
    <link rel="icon" type="image/png" href="<?php echo get_home_url(); ?>/wp-content/uploads/2016/12/favicon-16x16.png" sizes="16x16" />
    
    <meta name="application-name" content="Mental Project"/>
    
    <meta name="msapplication-TileColor" content="#FFFFFF" />
    
    <meta name="msapplication-TileImage" content="<?php echo get_home_url(); ?>/wp-content/uploads/2016/12/mstile-144x144.png" />
    
    <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri() . '/style.css';?>">
    
    <?php // wp_head(); ?>
    
</head>

<body <?php body_class(); ?>>