<?php
/**
 * The Header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="main">
 *
 * @package Dentego
 */
?><!DOCTYPE html>
<!--[if IE 7]>
<html class="ie ie7" <?php language_attributes(); ?>>
<![endif]-->
<!--[if IE 8]>
<html class="ie ie8" <?php language_attributes(); ?>>
<![endif]-->
<!--[if !(IE 7) | !(IE 8)  ]><!-->
<html <?php language_attributes(); ?>>
<!--<![endif]-->
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>" />
<meta name="viewport" content="width=device-width" />
<title><?php wp_title( '|', true, 'right' ); ?></title>
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
<?php // Loads HTML5 JavaScript file to add support for HTML5 elements in older IE versions. ?>
<!--[if lt IE 9]>
<script src="<?php echo get_template_directory_uri(); ?>/js/html5.js" type="text/javascript"></script>
<![endif]-->
<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<div class="header-bg">
<div id="page" class="hfeed site">

    <header id="masthead" class="site-header" role="banner">
        <hgroup>
            <h1><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">
                 <img src="<?php bloginfo('template_url'); ?>/images/logo.png" alt="<?php bloginfo('name'); ?>"/> 
             </a></h1>
             <h2 class="site-description"><?php bloginfo( 'description' ); ?></h2>
             <h3>Dentego - 60 rue laugier - 75 017 PARIS  / 06 35 59 60 17</h3>
        </hgroup>  
    </header><!-- #masthead --> 
</div><!--#page-->
</div><!--header-bg-->
        <nav id="site-navigation" class="main-navigation" role="navigation">
            <h3 class="menu-toggle"><?php _e( 'Menu', 'twentytwelve' ); ?></h3>
            <a class="assistive-text" href="#content" title="<?php esc_attr_e( 'Skip to content', 'twentytwelve' ); ?>"><?php _e( 'Skip to content', 'twentytwelve' ); ?></a>
            <?php wp_nav_menu( array( 'theme_location' => 'primary', 'menu_class' => 'nav-menu' ) ); ?>
        </nav><!-- #site-navigation -->
<div id="page" class="hfeed site">
    <div id="main" class="wrapper">
