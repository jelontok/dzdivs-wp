<!DOCTYPE html>
<html <?php language_attributes(); ?>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <meta name="description" content="Project Description" />
    <meta name="keywords" content="Project Keywords" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
    <title><?php bloginfo('name'); ?> <?php if ( is_single() ) { ?> &raquo; Blog Archive <?php } ?> <?php wp_title(); ?> | <?php bloginfo('description'); ?></title>
    <link href='http://fonts.googleapis.com/css?family=Cabin' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" type="text/css" />
    <!--[if IE]><link rel="stylesheet" href="<?php bloginfo('stylesheet_directory'); ?>/style-ie.css" type="text/css" /><![endif]-->
    <?php wp_head(); ?>
    <?php if ( is_singular() ) wp_enqueue_script( "comment-reply" ); ?>
</head>

<body <?php body_class( $class ); ?>>

    <div id="top" class="clearfix">
        <div class="wrap clearfix">
            <div id="sitelogo" class="left">
                <a href="<?php bloginfo('url'); ?>"><?php bloginfo('name'); ?></a>
            </div><!-- // end #sitelogo -->
            <div id="topnav" class="right">
                <?php wp_nav_menu( array( 'theme_location' => 'main-menu' ) ); ?>
            </div><!-- // end #topnav -->
        </div><!-- // end .wrap -->
    </div><!-- // end #top -->