<?php
/**
 * Functions
 *
 *
 * @package WordPress
 * @subpackage DZDivs WP
 */

    $content_width = 500;
    
    // widgets
    if ( function_exists('register_sidebar') ) {
        register_sidebar(array('name'=>'Right Sidebar',
            'before_widget' => '<div class="widget">',
            'after_widget' => '</div>',
            'before_title' => '<h2>',
            'after_title' => '</h2>',
        ));
        register_sidebar(array('name'=>'Footer Sidebar 1',
            'before_widget' => '<div class="widget">',
            'after_widget' => '</div>',
            'before_title' => '<h3>',
            'after_title' => '</h3>',
        ));
        register_sidebar(array('name'=>'Footer Sidebar 2',
            'before_widget' => '<div class="widget">',
            'after_widget' => '</div>',
            'before_title' => '<h3>',
            'after_title' => '</h3>',
        ));
        register_sidebar(array('name'=>'Footer Sidebar 3',
            'before_widget' => '<div class="widget">',
            'after_widget' => '</div>',
            'before_title' => '<h3>',
            'after_title' => '</h3>',
        ));
        register_sidebar(array('name'=>'Footer Sidebar 4',
            'before_widget' => '<div class="widget">',
            'after_widget' => '</div>',
            'before_title' => '<h3>',
            'after_title' => '</h3>',
        ));        
    }
    
    // menus
    function register_my_menus() {
        register_nav_menus(
            array( 'main-menu' => __( 'Main' ) )
        );
    }
    add_action( 'init', 'register_my_menus' );
    
    // featured image
    add_theme_support( 'post-thumbnails' );        
    
    // custom post for slider
    function create_post_type() {
        register_post_type( 'slider',
            array(
                'labels' => array(
                    'name' => __( 'Slider' ),
                    'singular_name' => __( 'Slider' ),
                    'add_new_item' => __( 'Add New Slide' ),
                    'edit_item' => __( 'Edit Slide' ),
                    'new_item' => __( 'New Slide' ),
                    'view_item' => __( 'View Slider Images' ),
                    'search_items' => __( 'Search Slider Images' ),
                    'not_found' => __( 'No Slider Images found' ),
                    'not_found_in_trash' => __( 'No Slider Images found in Trash' )
                ),
                'public' => true,
                'supports' => array('title','editor','thumbnail','custom-fields','comments')
            )
        );
    }
    add_action( 'init', 'create_post_type' );
    
    /**
    * Where the post has no post title, but must still display a link to the single-page post view.
    */
    add_filter('the_title', 'dzdivswp_title');
    
    function dzdivswp_title($title) {
        if ($title == '') {
            return 'Untitled';
        } else {
            return $title;
        }
    }
    
    add_theme_support( 'automatic-feed-links' );

?>