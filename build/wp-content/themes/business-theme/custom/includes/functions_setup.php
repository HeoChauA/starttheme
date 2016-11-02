<?php

/* **************************************************************************************************** */
// Flush Rewrite on Activation
/* **************************************************************************************************** */

    function nimbus_rewrite_flush() {
        flush_rewrite_rules();
    }
    add_action('after_switch_theme', 'nimbus_rewrite_flush');

/* **************************************************************************************************** */
// Setup Theme
/* **************************************************************************************************** */

    require_once(get_template_directory() . '/nimbus/ext/wp_bootstrap_navwalker.php');
    add_action('after_setup_theme', 'nimbus_setup');

    if (!function_exists('nimbus_setup')):
        function nimbus_setup() {   
            $lang_local = get_template_directory() . '/lang';
            load_theme_textdomain('nimbus', $lang_local);
            #Register Thumbnail Sizes
            add_theme_support('post-thumbnails');
            set_post_thumbnail_size(818, 416, true);
            add_image_size('nimbus_232_119', 232, 119, true);
            add_image_size('nimbus_818_416', 818, 416, true);
            #Load feed links	
            add_theme_support('automatic-feed-links');
            #Register Menus
            if (function_exists('register_nav_menu')) {
                register_nav_menu('primary', __('Primary Menu', 'nimbus'));
            }
        }
    endif;
    
/* **************************************************************************************************** */
// Set Content Width
/* **************************************************************************************************** */

if ( ! isset( $content_width ) ) {
    $content_width = 1140;
}
    
?>