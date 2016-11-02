<?php
/* * *************************************************************************************************** */
// Create Theme Options page 
// Print required JS and CSS files
// Help for Theme Options page
/* * *************************************************************************************************** */

add_action('admin_menu', 'nimbus_add_theme_options_page');

function nimbus_add_theme_options_page() {

    // Create Theme Options page 

    $theme_options_page = add_theme_page(THEME_NAME . __(' Theme Options', 'nimbus'), __(' Theme Options', 'nimbus'), 'edit_theme_options', 'nimbus-options', 'nimbus_page_render');

    if (!$theme_options_page) {
        return;
    }

    // Print required JS and CSS files

    add_action('admin_print_styles-' . $theme_options_page, 'nimbus_options_styles');

    add_action('admin_print_scripts-' . $theme_options_page, 'nimbus_options_scripts');

}

/* * *************************************************************************************************** */
// Enqueue admin JS
/* * *************************************************************************************************** */

function nimbus_options_scripts() {
    wp_enqueue_script('jquery');
    wp_enqueue_script('jquery-form');
    wp_enqueue_script('jquery-ui-core');
    wp_enqueue_script('jquery-ui-tabs');
    wp_enqueue_script('jquery-ui-sortable');
    wp_register_script('jquery_cookie', get_template_directory_uri() . '/nimbus/assets/js/jquery.cookies.2.2.0.js', array('jquery'), '1.0');
    wp_enqueue_script('jquery_cookie');
    wp_register_script('options', get_template_directory_uri() . '/nimbus/assets/js/options.js', array('wp-color-picker','jquery'), '1.0');
    wp_enqueue_script('options');
    wp_register_script('options-upload', get_template_directory_uri() . '/nimbus/assets/js/options_uploader.js', array('jquery', 'media-upload', 'thickbox'), '1.0');
    wp_enqueue_script('options-upload');
    wp_register_script('fancybox', get_template_directory_uri() . '/nimbus/assets/js/jquery-fancybox-1-3-4.js', array('jquery'), '1.3.4');
    wp_enqueue_script('fancybox');
    wp_enqueue_media();
}

/* * *************************************************************************************************** */
// Enqueue admin CSS
/* * *************************************************************************************************** */

function nimbus_options_styles() {
    wp_enqueue_style( 'wp-color-picker' );
    wp_enqueue_style('admin-style', get_template_directory_uri() . '/nimbus/assets/css/option_page_style.css');
    wp_enqueue_style('color-picker', get_template_directory_uri() . '/nimbus/assets/css/colorpicker.css');
    wp_enqueue_style('fancybox', get_template_directory_uri() . '/nimbus/assets/css/jquery.fancybox-1.3.4.css');
    wp_enqueue_style('font-awesome', 'https://maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css');
    wp_enqueue_style('lato', 'http://fonts.googleapis.com/css?family=Lato:400,700,400italic,700italic');
    wp_enqueue_style('osans', 'http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800');
    wp_enqueue_style('thickbox');
}

/* * *************************************************************************************************** */
// Include Resources on init
/* * *************************************************************************************************** */


add_action('admin_init', 'nimbus_require_resources');

function nimbus_require_resources() {

    require_once dirname(__FILE__) . '/options_engine.php';
    require_once dirname(__FILE__) . '/options_security.php';
    require_once get_template_directory() . '/nimbus/demo/load_demo.php';
}

/* * *************************************************************************************************** */
// Register Settings on init
/* * *************************************************************************************************** */

add_action('admin_init', 'nimbus_register_settings_on_init');

function nimbus_register_settings_on_init() {

    register_setting('nimbus_option_group', THEME_OPTIONS, 'nimbus_options_sanitize');

}

/* * *************************************************************************************************** */
// Render options page
/* * *************************************************************************************************** */

