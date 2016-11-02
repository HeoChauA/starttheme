<?php
/* **************************************************************************************************** */
// Define
/* **************************************************************************************************** */

    $get_wp_version = get_bloginfo('version');
    $theme_data = wp_get_theme();
    define('OPTIONS_PATH', get_template_directory_uri() . '/nimbus/options');
    define('THEME_NAME', $theme_data['Name']);
    define('THEME_NAME_CLEAN', str_replace(" ", "_", strtolower(THEME_NAME)));
    define('THEME_OPTIONS', 'business_options');
    define('SALESPAGEURL', 'http://www.nimbusthemes.com/wordpress-themes/business-theme/');
    define('SUPPORTINFOURL', 'https://www.nimbusthemes.com/support/');
    define('ALLTHEMES', 'http://www.nimbusthemes.com/join/');
    define('DEMOURL', 'http://preview.nimbusthemes.com/?theme=business');
    define('GUIDEURL', 'http://www.nimbusthemes.com/user-guides/');
    define('ISFREE', TRUE);

/* **************************************************************************************************** */
// Theme Setup
/* **************************************************************************************************** */

    require_once(get_template_directory() . '/custom/includes/functions_setup.php');

/* **************************************************************************************************** */
// Load Admin Panel/Scripts
/* **************************************************************************************************** */

    require_once(get_template_directory() . '/nimbus/options/options.php');
    require_once(get_template_directory() . '/nimbus/options/options_utils.php');
    require_once(get_template_directory() . '/nimbus/options/options_arr.php');
    require_once(get_template_directory() . '/nimbus/includes/functions_admin_scripts.php');

/* **************************************************************************************************** */
// Load Public Scripts
/* **************************************************************************************************** */

    require_once(get_template_directory() . '/custom/includes/functions_public_scripts.php');


/* **************************************************************************************************** */
// Output Modifier Functions
/* **************************************************************************************************** */

    require_once(get_template_directory() . '/custom/includes/functions_output.php');

/* **************************************************************************************************** */
// Helper Functions
/* **************************************************************************************************** */

    require_once(get_template_directory() . '/nimbus/includes/functions_helper.php');
    
/* **************************************************************************************************** */
// Widgets / Register Sidebars
/* **************************************************************************************************** */

    require_once(get_template_directory() . '/custom/widgets/widgets.php');    

/* **************************************************************************************************** */
// Load Metaboxes
/* **************************************************************************************************** */

    require_once(get_template_directory() . '/nimbus/includes/functions_meta_boxes.php');
    require_once(get_template_directory() . '/custom/meta_boxes/meta_boxes.php');

/* **************************************************************************************************** */
// Comments
/* **************************************************************************************************** */

    require_once(get_template_directory() . '/custom/includes/functions_comments.php');

?>