<?php
/**
 * Slider
 *
 *
 * @package WordPress
 * @subpackage DZDivs WP
 */
?>

    <?php if ( is_front_page() ){ ?>
    <script type="text/javascript" src="<?php bloginfo('stylesheet_directory'); ?>/js/jquery-1.7.1.min.js"></script>
    <script type="text/javascript" src="<?php bloginfo('stylesheet_directory'); ?>/js/jquery.cycle.all.js"></script>
    <script type="text/javascript">
        $(document).ready(function(){
            $('#slider-images').cycle({ 
                fx:     'fade', 
                speed:   500, 
                timeout: 3000,
                pager: '#slider-nav'
            });               
        });        
    </script>            
    <?php query_posts('post_type=slider'); ?>
    <?php if (have_posts()) : ?>
    <div id="splash">
        <div class="wrap">
            <div id="splash-slider" class="rounded">
                <div id="slider-images">
                    <?php while (have_posts()) : the_post(); ?>
                    <?php the_post_thumbnail('', array('class' => 'rounded')); ?>
                    <?php endwhile; ?>
                </div>
            </div><!-- // end #splash-slider -->
            <div id="slider-nav"></div>            
        </div><!-- // end .wrap -->
    </div><!-- // end #splash -->
    <?php endif; wp_reset_query();?>    
    <?php } ?>