<?php
/**
 * The main template file.
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package WordPress
 * @subpackage DZDivs WP
 */

get_header(); ?>

    <?php get_template_part( 'slider' ); ?>
    
    <div id="main">
        <div class="content wrap clearfix">
            <div class="column-a left">
            <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
            <div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
                <h1><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h1>            
                <?php the_content(); ?>
                <div class="meta">
                    <div class="date">Posted on <?php the_time('F j, Y'); ?> at <?php the_time('g:i a'); ?> in <?php the_category(' '); ?></div>
                    <div class="tags"><?php the_tags(); ?></div>
                </div>
                <?php comments_template(); // Get wp-comments.php template ?>
            </div>
            <?php endwhile; else: ?>
            <h2>Woops...</h2>
            <p>Sorry, no posts we're found.</p>
            <?php endif; ?>            
            <div class="post-navigation"><p><?php posts_nav_link(); ?></p></div>
            <?php wp_link_pages(); ?>
            </div><!-- // end .column-a -->
            <div class="column-b right">
                <?php get_sidebar(); ?>
            </div><!-- // end .column-b -->            
        </div><!-- // end .wrap -->
    </div><!-- // end #main -->
    
<?php get_footer(); ?>