if (!function_exists('nimbus_page_render')) {



    function nimbus_page_render() {

        ?>
        <div id="options_container">
            <div class="newsletter">
            <p>get the newsletter! <a class='nimbus_button_nl' target='_blank' href='http://eepurl.com/A2701'>Sign Up!</a></p> 
            </div>
            <div class="social_button fb">
                <div id="fb-root"></div>
                <script>(function(d, s, id) {
                  var js, fjs = d.getElementsByTagName(s)[0];
                  if (d.getElementById(id)) return;
                  js = d.createElement(s); js.id = id;
                  js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1&appId=528943183877095&version=v2.0";
                  fjs.parentNode.insertBefore(js, fjs);
                }(document, 'script', 'facebook-jssdk'));</script>
                <div class="fb-like" data-href="https://www.facebook.com/nimbusthemes" data-colorscheme="light" data-layout="button_count" data-show-faces="false"></div>
            </div>
            <div class="social_button twit">
                <a href="https://twitter.com/nimbusthemes" class="twitter-follow-button" data-show-count="true" data-show-screen-name="false">Follow @nimbusthemes</a>
                <script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+'://platform.twitter.com/widgets.js';fjs.parentNode.insertBefore(js,fjs);}}(document, 'script', 'twitter-wjs');</script>
            </div>
            <div class="social_button goog">
                <div class="g-follow" data-annotation="bubble" data-height="20" data-href="//plus.google.com/u/0/111351631103795825699" data-rel="publisher"></div>
                <script type="text/javascript">
                  (function() {
                    var po = document.createElement('script'); po.type = 'text/javascript'; po.async = true;
                    po.src = 'https://apis.google.com/js/platform.js';
                    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(po, s);
                  })();
                </script>
            </div>
            
            <div class="clear"></div>
            <a href="http://www.nimbusthemes.com"><img id="panel_logo" src="<?php echo get_template_directory_uri(); ?>/nimbus/assets/images/nimbus-panel.jpg" alt='Nimbus Panel'  /></a>
            <div id="options_wrapper">   
                <div id="options_header">    
                    <img src="<?php if (ISFREE) { echo get_template_directory_uri() . '/nimbus/assets/images/upgrade-panel.jpg'; } else { echo get_template_directory_uri() . '/nimbus/images/panel.jpg'; } ?>" id="options_banner" />
                    <?php if (ISFREE) { ?>
                    <a id="upgrade_in_banner" target="_blank" class="nimbus_button_big_pink" href="<?php echo SALESPAGEURL; ?>?utm_source=<?php echo THEME_NAME_CLEAN; ?>&utm_medium=theme&utm_content=upgrade_in_banner_button&utm_campaign=<?php echo THEME_NAME_CLEAN; ?>">Upgrade Now!</a>
                    <?php } ?>
                </div>
                <div id="options_content">    
                    <div id="tab_wrapper">    
                        <ul id="tabs">
                            <?php nimbus_tab_engine(); ?>
                        </ul>
                    </div>
                    <div id="form_wrapper">
                        <form action="options.php" method="post" id="nimbus_form">
                            <div id="options_buttons_top">
                                <a id="demo_options_top" target="_blank" class="nimbus_button_big_gray" href="<?php echo DEMOURL; ?>&utm_source=<?php echo THEME_NAME_CLEAN; ?>&utm_medium=theme&utm_content=demo_button&utm_campaign=<?php echo THEME_NAME_CLEAN; ?>">View Demo</a>
                                <a id="support_options_top" target="_blank" class="nimbus_button_big_gray" href="<?php echo SUPPORTINFOURL; ?>?utm_source=<?php echo THEME_NAME_CLEAN; ?>&utm_medium=theme&utm_content=support_button&utm_campaign=<?php echo THEME_NAME_CLEAN; ?>">Get Help</a>   
                                <?php 
                                submit_button( 'Save', 'nimbus_button_big_blue', 'update', false, array( 'id' => 'update_options_top'));
                                ?>
                            </div>
                            <?php
                            settings_errors();
                            settings_fields('nimbus_option_group');
                            nimbus_field_engine();
                            ?>
                            <div class="clear20"></div>
                            <div id="options_buttons_bottom">
                                <?php 
                                $reset_confirm = __('Are you sure you want to reset? ALL SAVED SETTINGS WILL BE LOST!', 'nimbus');
                                submit_button( 'Reset', 'nimbus_button_big_lgray', 'reset', false, array( 'id' => 'reset_options_top', 'onclick' => 'return confirm( \'' . $reset_confirm . '\')'));
                                ?>
                                <a id="demo_options_bottom" target="_blank" class="nimbus_button_big_gray" href="<?php echo DEMOURL; ?>&utm_source=<?php echo THEME_NAME_CLEAN; ?>&utm_medium=theme&utm_content=demo_button&utm_campaign=<?php echo THEME_NAME_CLEAN; ?>">View Demo</a>
                                <a id="support_options_bottom" target="_blank" class="nimbus_button_big_gray" href="<?php echo SUPPORTINFOURL; ?>?utm_source=<?php echo THEME_NAME_CLEAN; ?>&utm_medium=theme&utm_content=support_button&utm_campaign=<?php echo THEME_NAME_CLEAN; ?>">Get Help</a>   
                                <?php 
                                submit_button( 'Save', 'nimbus_button_big_blue', 'update', false, array( 'id' => 'update_options_top'));
                                ?>
                            </div>
                        </form>
                    </div>
                    <div class="clear20"></div>
                </div> 
            </div> 
        </div>
        <div style="clear:both;"></div>
        <?php
    }
}


