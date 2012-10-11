<?php
/**
 * Footer
 *
 *
 * @package WordPress
 * @subpackage DZDivs WP
 */

get_header(); ?>

    <div id="footer">
        <div class="wrap content clearfix">
            <div class="column-c left">
                <?php if ( !function_exists('dynamic_sidebar')
                || !dynamic_sidebar('Footer Sidebar 1') ) : ?>
                <?php endif; ?>    
            </div><!-- // end .column-c -->
            <div class="column-c left push-left">
                <?php if ( !function_exists('dynamic_sidebar')
                || !dynamic_sidebar('Footer Sidebar 2') ) : ?>
                <?php endif; ?>    
            </div><!-- // end .column-c -->
            <div class="column-c left push-left">
                <?php if ( !function_exists('dynamic_sidebar')
                || !dynamic_sidebar('Footer Sidebar 3') ) : ?>
                <?php endif; ?>       
            </div><!-- // end .column-c -->
            <div class="column-c left push-left">
                <?php if ( !function_exists('dynamic_sidebar')
                || !dynamic_sidebar('Footer Sidebar 4') ) : ?>
                <?php endif; ?>    
            </div><!-- // end .column-c -->            
        </div><!-- // end .wrap -->
        <div id="copyright">
            <p class="text-center">WordPress theme by <a href="http://www.myhedspace.com">Myhedspace</a> &amp; <a href="http://www.jelontok.com">Jose Erlino Lontok</a></p>
        </div>
    </div>
    
    <?php wp_footer(); ?>

</body>
</html>