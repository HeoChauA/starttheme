<?php

/* **************************************************************************************************** */
// Load Admin Scripts
/* **************************************************************************************************** */

add_action('admin_print_scripts', 'nimbus_admin_scripts');

function nimbus_admin_scripts() {
    if (is_admin()) {
        wp_register_script('nimbus_admin', get_template_directory_uri() . '/nimbus/assets/js/nimbus_admin.js', array('wp-color-picker','jquery'), '1.0');
        wp_enqueue_script('nimbus_admin');
    }
}

/* **************************************************************************************************** */
// Load Admin CSS
/* **************************************************************************************************** */

add_action('admin_print_styles', 'nimbus_admin_styles');

function nimbus_admin_styles() {

    if (is_admin()) {
        wp_register_style("admin_css", get_template_directory_uri() . "/css/admin.css", array(), "1.0", "all");
        wp_enqueue_style('admin_css');
    }
}
?>