/* * *************************************************************************************************** */
// On options form submit do:
/* * *************************************************************************************************** */

function nimbus_options_sanitize($input) {

    global $NIMBUS_OPTIONS_ARR;

    // Do if selected reset button
    if (isset($_POST['reset'])) {
        $alert = __('Default options restored.', 'nimbus');
        add_settings_error('nimbus-options', 'restore_defaults', $alert, 'updated fade');
        return nimbus_return_defaults();
    }
    
    // Do if selected loaddemo button
    if (isset($_POST['loaddemo'])) {
        if (get_option( 'demo_loaded' ) != 'true') {
            $alert = __('Demo content is loaded', 'nimbus');
            add_settings_error('nimbus-options', 'demo_loaded', $alert, 'updated fade');
            nimbus_load_demo_content();
            update_option( 'demo_loaded', 'true' );
        } else {
            $alert = __('Demo content was previously loaded', 'nimbus');
            add_settings_error('nimbus-options', 'demo_loaded', $alert, 'updated fade');
        }
    }

    // Do if selected save button
    if (isset($_POST['update'])) {
        $clean = array();
        $options = $NIMBUS_OPTIONS_ARR;
        foreach ($options as $option) {
            if (!isset($option['id'], $option['type']) || ($option['type'] == 'tab') || ($option['type'] == 'item_html')) {
                continue;
            }
            $id = preg_replace('/[^a-zA-Z0-9._\-]/', '', strtolower($option['id']));
            
            // Set checkbox to false if it wasn't sent in the $_POST
            if ( 'checkbox' == $option['type'] && ! isset( $input[$id] ) ) {
                $input[$id] = false;
            }

            // Set each item in the multicheck to false if it wasn't sent in the $_POST
            if ( 'multicheck' == $option['type'] && ! isset( $input[$id] ) ) {
                foreach ( $option['options'] as $key => $value ) {
                    $input[$id][$key] = false;
                }
            }
            
            // Apply filters
            if (isset($input[$id])) {
                if (has_filter('nimbus_filter_' . $option['type'])) {
                    $clean[$id] = apply_filters('nimbus_filter_' . $option['type'], $input[$id], $option);
                } else {
                    $clean[$id] = $input[$id];
                }
            }
            
        }
        $alert = __('Options saved.', 'nimbus');
        add_settings_error('nimbus-options', 'save_options', $alert, 'updated fade');
        return $clean;
    } 
}

/* * *************************************************************************************************** */
// Return default options
/* * *************************************************************************************************** */

function nimbus_return_defaults() {

    global $NIMBUS_OPTIONS_ARR;
    $defaults_return = array();
    $options = $NIMBUS_OPTIONS_ARR;
    foreach ((array) $options as $option) {
        if (!isset($option['id'], $option['default'])) {
            continue;
        }
        $defaults_return[$option['id']] = $option['default'];
    }
    return $defaults_return;
}

/* * *************************************************************************************************** */
// Helper to return options.
/* * *************************************************************************************************** */

if (!function_exists('nimbus_get_option')) {
    function nimbus_get_option($option_data, $default_data = false) {
        global $NIMBUS_OPTIONS_ARR;
        $options = get_option(THEME_OPTIONS);
        $default_options = $NIMBUS_OPTIONS_ARR;
        if (isset($options[$option_data])) {
            return $options[$option_data];
        } else {
            $default = $default_options[$option_data]['default'];
            return $default;
        }
    }
}



