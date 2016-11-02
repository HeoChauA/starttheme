<?php
/* * *************************************************************************************************** */
// Global Options Array
/* * *************************************************************************************************** */


global $NIMBUS_OPTIONS_ARR;

$NIMBUS_OPTIONS_ARR = array();


/* **************************************************************************************************** */
// Membership
/* **************************************************************************************************** */

$NIMBUS_OPTIONS_ARR["membership_tab"] = array("name" => __('Nimbus Membership', 'nimbus'),
    "id" => "membership_tab",
    "tab" => "tab",
    "classes" => "",
    "url" => "membership",
    "icon" => "fa-star",
    "type" => "tab");

$NIMBUS_OPTIONS_ARR[] = array( "tab" => "membership",
    "html" => "
        <div id='membership_tab'>
            <h1>" . __('Nimbus Membership', 'nimbus') . "</h1>
            <h2 style='color:#ca0088;font-weight:bold;font-size:22px;'>" . __('Join Nimbus and start building awesome sites today!', 'nimbus') . "</h2>
            <img src='" . get_template_directory_uri() . "/nimbus/assets/images/themes-join2.jpg' style='width:100%;height:auto;' />
            <div class='clear25'></div>
            <div class='clear15'></div>
            <div style='text-align:center;'>
            <a class='nimbus_button_big_pink' target='_blank' href='" . SALESPAGEURL . "?utm_source=" . THEME_NAME_CLEAN . "&utm_medium=theme&utm_content=panel_membership_tab&utm_campaign=" . THEME_NAME_CLEAN . "'>" . __('Upgrade Theme', 'nimbus') . "</a><a class='nimbus_button_big_pink' target='_blank' href='" . ALLTHEMES . "?utm_source=" . THEME_NAME_CLEAN . "&utm_medium=theme&utm_content=panel_membership_tab&utm_campaign=" . THEME_NAME_CLEAN . "'>" . __('Get ALL Themes', 'nimbus') . "</a>
            </div>
            <div class='clear25'></div>
            <div class='clear15'></div>
            <div class='option_wrapper'>
                <h2 style='color:#ca0088;font-weight:bold;font-size:22px;'>" . __('With your purchase you will get:', 'nimbus') . "</h2>
                <div class='clear'></div>
            <ul>
                <li>
                    <h3 style='color:#ca0088;'>" . __('Unlimited Support For Theme Features', 'nimbus') . "</h3>
                    <p>" . __('If you\'ve got questions, we\'ve got answers. It\'s our commitment to you that we\'ll provide the most positive support anywhere on the web!', 'nimbus') . "</p>
                </li>
                <li><h3 style='color:#ca0088;'>" . __('Frontpage Slideshows', 'nimbus') . "</h3>
                    <p>" . __('Create your website\'s front page by choosing one of several slidshow layouts and designs.', 'nimbus') . "</p>
                </li>
                <li><h3 style='color:#ca0088;'>" . __('Responsive, Custom CSS Options', 'nimbus') . "</h3>
                    <p>" . __('Polish your site down to the minute detail with responsive, custom CSS. Your site can look different on every browser size!', 'nimbus') . "</p>
                </li>
                <li>
                    <h3 style='color:#ca0088;'>" . __('Powerful SEO Tools', 'nimbus') . "</h3>
                    <p>" . __('Get powerful SEO tools that give you maximum control of your theme\'s placement on Google. Add custom titles, descriptions and keywords to each page or choose defaults for ease of use.', 'nimbus') . "</p>
                </li>
                <li><h3 style='color:#ca0088;'>" . __('Extended Social Media Integration', 'nimbus') . "</h3>
                    <p>" . __('Take advantage of additional social network integrations and increase the reach of your website.', 'nimbus') . "</p>
                </li>
                <li><h3 style='color:#ca0088;'>" . __('Multiple Frontpages', 'nimbus') . "</h3>
                    <p>" . __('Use a custom page template to apply the frontpage layout to as many pages as you want!', 'nimbus') . "</p>
                </li>
                <li><h3 style='color:#ca0088;'>" . __('Demo Content Loader', 'nimbus') . "</h3>
                    <p>" . __('Make setting up your website easy by loading demo content with the click of a button.', 'nimbus') . "</p>
                </li>
                <li><h3 style='color:#ca0088;'>" . __('Additional Script Integration', 'nimbus') . "</h3>
                    <p>" . __('Use in-page script locations to embed buttons and widgets from your favorite third-party services.', 'nimbus') . "</p>
                </li>
            <ul>
            
                <div class='clear25'></div>
                <div class='clear15'></div>
                <div style='text-align:center;'>
                <a class='nimbus_button_big_pink' target='_blank' href='" . SALESPAGEURL . "?utm_source=" . THEME_NAME_CLEAN . "&utm_medium=theme&utm_content=panel_membership_tab&utm_campaign=" . THEME_NAME_CLEAN . "'>" . __('Upgrade Theme', 'nimbus') . "</a><a class='nimbus_button_big_pink' target='_blank' href='" . ALLTHEMES . "?utm_source=" . THEME_NAME_CLEAN . "&utm_medium=theme&utm_content=panel_membership_tab&utm_campaign=" . THEME_NAME_CLEAN . "'>" . __('Get ALL Themes', 'nimbus') . "</a>
                <div class='clear25'></div>
                </div>
            </div>
            <div class='clear25'></div>
        </div>
    <div class='clear30'></div>
  ",
  "type" => "html");        
    
    

  $NIMBUS_OPTIONS_ARR[] = array(
    "type" => "close_tab"
    );

/* * *************************************************************************************************** */
// Setup
/* * *************************************************************************************************** */

$NIMBUS_OPTIONS_ARR["setup_tab"] = array("name" => __('Theme Setup', 'nimbus'),
    "id" => "setup_tab",
    "tab" => "tab",
    "classes" => "",
    "url" => "setup",
    "icon" => "fa-cog",
    "type" => "tab");

$NIMBUS_OPTIONS_ARR[] = array( "tab" => "setup",
    "html" => "
    <h1>" . __('Set Up Your ', 'nimbus') . THEME_NAME . __(' Theme', 'nimbus') . "</h1>
    <p><strong>" . __('We realize there\'s a lot going on with this theme, so we\'ve tried to make setup as simple as possible.', 'nimbus') . "</strong></p>
    <p>" . __('There are a few initial steps that will put you on track to creating the fully operational website of your dreams:', 'nimbus') . "</p>
    <div class='option_wrapper'>
            <a href='" . SALESPAGEURL . "?utm_source=" . THEME_NAME_CLEAN . "&utm_medium=theme&utm_content=panel_link&utm_campaign=" . THEME_NAME_CLEAN . "' style='float:right; margin:20px 0 20px 20px;' type='submit' class='nimbus_button_sm_pink'>" . __('Upgrade today!!', 'nimbus') . "</a>
            <p class='option_name'><span class='option_number'>1</span>. LOAD DEMO CONTENT</p>
            <p>" . __('If you are starting from scratch, then you\'ll want to load some example content by clicking the button below.', 'nimbus') . "</p>
            <div class='clear'></div>
            
    </div>
    <div class='option_wrapper'>
            <a style='float:right; margin:40px 0 20px 20px;' class='nimbus_button_sm_blue' target='_blank' href='" . GUIDEURL . "'>" . __('Download', 'nimbus') . "</a>
            <p class='option_name'><span class='option_number'>2</span>. DOWNLOAD THE USER GUIDE</p>
            <p>" . __('Once you\'ve loaded the demo content, you\'re going to want to learn how to make changes to your website and use the Nimbus Panel. We\'ve provided an extensive user guide PDF that you\'ll want to read through as you\'re learning your way around:', 'nimbus') . "</p>
            
    </div>
    <h1>" . __('Example Content', 'nimbus') . "</h1>
  ",
  "type" => "html"); 

$NIMBUS_OPTIONS_ARR["nimbus_example_content"] = array("name" => __('Example Content', 'nimbus'),
    "desc" => __('When you\'re comfortable working with the theme, you may want to turn off all example content.', 'nimbus'),
    "id" => "nimbus_example_content",
    "default" => "on",
    "type" => "radio",
    "tab" => "setup",
    "classes" => "",
    "options" => array("on" => __('On', 'nimbus'),"off" => __('Off', 'nimbus')));

$NIMBUS_OPTIONS_ARR[] = array(
    "type" => "close_tab"
);


/* * *************************************************************************************************** */
// General
/* * *************************************************************************************************** */

$NIMBUS_OPTIONS_ARR["general_tab"] = array("name" => __('General Settings', 'nimbus'),
    "id" => "general_tab",
    "tab" => "tab",
    "classes" => "",
    "url" => "general",
    "icon" => "fa-cogs",
    "type" => "tab");

$NIMBUS_OPTIONS_ARR[] = array(
    "tab" => "general",
    "html" => "<h1>" . __('Logo Options', 'nimbus') . "</h1>",
    "type" => "html"
    );

$NIMBUS_OPTIONS_ARR["nimbus_image_logo"] = array("name" => __('Image Logo', 'nimbus'),
    "desc" => __('Upload a logo image. If you have a logo, enter it here. The dimensions of the logo image you upload will be the dimensions you see on your website, so make sure it\'s the size you want. A suggested size for this template is 234x60px.', 'nimbus'),
    "id" => "nimbus_image_logo",
    "default" => "",
    "tab" => "general",
    "classes" => "",
    "type" => "pro");

$NIMBUS_OPTIONS_ARR["nimbus_text_logo"] = array("name" => __('Text Logo', 'nimbus'),
    "desc" => __('If no image logo is loaded, a text logo will be displayed. You can style this text logo on the <strong>Typogaphy</strong> tab. This text logo will also be visible at mobile sizes.', 'nimbus'),
    "id" => "nimbus_text_logo",
    "default" => get_bloginfo('name'),
    "type" => "text",
    "classes" => "");
    
$NIMBUS_OPTIONS_ARR[] = array(
    "tab" => "general",
    "html" => "<h1>" . __('Subpage Title Banner', 'nimbus') . "</h1>",
    "type" => "html"
    );
    
$NIMBUS_OPTIONS_ARR["nimbus_page_banner_image"] = array("name" => __('Subpage Title Banner Image', 'nimbus'),
    "desc" => __('This is the image that will sit behind the title on pages, posts and archives. You may find that a horizontally-oriented image with dimensions like 1420x140px will display very well. ', 'nimbus'),
    "id" => "nimbus_page_banner_image",
    "default" => "",
    "tab" => "general",
    "classes" => "",
    "type" => "image");    
    
$NIMBUS_OPTIONS_ARR["nimbus_page_banner_image_effect"] = array("name" => __('Subpage Title Banner Image Display', 'nimbus'),
    "desc" => __('Choose to have your banner image fill the header banner location using the css background-size cover effect, or tile the image to fill the space.', 'nimbus'),
    "id" => "nimbus_page_banner_image_effect",
    "default" => "cover",
    "type" => "radio",
    "tab" => "general",
    "classes" => "",
    "options" => array("tile" => __('Tile', 'nimbus'),"cover" => __('Cover', 'nimbus')));     
    

$NIMBUS_OPTIONS_ARR[] = array(
    "tab" => "general",
    "html" => "<h1>" . __('Additional Image Options', 'nimbus') . "</h1>",
    "type" => "html"
    );
    
   
    

$NIMBUS_OPTIONS_ARR["favicon"] = array("name" => __('Favicon', 'nimbus'),
    "desc" => __('Upload a favicon image.', 'nimbus'),
    "id" => "favicon",
    "default" => "",
    "tab" => "general",
    "classes" => "",
    "type" => "pro");

$NIMBUS_OPTIONS_ARR[] = array(
    "tab" => "general",
    "html" => "<h1>" . __('Copyright Options', 'nimbus') . "</h1>",
    "type" => "html"
    );

$NIMBUS_OPTIONS_ARR["copyright"] = array(
    "name" => __('Copyright Text', 'nimbus'),
    "desc" => __('This text wil be displayed in the footer of your website.', 'nimbus'),
    "id" => "copyright",
    "tab" => "general",
    "default" => "&copy; " . date('o') . ", " . get_bloginfo('name'),
    "type" => "textarea"
    );

$NIMBUS_OPTIONS_ARR[] = array(
    "type" => "close_tab"
);




/* * *************************************************************************************************** */
// Frontpage
/* * *************************************************************************************************** */

$NIMBUS_OPTIONS_ARR["frontpage_tab"] = array(
    "name" => __('Frontpage Options', 'nimbus'),
    "id" => "frontpage_tab",
    "tab" => "tab",
    "classes" => "",
    "url" => "frontpage",
    "icon" => "fa-file",
    "type" => "tab"
    );
    
$NIMBUS_OPTIONS_ARR[] = array(
    "tab" => "frontpage",
    "html" => "<h1>" . __('Sort Frontpage Rows', 'nimbus') . "</h1>",
    "type" => "html"
    );

$NIMBUS_OPTIONS_ARR["nimbus_frontpage_sections_order"] = array(
    "name" => __('Front Page Sections', 'nimbus'),
    "desc" => __('Sort the front page sections in the order you\'d like to show them.', 'nimbus'),
    "id" => "nimbus_frontpage_sections_order",
    "default" => "4boxes,testimonials,services,partners,team,pagetext", // Must be set!
    "tab" => "frontpage",
    "type" => "sortable",
    "options" => array("4boxes" => __('Featured Pages', 'nimbus'), "testimonials" => __('Testimonials', 'nimbus'), "services" => __('Tabs', 'nimbus'), "partners" => __('Client Logos', 'nimbus'), "team" => __('Team', 'nimbus'), "pagetext" => __('Page Text/Content', 'nimbus'))
    );
    
$NIMBUS_OPTIONS_ARR[] = array(
    "tab" => "frontpage",
    "html" => "<h1>" . __('Set Row Background Colors', 'nimbus') . "</h1>",
    "type" => "html"
    );    

$NIMBUS_OPTIONS_ARR[] = array(
    "tab" => "frontpage",
    "html" => "<p>" . __('The options below allow you to set a backgound color other than the defaults. If left blank, the rows will automatically alternate between white and gray.', 'nimbus') . "<br /><br /></p>",
    "type" => "html"
    ); 

$NIMBUS_OPTIONS_ARR["nimbus_4boxes_bg_color"] = array("name" => __('Featured Pages Background Color', 'nimbus'),
    "desc" => __('Select the background color for the Featured Pages on the front page. Leave blank for default.', 'nimbus'),
    "id" => "nimbus_4boxes_bg_color",
    "default" => "",
    "type" => "pro",
    "tab" => "frontpage"
    );
    
$NIMBUS_OPTIONS_ARR["nimbus_testimonials_bg_color"] = array("name" => __('Testimonials Background Color', 'nimbus'),
    "desc" => __('Select the background color for the testimonials on the front page. Leave blank for default.', 'nimbus'),
    "id" => "nimbus_testimonials_bg_color",
    "default" => "",
    "type" => "pro",
    "tab" => "frontpage"
    );
    
$NIMBUS_OPTIONS_ARR["nimbus_services_bg_color"] = array("name" => __('Tabs Background Color', 'nimbus'),
    "desc" => __('Select the background color for the tabs section on the front page. Leave blank for default.', 'nimbus'),
    "id" => "nimbus_services_bg_color",
    "default" => "",
    "type" => "pro",
    "tab" => "frontpage"
    );
    
$NIMBUS_OPTIONS_ARR["nimbus_partners_bg_color"] = array("name" => __('Client/Partner Logos Background Color', 'nimbus'),
    "desc" => __('Select the background color for the client logos on the front page. Leave blank for default.', 'nimbus'),
    "id" => "nimbus_partners_logos_bg_color",
    "default" => "",
    "type" => "pro",
    "tab" => "frontpage"
    );
    
$NIMBUS_OPTIONS_ARR["nimbus_team_bg_color"] = array("name" => __('Team Background Color', 'nimbus'),
    "desc" => __('Select the background color for the team section on the front page. Leave blank for default.', 'nimbus'),
    "id" => "nimbus_team_bg_color",
    "default" => "",
    "type" => "pro",
    "tab" => "frontpage"
    );
    
$NIMBUS_OPTIONS_ARR["nimbus_pagetext_bg_color"] = array("name" => __('Home Content/Blog Background Color', 'nimbus'),
    "desc" => __('Select the background color for the home page content or blog on the front page. Leave blank for default.', 'nimbus'),
    "id" => "nimbus_frontpage_content_bg_color",
    "default" => "",
    "type" => "pro",
    "tab" => "frontpage"
    );

    $NIMBUS_OPTIONS_ARR[] = array(
    "type" => "close_tab"
);


/* * *************************************************************************************************** */
// Front Page: Banner Options
/* * *************************************************************************************************** */

$NIMBUS_OPTIONS_ARR["frontpage_banner_tab"] = array("name" => __('Banner Options', 'nimbus'),
    "id" => "frontpage_banner_tab",
    "tab" => "tab",
    "classes" => "",
    "url" => "frontpage_banner",
    "icon" => "fa-picture-o",
    "type" => "tab");

$NIMBUS_OPTIONS_ARR[] = array(
    "tab" => "frontpage_banner",
    "html" => "<h1>" . __('Banner Options', 'nimbus') . "</h1>",
    "type" => "html"
    );
    
$NIMBUS_OPTIONS_ARR[] = array( "tab" => "frontpage",
    "html" => "
        <div id='membership_tab'>
            <h2 style='color:#ca0088;font-weight:bold;font-size:22px;margin: .67em 0;line-height:1.3em;padding-top: 15px;'>" . __('Create Beautiful Slideshows', 'nimbus') . "</h2>
            <img src='" . get_template_directory_uri() . "/nimbus/assets/images/slider.jpg' style='width:100%;height:auto;' />
            <div class='clear25'></div>
            <div class='clear15'></div>
            <div class='option_wrapper'>
                <h2 style='color:#ca0088;font-weight:bold;font-size:22px;'>" . __('With your purchase you will get:', 'nimbus') . "</h2>
                <div class='clear'></div>
            <ul>
                <li><h3 style='color:#ca0088;'>" . __('Beautiful Image Slideshow', 'nimbus') . "</h3>
                    <p>" . __('Create beautiful and dynamic slideshows to set just the right tone on your website.', 'nimbus') . "</p>
                </li>
                <li><h3 style='color:#ca0088;'>" . __('Ability to add Custom Videos or HTML', 'nimbus') . "</h3>
                    <p>" . __('The possibilities are endless. Add video, images, and so much more!', 'nimbus') . "</p>
                </li>
            <ul>
            
                <div class='clear25'></div>
                <div class='clear15'></div>
                <div style='text-align:center;'>
                <a class='nimbus_button_big_pink' target='_blank' href='" . SALESPAGEURL . "?utm_source=" . THEME_NAME_CLEAN . "&utm_medium=theme&utm_content=panel_link&utm_campaign=" . THEME_NAME_CLEAN . "'>" . __('Upgrade Theme', 'nimbus') . "</a><a class='nimbus_button_big_pink' target='_blank' href='" . ALLTHEMES . "?utm_source=" . THEME_NAME_CLEAN . "&utm_medium=theme&utm_content=panel_membership_tab&utm_campaign=" . THEME_NAME_CLEAN . "'>" . __('Get ALL Themes', 'nimbus') . "</a>
                <div class='clear25'></div>
                </div>
            </div>
        </div>
  ",
  "type" => "html");      
    

$NIMBUS_OPTIONS_ARR["nimbus_banner_option"] = array(
    "name" => __('Banner Options', 'nimbus'),
    "desc" => __('Select which banner layout you would like to display on the frontpage.', 'nimbus'),
    "id" => "nimbus_banner_option",
    "default" => "image_content_width",
    "tab" => "frontpage_banner",
    "type" => "radio",
    "options" => array( "image_content_width" => __('Banner Image', 'nimbus'), "none" => __('No Banner', 'nimbus'))
    );
    
$NIMBUS_OPTIONS_ARR[] = array(
    "tab" => "frontpage_banner",
    "html" => "<h1>" . __('Banner Image', 'nimbus') . "</h1>",
    "type" => "html"
    );
    
    
    
$NIMBUS_OPTIONS_ARR["nimbus_slider_pro"] = array( 
    "tab" => "frontpage",
    "name" =>  __('Slideshow Spanning the Width of the Content Area', 'nimbus'),
    "id" => "nimbus_slider_pro",
    "type" => "pro"
    );  
    
 $NIMBUS_OPTIONS_ARR["nimbus_no_con_pro"] = array( 
    "tab" => "frontpage",
    "name" => __('Full Width Banner Content: No Image', 'nimbus'),
    "id" => "nimbus_no_con_pro",
    "type" => "pro"
    );   
$NIMBUS_OPTIONS_ARR["nimbus_banner_and_content"] = array("name" => __('Banner Image', 'nimbus'),
    "desc" => __('Select the banner off your desktop. It should be 1450x430 pixels. Or use the image editor to resize your image.', 'nimbus'),
    "id" => "nimbus_banner_and_content",
    "default" => "",
    "type" => "image",
    "tab" => "frontpage_banner"
    );    
    
$NIMBUS_OPTIONS_ARR["nimbus_banner_content"] = array("name" => __('Content in Banner', 'nimbus'),
    "desc" => __('Use the text editor to input basic HTML and shortcodes to style your content.', 'nimbus'),
    "id" => "nimbus_banner_content",
    "default" => "<h1 class='text-center' style='color:#fff; padding-top:170px;font-size:40px;'>Your Title Here</h1><p class='text-center' style='color:#fff;font-size:20px;'>And maybe some text also!</p>",
    "type" => "editor",
    "tab" => "frontpage_banner"
    );
    
    
  
    

    

$NIMBUS_OPTIONS_ARR[] = array(
    "type" => "close_tab"
);



/* * *************************************************************************************************** */
// Front Page: Featured Pages
/* * *************************************************************************************************** */

$NIMBUS_OPTIONS_ARR["frontpage_4boxes_tab"] = array("name" => __('Featured Pages', 'nimbus'),
    "id" => "frontpage_4boxes_tab",
    "tab" => "tab",
    "classes" => "",
    "url" => "frontpage_4boxes",
    "icon" => "fa-cube",
    "type" => "tab");
    
$NIMBUS_OPTIONS_ARR[] = array(
    "tab" => "typography",
    "html" => "<h1>" . __('Featured Page Row Options', 'nimbus') . "</h1>",
    "type" => "html"
    );
    
$NIMBUS_OPTIONS_ARR["toggle_featured_pages"] = array(
    "name" => __('Show/Hide Row', 'nimbus'),
    "desc" => __('', 'nimbus'),
    "id" => "toggle_featured_pages",
    "default" => "show",
    "tab" => "frontpage_4boxes",
    "type" => "radio",
    "options" => array( "show" => __('Show Row', 'nimbus'), "hide" => __('Hide Row', 'nimbus'))
    );

$NIMBUS_OPTIONS_ARR["nimbus_4boxes_1"] = array("name" => __('Left Featured Page', 'nimbus'),
    "desc" => __('Set the page to appear on the first box on the home/front page.', 'nimbus'),
    "id" => "nimbus_4boxes_1",
    "default" => nimbus_random_page(),
    "tab" => "frontpage_4boxes",
    "type" => "select",
    "class" => "",
    "options" => nimbus_pages_arr());

$NIMBUS_OPTIONS_ARR["nimbus_4boxes_1_icon"] = array("name" => __('Left Featured Page Icon', 'nimbus'),
    "desc" => __('Choose the icon you want to use. <span style="color:#ca0088;"><a style="color:#ca0088;" href="' . SALESPAGEURL . '?utm_source=' . THEME_NAME_CLEAN . '&utm_medium=theme&utm_content=panel_link&utm_campaign=' . THEME_NAME_CLEAN . '">Upgrade Now</a> to choose from <strong>439 Icons</strong></span>.', 'nimbus'),
    "id" => "nimbus_4boxes_1_icon",
    "default" => "fa-comments",
    "type" => "select",
    "options" => nimbus_fontawesome()
    );

$NIMBUS_OPTIONS_ARR["nimbus_4boxes_2"] = array("name" => __('Second Featured Page', 'nimbus'),
    "desc" => __('Set the page to appear on the second box on the home/front page.', 'nimbus'),
    "id" => "nimbus_4boxes_2",
    "default" => nimbus_random_page(),
    "tab" => "frontpage_4boxes",
    "type" => "select",
    "class" => "",
    "options" => nimbus_pages_arr());
    
$NIMBUS_OPTIONS_ARR["nimbus_4boxes_2_icon"] = array("name" => __('Second Featured Page Icon', 'nimbus'),
    "desc" => __('Choose the icon you want to use. <span style="color:#ca0088;"><a style="color:#ca0088;" href="' . SALESPAGEURL . '?utm_source=' . THEME_NAME_CLEAN . '&utm_medium=theme&utm_content=panel_link&utm_campaign=' . THEME_NAME_CLEAN . '">Upgrade Now</a> to choose from <strong>439 Icons</strong></span>.', 'nimbus'),
    "id" => "nimbus_4boxes_2_icon",
    "default" => "fa-cogs",
    "type" => "select",
    "options" => nimbus_fontawesome()
    );

$NIMBUS_OPTIONS_ARR["nimbus_4boxes_3"] = array("name" => __('Third Box', 'nimbus'),
    "desc" => __('Set the page to appear on the third box on the home/front page.', 'nimbus'),
    "id" => "nimbus_4boxes_3",
    "default" => nimbus_random_page(),
    "tab" => "frontpage_4boxes",
    "type" => "select",
    "class" => "",
    "options" => nimbus_pages_arr());
    
$NIMBUS_OPTIONS_ARR["nimbus_4boxes_3_icon"] = array("name" => __('Third Box Icon', 'nimbus'),
    "desc" => __('Choose the icon you want to use. <span style="color:#ca0088;"><a style="color:#ca0088;" href="' . SALESPAGEURL . '?utm_source=' . THEME_NAME_CLEAN . '&utm_medium=theme&utm_content=panel_link&utm_campaign=' . THEME_NAME_CLEAN . '">Upgrade Now</a> to choose from <strong>439 Icons</strong></span>.', 'nimbus'),
    "id" => "nimbus_4boxes_3_icon",
    "default" => "fa-coffee",
    "type" => "select",
    "options" => nimbus_fontawesome()
    );

$NIMBUS_OPTIONS_ARR["nimbus_4boxes_4"] = array("name" => __('Right Featured Page', 'nimbus'),
    "desc" => __('Set the page to appear on the fourth box on the home/front page.', 'nimbus'),
    "id" => "nimbus_4boxes_4",
    "default" => nimbus_random_page(),
    "tab" => "frontpage_4boxes",
    "type" => "select",
    "class" => "",
    "options" => nimbus_pages_arr());
    
$NIMBUS_OPTIONS_ARR["nimbus_4boxes_4_icon"] = array("name" => __('Right Featured Page Icon', 'nimbus'),
    "desc" => __('Choose the icon you want to use. <span style="color:#ca0088;"><a style="color:#ca0088;" href="' . SALESPAGEURL . '?utm_source=' . THEME_NAME_CLEAN . '&utm_medium=theme&utm_content=panel_link&utm_campaign=' . THEME_NAME_CLEAN . '">Upgrade Now</a> to choose from <strong>439 Icons</strong></span>.', 'nimbus'),
    "id" => "nimbus_4boxes_4_icon",
    "default" => "fa-fire-extinguisher",
    "type" => "select",
    "options" => nimbus_fontawesome()
    );

$NIMBUS_OPTIONS_ARR[] = array(
    "type" => "close_tab"
);


/* * *************************************************************************************************** */
// Front Page: Testimonials
/* * *************************************************************************************************** */

$NIMBUS_OPTIONS_ARR["frontpage_testimonials_tab"] = array("name" => __('Testimonials', 'nimbus'),
    "id" => "frontpage_testimonials_tab",
    "tab" => "tab",
    "classes" => "",
    "url" => "frontpage_testimonials",
    "icon" => "fa-comments",
    "type" => "tab");
    
$NIMBUS_OPTIONS_ARR[] = array(
    "tab" => "typography",
    "html" => "<h1>" . __('Frontpage Testimonials Row Options', 'nimbus') . "</h1>",
    "type" => "html"
    );
    
$NIMBUS_OPTIONS_ARR["toggle_testimonials"] = array(
    "name" => __('Show/Hide Row', 'nimbus'),
    "desc" => __('', 'nimbus'),
    "id" => "toggle_testimonials",
    "default" => "show",
    "tab" => "frontpage_testimonials",
    "type" => "radio",
    "options" => array( "show" => __('Show Row', 'nimbus'), "hide" => __('Hide Row', 'nimbus'))
    );        
    
 $NIMBUS_OPTIONS_ARR[] = array(
    "tab" => "frontpage_testimonials",
    "html" => "<p>" . __('Create a category called "Testimonials" in your post categories section. The three most recent posts assigned to the "Testimonials" category will show up on the home page. You can exclude the "Testimonials" category from the Blog if you like under the "Blog" tab in the Theme Options panel.', 'nimbus') . "</p><p style='padding-bottom:30px;'>" . __('To populate a testimonial post item, enter the individual\'s name and position in the Title field, if desired, by entering a &lt;br /&gt; tag to break the title to the next line. Then, enter the quote/testimonial in the content editor. Upload a photo in the featured image spot on the bottom right of the page. Click Publish and you\'re good to go!', 'nimbus') . "</p>",
    "type" => "html"
    );    

$NIMBUS_OPTIONS_ARR["nimbus_testimonials_heading"] = array("name" => __('Testimonials Section Heading', 'nimbus'),
    "desc" => __('Heading/title for this area.', 'nimbus'),
    "id" => "nimbus_testimonials_heading",
    "default" => "Our Testimonials",
    "type" => "text",
    "tab" => "frontpage_testimonials"
    );

$NIMBUS_OPTIONS_ARR[] = array(
    "type" => "close_tab"
);


/* * *************************************************************************************************** */
// Front Page: Tabs
/* * *************************************************************************************************** */

$NIMBUS_OPTIONS_ARR["frontpage_services_tab"] = array("name" => __('Tabs', 'nimbus'),
    "id" => "frontpage_services_tab",
    "tab" => "tab",
    "classes" => "",
    "url" => "frontpage_services",
    "icon" => "fa-hand-o-right",
    "type" => "tab");
    
$NIMBUS_OPTIONS_ARR[] = array(
    "tab" => "typography",
    "html" => "<h1>" . __('Frontpage Tabs Row Options', 'nimbus') . "</h1>",
    "type" => "html"
    );
    
$NIMBUS_OPTIONS_ARR["toggle_tabs"] = array(
    "name" => __('Show/Hide Row', 'nimbus'),
    "desc" => __('', 'nimbus'),
    "id" => "toggle_tabs",
    "default" => "show",
    "tab" => "frontpage_services",
    "type" => "radio",
    "options" => array( "show" => __('Show Row', 'nimbus'), "hide" => __('Hide Row', 'nimbus'))
    );       

$NIMBUS_OPTIONS_ARR["nimbus_services_heading"] = array("name" => __('Heading for Tabs Section', 'nimbus'),
    "desc" => "",
    "id" => "nimbus_services_heading",
    "default" => "Our Services",
    "type" => "text",
    "tab" => "frontpage_services"
    );

$NIMBUS_OPTIONS_ARR["nimbus_services_1_title"] = array("name" => __('First Tab Title', 'nimbus'),
    "desc" => "",
    "id" => "nimbus_services_1_title",
    "default" => nimbus_get_sample_content('h1'),
    "type" => "text",
    "tab" => "frontpage_services"
    );
$NIMBUS_OPTIONS_ARR["nimbus_services_1_icon"] = array("name" => __('First Tab Icon', 'nimbus'),
    "desc" => __('Choose the icon you want to use. <span style="color:#ca0088;"><a style="color:#ca0088;" href="' . SALESPAGEURL . '?utm_source=' . THEME_NAME_CLEAN . '&utm_medium=theme&utm_content=panel_link&utm_campaign=' . THEME_NAME_CLEAN . '">Upgrade Now</a> to choose from <strong>439 Icons</strong></span>.', 'nimbus'),
    "id" => "nimbus_services_1_icon",
    "default" => "fa-arrow-left",
    "type" => "select",
    "options" => nimbus_fontawesome()
    );

    
$NIMBUS_OPTIONS_ARR["nimbus_services_1_text"] = array("name" => __('First Tab Text', 'nimbus'),
    "desc" => __('Use the text editor to input basic HTML and shortcodes to style your content.', 'nimbus'),
    "id" => "nimbus_services_1_text",
    "default" => nimbus_get_sample_content('p'),
    "type" => "editor",
    "tab" => "frontpage_services"
    );      

$NIMBUS_OPTIONS_ARR["nimbus_services_2_title"] = array("name" => __('Second Tab Title', 'nimbus'),
    "desc" => "",
    "id" => "nimbus_services_2_title",
    "default" => nimbus_get_sample_content('h1'),
    "type" => "text",
    "tab" => "frontpage_services"
    );
$NIMBUS_OPTIONS_ARR["nimbus_services_2_icon"] = array("name" => __('Second Tab Icon', 'nimbus'),
    "desc" => __('Choose the icon you want to use. <span style="color:#ca0088;"><a style="color:#ca0088;" href="' . SALESPAGEURL . '?utm_source=' . THEME_NAME_CLEAN . '&utm_medium=theme&utm_content=panel_link&utm_campaign=' . THEME_NAME_CLEAN . '">Upgrade Now</a> to choose from <strong>439 Icons</strong></span>.', 'nimbus'),
    "id" => "nimbus_services_2_icon",
    "default" => "fa-cloud",
    "type" => "select",
    "options" => nimbus_fontawesome()
    );
$NIMBUS_OPTIONS_ARR["nimbus_services_2_text"] = array("name" => __('Second Tab Text', 'nimbus'),
    "desc" => __('Use basic HTML and shortcodes to style your content.', 'nimbus'),
    "id" => "nimbus_services_2_text",
    "default" => nimbus_get_sample_content('p'),
    "type" => "editor",
    "tab" => "frontpage_services"
    ); 

$NIMBUS_OPTIONS_ARR["nimbus_services_3_title"] = array("name" => __('Third Tab Title', 'nimbus'),
    "desc" => "",
    "id" => "nimbus_services_3_title",
    "default" => nimbus_get_sample_content('h1'),
    "type" => "text",
    "tab" => "frontpage_services"
    );
$NIMBUS_OPTIONS_ARR["nimbus_services_3_icon"] = array("name" => __('Third Tab Icon', 'nimbus'),
    "desc" => __('Choose the icon you want to use. <span style="color:#ca0088;"><a style="color:#ca0088;" href="' . SALESPAGEURL . '?utm_source=' . THEME_NAME_CLEAN . '&utm_medium=theme&utm_content=panel_link&utm_campaign=' . THEME_NAME_CLEAN . '">Upgrade Now</a> to choose from <strong>439 Icons</strong></span>.', 'nimbus'),
    "id" => "nimbus_services_3_icon",
    "default" => "fa-wordpress",
    "type" => "select",
    "options" => nimbus_fontawesome()
    );
$NIMBUS_OPTIONS_ARR["nimbus_services_3_text"] = array("name" => __('Third Tab Text', 'nimbus'),
    "desc" => __('Use basic HTML and shortcodes to style your content.', 'nimbus'),
    "id" => "nimbus_services_3_text",
    "default" => nimbus_get_sample_content('p'),
    "type" => "editor",
    "tab" => "frontpage_services"
    );

$NIMBUS_OPTIONS_ARR["nimbus_services_4_title"] = array("name" => __('Fourth Tab Title', 'nimbus'),
    "desc" => "",
    "id" => "nimbus_services_4_title",
    "default" => nimbus_get_sample_content('h1'),
    "type" => "text",
    "tab" => "frontpage_services"
    );
$NIMBUS_OPTIONS_ARR["nimbus_services_4_icon"] = array("name" => __('Fourth Tab Icon', 'nimbus'),
    "desc" => __('Choose the icon you want to use. <span style="color:#ca0088;"><a style="color:#ca0088;" href="' . SALESPAGEURL . '?utm_source=' . THEME_NAME_CLEAN . '&utm_medium=theme&utm_content=panel_link&utm_campaign=' . THEME_NAME_CLEAN . '">Upgrade Now</a> to choose from <strong>439 Icons</strong></span>.', 'nimbus'),
    "id" => "nimbus_services_4_icon",
    "default" => "fa-bolt",
    "type" => "select",
    "options" => nimbus_fontawesome()
    );
$NIMBUS_OPTIONS_ARR["nimbus_services_4_text"] = array("name" => __('Fourth Tab Text', 'nimbus'),
    "desc" => __('Use basic HTML and shortcodes to style your content.', 'nimbus'),
    "id" => "nimbus_services_4_text",
    "default" => nimbus_get_sample_content('p'),
    "type" => "editor",
    "tab" => "frontpage_services"
    );

$NIMBUS_OPTIONS_ARR[] = array(
    "type" => "close_tab"
);


/* * *************************************************************************************************** */
// Front Page: Partner Logos
/* * *************************************************************************************************** */

$NIMBUS_OPTIONS_ARR["frontpage_partners_logos_tab"] = array("name" => __('Logos Row', 'nimbus'),
    "id" => "frontpage_partners_logos_tab",
    "tab" => "tab",
    "classes" => "",
    "url" => "frontpage_partners_logos",
    "icon" => "fa-check-square-o",
    "type" => "tab");
    
$NIMBUS_OPTIONS_ARR[] = array(
    "tab" => "typography",
    "html" => "<h1>" . __('Frontpage Logos Row Options', 'nimbus') . "</h1>",
    "type" => "html"
    );
    
$NIMBUS_OPTIONS_ARR["toggle_logos"] = array(
    "name" => __('Show/Hide Row', 'nimbus'),
    "desc" => __('', 'nimbus'),
    "id" => "toggle_logos",
    "default" => "show",
    "tab" => "frontpage_partners_logos",
    "type" => "radio",
    "options" => array( "show" => __('Show Row', 'nimbus'), "hide" => __('Hide Row', 'nimbus'))
    );     
    

$NIMBUS_OPTIONS_ARR["nimbus_partners_heading"] = array("name" => __('Section Title', 'nimbus'),
    "desc" => __('Heading for this section.', 'nimbus'),
    "id" => "nimbus_partners_heading",
    "default" => "Our Clients",
    "type" => "text",
    "tab" => "frontpage_partners_logos");

$NIMBUS_OPTIONS_ARR["nimbus_partner_1_logo"] = array("name" => __('Client 1 Logo', 'nimbus'),
    "desc" => __('Upload a logo. Please note that the logo will appear at the upload size. ', 'nimbus'),
    "id" => "nimbus_partner_1_logo",
    "default" => get_sample_image('partners'),
    "tab" => "frontpage_partners_logos",
    "classes" => "",
    "type" => "image");
$NIMBUS_OPTIONS_ARR["nimbus_partner_1_link"] = array("name" => __('Client 1 URL', 'nimbus'),
    "desc" => __('URL to link client logo to. Leave blank if you do not wish to link to any URL.', 'nimbus'),
    "id" => "nimbus_partner_1_link",
    "default" => "#",
    "type" => "text",
    "tab" => "frontpage_partners_logos");

$NIMBUS_OPTIONS_ARR["nimbus_partner_2_logo"] = array("name" => __('Client 2 Logo', 'nimbus'),
    "desc" => __('Upload a logo. Please note that the logo will appear at the upload size. ', 'nimbus'),
    "id" => "nimbus_partner_2_logo",
    "default" => get_sample_image('partners'),
    "tab" => "frontpage_partners_logos",
    "classes" => "",
    "type" => "image");
$NIMBUS_OPTIONS_ARR["nimbus_partner_2_link"] = array("name" => __('Client 2 URL', 'nimbus'),
    "desc" => __('URL to link client logo to. Leave blank if you do not wish to link to any URL.', 'nimbus'),
    "id" => "nimbus_partner_2_link",
    "default" => "#",
    "type" => "text",
    "tab" => "frontpage_partners_logos");

$NIMBUS_OPTIONS_ARR["nimbus_partner_3_logo"] = array("name" => __('Client 3 Logo', 'nimbus'),
    "desc" => __('Upload a logo. Please note that the logo will appear at the upload size. ', 'nimbus'),
    "id" => "nimbus_partner_3_logo",
    "default" => get_sample_image('partners'),
    "tab" => "frontpage_partners_logos",
    "classes" => "",
    "type" => "image");
$NIMBUS_OPTIONS_ARR["nimbus_partner_3_link"] = array("name" => __('Client 3 URL', 'nimbus'),
    "desc" => __('URL to link client logo to. Leave blank if you do not wish to link to any URL.', 'nimbus'),
    "id" => "nimbus_partner_3_link",
    "default" => "#",
    "type" => "text",
    "tab" => "frontpage_partners_logos");

$NIMBUS_OPTIONS_ARR["nimbus_partner_4_logo"] = array("name" => __('Client 4 Logo', 'nimbus'),
    "desc" => __('Upload a logo. Please note that the logo will appear at the upload size. ', 'nimbus'),
    "id" => "nimbus_partner_4_logo",
    "default" => get_sample_image('partners'),
    "tab" => "frontpage_partners_logos",
    "classes" => "",
    "type" => "image");
$NIMBUS_OPTIONS_ARR["nimbus_partner_4_link"] = array("name" => __('Client 4 URL', 'nimbus'),
    "desc" => __('URL to link client logo to. Leave blank if you do not wish to link to any URL.', 'nimbus'),
    "id" => "nimbus_partner_4_link",
    "default" => "#",
    "type" => "text",
    "tab" => "frontpage_partners_logos");

$NIMBUS_OPTIONS_ARR["nimbus_partner_5_logo"] = array("name" => __('Client 5 Logo', 'nimbus'),
    "desc" => __('Upload a logo. Please note that the logo will appear at the upload size. ', 'nimbus'),
    "id" => "nimbus_partner_5_logo",
    "default" => get_sample_image('partners'),
    "tab" => "frontpage_partners_logos",
    "classes" => "",
    "type" => "image");
$NIMBUS_OPTIONS_ARR["nimbus_partner_5_link"] = array("name" => __('Client 5 URL', 'nimbus'),
    "desc" => __('URL to link client logo to. Leave blank if you do not wish to link to any URL.', 'nimbus'),
    "id" => "nimbus_partner_5_link",
    "default" => "#",
    "type" => "text",
    "tab" => "frontpage_partners_logos");

$NIMBUS_OPTIONS_ARR["nimbus_partner_6_logo"] = array("name" => __('Client 6 Logo', 'nimbus'),
    "desc" => __('Upload a logo. Please note that the logo will appear at the upload size. ', 'nimbus'),
    "id" => "nimbus_partner_6_logo",
    "default" => get_sample_image('partners'),
    "tab" => "frontpage_partners_logos",
    "classes" => "",
    "type" => "image");
$NIMBUS_OPTIONS_ARR["nimbus_partner_6_link"] = array("name" => __('Client 6 URL', 'nimbus'),
    "desc" => __('URL to link client logo to. Leave blank if you do not wish to link to any URL.', 'nimbus'),
    "id" => "nimbus_partner_6_link",
    "default" => "#",
    "type" => "text",
    "tab" => "frontpage_partners_logos");

$NIMBUS_OPTIONS_ARR["nimbus_partner_7_logo"] = array("name" => __('Client 7 Logo', 'nimbus'),
    "desc" => __('Upload a logo. Please note that the logo will appear at the upload size. ', 'nimbus'),
    "id" => "nimbus_partner_7_logo",
    "default" => get_sample_image('partners'),
    "tab" => "frontpage_partners_logos",
    "classes" => "",
    "type" => "image");
$NIMBUS_OPTIONS_ARR["nimbus_partner_7_link"] = array("name" => __('Client 7 URL', 'nimbus'),
    "desc" => __('URL to link client logo to. Leave blank if you do not wish to link to any URL.', 'nimbus'),
    "id" => "nimbus_partner_7_link",
    "default" => "#",
    "type" => "text",
    "tab" => "frontpage_partners_logos");

$NIMBUS_OPTIONS_ARR["nimbus_partner_8_logo"] = array("name" => __('Client 8 Logo', 'nimbus'),
    "desc" => __('Upload a logo. Please note that the logo will appear at the upload size. ', 'nimbus'),
    "id" => "nimbus_partner_8_logo",
    "default" => get_sample_image('partners'),
    "tab" => "frontpage_partners_logos",
    "classes" => "",
    "type" => "image");
$NIMBUS_OPTIONS_ARR["nimbus_partner_8_link"] = array("name" => __('Client 8 URL', 'nimbus'),
    "desc" => __('URL to link client logo to. Leave blank if you do not wish to link to any URL.', 'nimbus'),
    "id" => "nimbus_partner_8_link",
    "default" => "#",
    "type" => "text",
    "tab" => "frontpage_partners_logos");

$NIMBUS_OPTIONS_ARR["nimbus_partner_9_logo"] = array("name" => __('Client 9 Logo', 'nimbus'),
    "desc" => __('Upload a logo. Please note that the logo will appear at the upload size. ', 'nimbus'),
    "id" => "nimbus_partner_9_logo",
    "default" => get_sample_image('partners'),
    "tab" => "frontpage_partners_logos",
    "classes" => "",
    "type" => "image");
$NIMBUS_OPTIONS_ARR["nimbus_partner_9_link"] = array("name" => __('Client 9 URL', 'nimbus'),
    "desc" => __('URL to link client logo to. Leave blank if you do not wish to link to any URL.', 'nimbus'),
    "id" => "nimbus_partner_9_link",
    "default" => "#",
    "type" => "text",
    "tab" => "frontpage_partners_logos");

$NIMBUS_OPTIONS_ARR["nimbus_partner_10_logo"] = array("name" => __('Client 10 Logo', 'nimbus'),
    "desc" => __('Upload a logo. Please note that the logo will appear at the upload size. ', 'nimbus'),
    "id" => "nimbus_partner_10_logo",
    "default" => get_sample_image('partners'),
    "tab" => "frontpage_partners_logos",
    "classes" => "",
    "type" => "image");
$NIMBUS_OPTIONS_ARR["nimbus_partner_10_link"] = array("name" => __('Client 10 URL', 'nimbus'),
    "desc" => __('URL to link client logo to. Leave blank if you do not wish to link to any URL.', 'nimbus'),
    "id" => "nimbus_partner_10_link",
    "default" => "#",
    "type" => "text",
    "tab" => "frontpage_partners_logos");

$NIMBUS_OPTIONS_ARR[] = array(
    "type" => "close_tab"
);


/* * *************************************************************************************************** */
// Front Page: Team
/* * *************************************************************************************************** */

$NIMBUS_OPTIONS_ARR["frontpage_team_tab"] = array("name" => __('Team', 'nimbus'),
    "id" => "frontpage_team_tab",
    "tab" => "tab",
    "classes" => "",
    "url" => "frontpage_team",
    "icon" => "fa-users",
    "type" => "tab");
    
$NIMBUS_OPTIONS_ARR[] = array(
    "tab" => "typography",
    "html" => "<h1>" . __('Frontpage Team Row Options', 'nimbus') . "</h1>",
    "type" => "html"
    );
    
$NIMBUS_OPTIONS_ARR["toggle_team"] = array(
    "name" => __('Show/Hide Row', 'nimbus'),
    "desc" => __('', 'nimbus'),
    "id" => "toggle_team",
    "default" => "show",
    "tab" => "frontpage_team",
    "type" => "radio",
    "options" => array( "show" => __('Show Row', 'nimbus'), "hide" => __('Hide Row', 'nimbus'))
    );    
        
 $NIMBUS_OPTIONS_ARR[] = array(
    "tab" => "frontpage_team",
    "html" => "<p>" . __('Create a category called "Team" in your post categories section. The four most recent posts assigned to the "Team" category will show up on the home page. You can exclude the "Team" category from the Blog if you like under the "Blog" tab in the Theme Options panel.', 'nimbus') . "</p><p style='padding-bottom:30px;'>" . __('To populate a team post item, enter the individual\'s name in the Title field, then enter their designation/position. Then, enter their bio/about content in the content editor. Upload a photo in the featured image spot on the bottom right of the page. Click Publish and you\'re good to go!', 'nimbus') . "</p>",
    "type" => "html"
    );     

$NIMBUS_OPTIONS_ARR["nimbus_team_heading"] = array("name" => __('Section Heading', 'nimbus'),
    "desc" => __('Heading/title for this area.', 'nimbus'),
    "id" => "nimbus_team_heading",
    "default" => "Our Team",
    "type" => "text",
    "tab" => "frontpage_team"
    );
$NIMBUS_OPTIONS_ARR[] = array(
    "type" => "close_tab"
);


/* * *************************************************************************************************** */
// Front Page: Page Content
/* * *************************************************************************************************** */

$NIMBUS_OPTIONS_ARR["frontpage_pagetext_tab"] = array("name" => __('Page Content', 'nimbus'),
    "id" => "frontpage_pagetext_tab",
    "tab" => "tab",
    "classes" => "",
    "url" => "frontpage_pagetext",
    "icon" => "fa-bars",
    "type" => "tab");
    
$NIMBUS_OPTIONS_ARR[] = array(
    "tab" => "frontpage_pagetext",
    "html" => "<h1>" . __('Frontpage Content or Blog', 'nimbus') . "</h1>",
    "type" => "html"
    );   

 $NIMBUS_OPTIONS_ARR[] = array(
    "tab" => "frontpage_pagetext",
    "html" => "<p style='padding-bottom:30px;'>" . __('This section is populated by either page content or a blog. It will show a blog by default. If you want to show page content, you\'ll want to create a "Home" page and populate the content area. Next, you\'ll need to navigate to Settings >> Reading and set the new "Home" page to show on the frontpage.', 'nimbus') . "</p>",
    "type" => "html"
    );      
    
$NIMBUS_OPTIONS_ARR["toggle_p_content"] = array(
    "name" => __('Show/Hide Row', 'nimbus'),
    "desc" => __('', 'nimbus'),
    "id" => "toggle_p_content",
    "default" => "show",
    "tab" => "frontpage_pagetext",
    "type" => "radio",
    "options" => array( "show" => __('Show Row', 'nimbus'), "hide" => __('Hide Row', 'nimbus'))
    );     
    


$NIMBUS_OPTIONS_ARR[] = array(
    "type" => "close_tab"
);


/* * *************************************************************************************************** */
// Contact
/* * *************************************************************************************************** */

$NIMBUS_OPTIONS_ARR["contact_tab"] = array(
    "name" => __('Contact Info', 'nimbus'),
    "id" => "contact_tab",
    "tab" => "tab",
    "classes" => "",
    "url" => "contact",
    "icon" => "fa-user",
    "type" => "tab"
    );
    
$NIMBUS_OPTIONS_ARR[] = array(
    "tab" => "typography",
    "html" => "<h1>" . __('Contact Info Options', 'nimbus') . "</h1>",
    "type" => "html"
    );
    
$NIMBUS_OPTIONS_ARR["public_phone"] = array(
    "name" => __('Public Phone Number', 'nimbus'),
    "desc" => __('Enter the phone number that will be displayed in the header of the website. Leave blank to dispay none.', 'nimbus'),
    "id" => "public_phone",
    "default" => "",
    "type" => "text",
    "tab" => "contact",
    "classes" => ""
    );

$NIMBUS_OPTIONS_ARR["public_email"] = array(
    "name" => __('Public Email', 'nimbus'),
    "desc" => __('Enter the email address that will be displayed in the header of the website. Leave blank to dispay none.', 'nimbus'),
    "id" => "public_email",
    "default" => "",
    "type" => "text",
    "tab" => "contact"
    );

$NIMBUS_OPTIONS_ARR[] = array(
    "type" => "close_tab"
);



/* * *************************************************************************************************** */
// Special Announcements
/* * *************************************************************************************************** */

$NIMBUS_OPTIONS_ARR["announcements_tab"] = array("name" => __('Announcement Bar', 'nimbus'),
    "id" => "announcements_tab",
    "tab" => "tab",
    "classes" => "",
    "url" => "announcements",
    "icon" => "fa-asterisk",
    "type" => "tab");
    
$NIMBUS_OPTIONS_ARR[] = array(
    "tab" => "typography",
    "html" => "<h1>" . __('Special Announcement Bar Options', 'nimbus') . "</h1>",
    "type" => "html"
    );
    
$NIMBUS_OPTIONS_ARR["nimbus_announcement_1"] = array("name" => __('Special Announcement', 'nimbus'),
    "desc" => __('Use basic HTML and shortcodes to style your content. This will appear at the top of the page. Leaving it blank will not show the announcement area.', 'nimbus'),
    "id" => "nimbus_announcement_1",
    "default" => __('<p class="text-center">This is an announcement line where you can draw attention to specials!!</p>', 'nimbus'),
    "type" => "textarea",
    "tab" => "announcements"
    );

$NIMBUS_OPTIONS_ARR[] = array(
    "type" => "close_tab"
);



/* * *************************************************************************************************** */
// Social Media
/* * *************************************************************************************************** */


$NIMBUS_OPTIONS_ARR["social_tab"] = array("name" => __('Social Media', 'nimbus'),
    "id" => "social_tab",
    "tab" => "tab",
    "classes" => "",
    "url" => "social",
    "icon" => "fa-thumbs-up",
    "type" => "tab");
    
$NIMBUS_OPTIONS_ARR[] = array(
    "tab" => "typography",
    "html" => "<h1>" . __('Social Media Options', 'nimbus') . "</h1>",
    "type" => "html"
    );
    
$NIMBUS_OPTIONS_ARR["nimbus_facebook_url"] = array("name" => __('Facebook Page URL', 'nimbus'),
    "desc" => __('Full URL for your Facebook page. Like: https://www.facebook.com/profile.php?id=1138181505 ', 'nimbus'),
    "id" => "nimbus_facebook_url",
    "default" => "",
    "type" => "pro",
    "tab" => "social");

$NIMBUS_OPTIONS_ARR["nimbus_twitter_url"] = array("name" => __('Twitter Page URL', 'nimbus'),
    "desc" => __('Full URL for your Twitter page. Like: http://twitter.com/#!/nimbusthemes ', 'nimbus'),
    "id" => "nimbus_twitter_url",
    "default" => "",
    "type" => "pro",
    "tab" => "social");

$NIMBUS_OPTIONS_ARR["nimbus_linkedin_url"] = array("name" => __('LinkedIn Page URL', 'nimbus'),
    "desc" => __('Full URL to your LinkedIn page. Like: http://www.linkedin.com/profile/view?id=41331545', 'nimbus'),
    "id" => "nimbus_linkedin_url",
    "default" => "",
    "type" => "text",
    "tab" => "social");

$NIMBUS_OPTIONS_ARR["nimbus_youtube_url"] = array("name" => __('YouTube Page URL', 'nimbus'),
    "desc" => __('Enter the URL for your YouTube page. Leave blank to dispay none.', 'nimbus'),
    "id" => "nimbus_youtube_url",
    "default" => "",
    "type" => "text",
    "tab" => "social",
    "classes" => "");

$NIMBUS_OPTIONS_ARR["nimbus_google_plus_url"] = array("name" => __('Google+ Page URL', 'nimbus'),
    "desc" => __('Full URL to your Google+ page. Like: https://plus.google.com/113799555397172215948#113799555397172215948/posts', 'nimbus'),
    "id" => "nimbus_google_plus_url",
    "default" => "",
    "type" => "pro",
    "tab" => "social");

$NIMBUS_OPTIONS_ARR["nimbus_vimeo_url"] = array("name" => __('Vimeo Channel URL', 'nimbus'),
    "desc" => __('Full URL to your Vimeo Channel', 'nimbus'),
    "id" => "nimbus_vimeo_url",
    "default" => "",
    "type" => "text",
    "tab" => "social");

$NIMBUS_OPTIONS_ARR["nimbus_flickr_url"] = array("name" => __('Flickr Web Address URL', 'nimbus'),
    "desc" => __('Full URL to your Flickr Page', 'nimbus'),
    "id" => "nimbus_flickr_url",
    "default" => "",
    "type" => "text",
    "tab" => "social");

$NIMBUS_OPTIONS_ARR["nimbus_wpcom_url"] = array("name" => __('WordPress.com Blog URL', 'nimbus'),
    "desc" => __('Full URL to your WordPress.com blog', 'nimbus'),
    "id" => "nimbus_wpcom_url",
    "default" => "",
    "type" => "text",
    "tab" => "social");

$NIMBUS_OPTIONS_ARR["nimbus_pinterest_url"] = array("name" => __('Pinterest Board URL', 'nimbus'),
    "desc" => __('Full URL to your Pinterest Board', 'nimbus'),
    "id" => "nimbus_pinterest_url",
    "default" => "",
    "type" => "text",
    "tab" => "social");

$NIMBUS_OPTIONS_ARR["nimbus_instagram_url"] = array("name" => __('Instagram URL', 'nimbus'),
    "desc" => __('Full URL to your Instagram public profile', 'nimbus'),
    "id" => "nimbus_instagram_url",
    "default" => "",
    "type" => "text",
    "tab" => "social");

$NIMBUS_OPTIONS_ARR["nimbus_tumblr_url"] = array("name" => __('Tumblr URL', 'nimbus'),
    "desc" => __('Full URL to your Tumblr public profile', 'nimbus'),
    "id" => "nimbus_tumblr_url",
    "default" => "",
    "type" => "text",
    "tab" => "social");

$NIMBUS_OPTIONS_ARR["nimbus_mail_url"] = array("name" => __('Email Contact', 'nimbus'),
    "desc" => __('Email address you would like to have visitors contact you through', 'nimbus'),
    "id" => "nimbus_mail_url",
    "default" => "",
    "type" => "pro",
    "tab" => "social");

$NIMBUS_OPTIONS_ARR["nimbus_hide_rss_icon"] = array("name" => __('Hide RSS Feed Button', 'nimbus'),
    "desc" => __('Check here to hide the RSS Feed icon in the social media icon section', 'nimbus'),
    "id" => "nimbus_hide_rss_icon",
    "tab" => "social",
    "default" => "0",
    "label" => "Hide RSS Icon",
    "type" => "checkbox");

$NIMBUS_OPTIONS_ARR["nimbus_display_social_buttons"] = array("name" => __('Display Social Media Buttons', 'nimbus'),
    "desc" => __('Check here to display social media buttons', 'nimbus'),
    "id" => "nimbus_display_social_buttons",
    "tab" => "social",
    "default" => "1",
    "label" => "Display Buttons",
    "type" => "checkbox");

$NIMBUS_OPTIONS_ARR[] = array(
    "type" => "close_tab"
);



/* * *************************************************************************************************** */
// Blog
/* * *************************************************************************************************** */

$NIMBUS_OPTIONS_ARR["blog_tab"] = array("name" => __('Blog', 'nimbus'),
    "id" => "blog_tab",
    "tab" => "tab",
    "classes" => "",
    "url" => "blog",
    "icon" => "fa-quote-left",
    "type" => "tab");
    
$NIMBUS_OPTIONS_ARR[] = array(
    "tab" => "typography",
    "html" => "<h1>" . __('Blog Options', 'nimbus') . "</h1>",
    "type" => "html"
    );
    
$NIMBUS_OPTIONS_ARR["nimbus_post_meta_blog"] = array("name" => __('Display Meta Information on Posts', 'nimbus'),
    "desc" => __('Select the folllowing information you would like to have displayed on post pages.', 'nimbus'),
    "id" => "nimbus_post_meta_blog",
    "tab" => "blog",
    "default" => array("categories" => "1", "tags" => "1"),
    "type" => "multicheck",
    "options" => nimbus_include_blog_meta());

$NIMBUS_OPTIONS_ARR["nimbus_blog_title"] = array("name" => __('Blog Title', 'nimbus'),
    "desc" => __('Set a title to diplay on the main blog page.', 'nimbus'),
    "id" => "nimbus_blog_title",
    "default" => "Blog",
    "tab" => "blog",
    "type" => "text",
    "classes" => "");

$NIMBUS_OPTIONS_ARR["nimbus_exclude_categories_blog"] = array("name" => __('Exclude Categories from Blog', 'nimbus'),
    "desc" => __('Select the categories that you want to exclude from your blog.', 'nimbus'),
    "id" => "nimbus_exclude_categories_blog",
    "tab" => "blog",
    "default" => array(),
    "type" => "multicheck",
    "options" => nimbus_categories_arr());

$NIMBUS_OPTIONS_ARR[] = array(
    "type" => "close_tab"
);


/* * *************************************************************************************************** */
// Design
/* * *************************************************************************************************** */

$NIMBUS_OPTIONS_ARR["design_tab"] = array("name" => __('Design', 'nimbus'),
    "id" => "design_tab",
    "tab" => "tab",
    "classes" => "",
    "url" => "design",
    "icon" => "fa-pencil-square-o",
    "type" => "tab");

$NIMBUS_OPTIONS_ARR[] = array(
    "tab" => "design",
    "html" => "<h1>" . __('Body Appearance Options', 'nimbus') . "</h1>",
    "type" => "html"
    );

$NIMBUS_OPTIONS_ARR["body_bg_color"] = array("name" => __('Body Background Color', 'nimbus'),
    "desc" => __('Set the background color for your website.', 'nimbus'),
    "id" => "body_bg_color",
    "html" => "<p>Please use the WordPress core <a href='" . admin_url() . "themes.php?page=custom-background'>Background</a> setting under Appearance >> Background.</p>",
    "tab" => "design",
    "type" => "item_html");

$NIMBUS_OPTIONS_ARR[] = array(
    "tab" => "design",
    "html" => "<h1>" . __('Menu Appearance Options', 'nimbus') . "</h1>",
    "type" => "html"
    );

$NIMBUS_OPTIONS_ARR["nimbus_menu_hover_color"] = array("name" => __('Menu Hover Color', 'nimbus'),
    "desc" => __('Set the hover color for the menu options. Default: #28b6c3', 'nimbus'),
    "id" => "nimbus_menu_hover_color",
    "tab" => "design",
    "default" => '#28b6c3',
    "type" => "color");

$NIMBUS_OPTIONS_ARR["nimbus_menu_text_color"] = array("name" => __('Menu Text/Links Color', 'nimbus'),
    "desc" => __('Set the links color for the menu options. Default: #444444', 'nimbus'),
    "id" => "nimbus_menu_text_color",
    "tab" => "design",
    "default" => '#444444',
    "type" => "color");

$NIMBUS_OPTIONS_ARR[] = array(
    "type" => "close_tab"
);


/* * *************************************************************************************************** */
// Typography
/* * *************************************************************************************************** */

$NIMBUS_OPTIONS_ARR["typography_tab"] = array("name" => __('Typography', 'nimbus'),
    "id" => "typography_tab",
    "tab" => "tab",
    "classes" => "",
    "url" => "typography",
    "icon" => "fa-font",
    "type" => "tab");

$NIMBUS_OPTIONS_ARR[] = array(
    "tab" => "typography",
    "html" => "<h1>" . __('Body Typography Options', 'nimbus') . "</h1>",
    "type" => "html"
    );

$NIMBUS_OPTIONS_ARR["body_style"] = array("name" => __('Body Settings', 'nimbus'),
    "desc" => __('Set <strong>Body</strong> font style. This is the default font that will be used in most instances on your website. <span style="color:#ca0088;"><a style="color:#ca0088;" href="' . SALESPAGEURL . '?utm_source=' . THEME_NAME_CLEAN . '&utm_medium=theme&utm_content=panel_link&utm_campaign=' . THEME_NAME_CLEAN . '">Upgrade Now</a> to choose from <strong>Hundreds of Fonts</strong></span>.', 'nimbus'),
    "id" => "body_style",
    "tab" => "typography",
    "default" => array("size" => "15px", "line" => "1.5em", "face" => "Droid Sans", "style" => "400", "color" => "#444444", "fonttrans" => "none"),
    "type" => "typography");

$NIMBUS_OPTIONS_ARR[] = array(
    "tab" => "typography",
    "html" => "<h1>" . __('Link Typography Options', 'nimbus') . "</h1>",
    "type" => "html"
    );

$NIMBUS_OPTIONS_ARR["link_color"] = array("name" => __('Link Color', 'nimbus'),
    "desc" => __('Set the default link color.', 'nimbus'),
    "id" => "link_color",
    "tab" => "typography",
    "default" => '#46c0cb',
    "type" => "color");

$NIMBUS_OPTIONS_ARR["link_hover_color"] = array("name" => __('Link Hover Color', 'nimbus'),
    "desc" => __('Set link hover color.', 'nimbus'),
    "id" => "link_hover_color",
    "tab" => "typography",
    "default" => '#40acb6',
    "type" => "color");

$NIMBUS_OPTIONS_ARR[] = array(
    "tab" => "typography",
    "html" => "<h1>" . __('Logo Typography Options', 'nimbus') . "</h1>",
    "type" => "html"
    );

$NIMBUS_OPTIONS_ARR["nimbus_logo_style"] = array("name" => __('Default Logo Typography', 'nimbus'),
    "desc" => __('Set typography preferences for the text logo that is displayed when no image logo exists. <span style="color:#ca0088;"><a style="color:#ca0088;" href="' . SALESPAGEURL . '?utm_source=' . THEME_NAME_CLEAN . '&utm_medium=theme&utm_content=panel_link&utm_campaign=' . THEME_NAME_CLEAN . '">Upgrade Now</a> to choose from <strong>Hundreds of Fonts</strong></span>.', 'nimbus'),
    "id" => "nimbus_logo_style",
    "tab" => "typography",
    "info" => "<p>Allows you to change the typeface of your logo if you are using text instead of an image. Also allows you to change all other attributes we described in the <strong>Body Settings</strong> section above.</p>",
    "default" => array("size" => "32px", "line" => "1em", "face" => "Volkorn", "style" => "400", "color" => "#444444", "fonttrans" => "uppercase"),
    "type" => "typography");


$NIMBUS_OPTIONS_ARR[] = array(
    "tab" => "typography",
    "html" => "<h1>" . __('Banner Slideshow Text', 'nimbus') . "</h1>",
    "type" => "html"
    );

$NIMBUS_OPTIONS_ARR["nimbus_slideshow_heading_style"] = array("name" => __('Slideshow Heading', 'nimbus'),
    "desc" => __('Set the font style for the slideshow heading. <span style="color:#ca0088;"><a style="color:#ca0088;" href="' . SALESPAGEURL . '?utm_source=' . THEME_NAME_CLEAN . '&utm_medium=theme&utm_content=panel_link&utm_campaign=' . THEME_NAME_CLEAN . '">Upgrade Now</a> to choose from <strong>Hundreds of Fonts</strong></span>.', 'nimbus'),
    "id" => "nimbus_slideshow_heading_style",
    "tab" => "typography",
    "default" => array("size" => "50px", "line" => "1.3em", "face" => "Volkorn", "style" => "400", "color" => "#424242", "fonttrans" => "none"),
    "type" => "typography");
$NIMBUS_OPTIONS_ARR["nimbus_slideshow_subheading_style"] = array("name" => __('Slideshow Sub Heading', 'nimbus'),
    "desc" => __('Set the font style for the slideshow sub heading. <span style="color:#ca0088;"><a style="color:#ca0088;" href="' . SALESPAGEURL . '?utm_source=' . THEME_NAME_CLEAN . '&utm_medium=theme&utm_content=panel_link&utm_campaign=' . THEME_NAME_CLEAN . '">Upgrade Now</a> to choose from <strong>Hundreds of Fonts</strong></span>.', 'nimbus'),
    "id" => "nimbus_slideshow_subheading_style",
    "tab" => "typography",
    "default" => array("size" => "20px", "line" => "1.3em", "face" => "Volkorn", "style" => "400", "color" => "#424242", "fonttrans" => "none"),
    "type" => "typography");
$NIMBUS_OPTIONS_ARR["nimbus_slideshow_text_style"] = array("name" => __('Slideshow Text', 'nimbus'),
    "desc" => __('Set the font style for the slideshow text. <span style="color:#ca0088;"><a style="color:#ca0088;" href="' . SALESPAGEURL . '?utm_source=' . THEME_NAME_CLEAN . '&utm_medium=theme&utm_content=panel_link&utm_campaign=' . THEME_NAME_CLEAN . '">Upgrade Now</a> to choose from <strong>Hundreds of Fonts</strong></span>.', 'nimbus'),
    "id" => "nimbus_slideshow_text_style",
    "tab" => "typography",
    "default" => array("size" => "16px", "line" => "1.3em", "face" => "Volkorn", "style" => "400", "color" => "#424242", "fonttrans" => "none"),
    "type" => "typography");

$NIMBUS_OPTIONS_ARR["slide_title_tab"] = array("name" => __('Banner Titles at Tablet Sizes', 'nimbus'),
    "desc" => __('Set the size of the banner titles at a percentage of the original size.', 'nimbus'),
    "id" => "slide_title_tab",
    "default" => '80',
    "tab" => "typography",
    "type" => "select",
    "options" => nimbus_percent_of_parent());
$NIMBUS_OPTIONS_ARR["slide_title_mobile"] = array("name" => __('Banner Titles at Mobile Sizes', 'nimbus'),
    "desc" => __('Set the size of the banner titles at a percentage of the original size.', 'nimbus'),
    "id" => "slide_title_mobile",
    "default" => '60',
    "tab" => "typography",
    "type" => "select",
    "options" => nimbus_percent_of_parent());
    
$NIMBUS_OPTIONS_ARR["slide_text_tab"] = array("name" => __('Banner Text at Tablet Sizes', 'nimbus'),
    "desc" => __('Set the size of the banner text at a percentage of the original size.', 'nimbus'),
    "id" => "slide_text_tab",
    "default" => '90',
    "tab" => "typography",
    "type" => "select",
    "options" => nimbus_percent_of_parent());
$NIMBUS_OPTIONS_ARR["slide_text_mobile"] = array("name" => __('Banner Text at Mobile Sizes', 'nimbus'),
    "desc" => __('Set the size of the banner text at a percentage of the original size.', 'nimbus'),
    "id" => "slide_title_mobile",
    "default" => '80',
    "tab" => "typography",
    "type" => "select",
    "options" => nimbus_percent_of_parent());
    

$NIMBUS_OPTIONS_ARR[] = array(
    "tab" => "typography",
    "html" => "<h1>" . __('Title Typography Options', 'nimbus') . "</h1>",
    "type" => "html"
    );

$NIMBUS_OPTIONS_ARR["h1_style"] = array("name" => __('H1 Settings', 'nimbus'),
    "desc" => __('Set H1 style. <span style="color:#ca0088;"><a style="color:#ca0088;" href="' . SALESPAGEURL . '?utm_source=' . THEME_NAME_CLEAN . '&utm_medium=theme&utm_content=panel_link&utm_campaign=' . THEME_NAME_CLEAN . '">Upgrade Now</a> to choose from <strong>Hundreds of Fonts</strong></span>.', 'nimbus'),
    "id" => "h1_style",
    "tab" => "typography",
    "default" => array("size" => "28px", "line" => "1.3em", "face" => "Volkorn", "style" => "400", "color" => "#115668", "fonttrans" => "none"),
    "type" => "typography");

$NIMBUS_OPTIONS_ARR["h1_hover_color"] = array("name" => __('H1 Hover Color', 'nimbus'),
    "desc" => __('Set H1 hover color.', 'nimbus'),
    "id" => "h1_hover_color",
    "tab" => "typography",
    "default" => '#535353',
    "type" => "color");

$NIMBUS_OPTIONS_ARR["h2_style"] = array("name" => __('H2 Settings', 'nimbus'),
    "desc" => __('Set H2 style. <span style="color:#ca0088;"><a style="color:#ca0088;" href="' . SALESPAGEURL . '?utm_source=' . THEME_NAME_CLEAN . '&utm_medium=theme&utm_content=panel_link&utm_campaign=' . THEME_NAME_CLEAN . '">Upgrade Now</a> to choose from <strong>Hundreds of Fonts</strong></span>.', 'nimbus'),
    "id" => "h2_style",
    "tab" => "typography",
    "default" => array("size" => "22px", "line" => "1.3em", "face" => "Droid Sans", "style" => "400", "color" => "#777777", "fonttrans" => "none"),
    "type" => "typography");

$NIMBUS_OPTIONS_ARR["h2_hover_color"] = array("name" => __('H2 Hover Color', 'nimbus'),
    "desc" => __('Set H2 hover color.', 'nimbus'),
    "id" => "h2_hover_color",
    "tab" => "typography",
    "default" => '#535353',
    "type" => "color");

$NIMBUS_OPTIONS_ARR["h3_style"] = array("name" => __('H3 Settings', 'nimbus'),
    "desc" => __('Set H3 style. <span style="color:#ca0088;"><a style="color:#ca0088;" href="' . SALESPAGEURL . '?utm_source=' . THEME_NAME_CLEAN . '&utm_medium=theme&utm_content=panel_link&utm_campaign=' . THEME_NAME_CLEAN . '">Upgrade Now</a> to choose from <strong>Hundreds of Fonts</strong></span>.', 'nimbus'),
    "id" => "h3_style",
    "tab" => "typography",
    "default" => array("size" => "15px", "line" => "1.3em", "face" => "Droid Sans", "style" => "700", "color" => "#444444", "fonttrans" => "uppercase"),
    "type" => "typography");

$NIMBUS_OPTIONS_ARR["h3_hover_color"] = array("name" => __('H3 Hover Color', 'nimbus'),
    "desc" => __('Set H3 hover color.', 'nimbus'),
    "id" => "h3_hover_color",
    "tab" => "typography",
    "default" => '#535353',
    "type" => "color");

$NIMBUS_OPTIONS_ARR["h4_style"] = array("name" => __('H4 Settings', 'nimbus'),
    "desc" => __('Set H4 style. <span style="color:#ca0088;"><a style="color:#ca0088;" href="' . SALESPAGEURL . '?utm_source=' . THEME_NAME_CLEAN . '&utm_medium=theme&utm_content=panel_link&utm_campaign=' . THEME_NAME_CLEAN . '">Upgrade Now</a> to choose from <strong>Hundreds of Fonts</strong></span>.', 'nimbus'),
    "id" => "h4_style",
    "tab" => "typography",
    "default" => array("size" => "15px", "line" => "1.3em", "face" => "Droid Sans", "style" => "700", "color" => "#999999", "fonttrans" => "uppercase"),
    "type" => "typography");

$NIMBUS_OPTIONS_ARR["h4_hover_color"] = array("name" => __('H4 Hover Color', 'nimbus'),
    "desc" => __('Set H4 hover color.', 'nimbus'),
    "id" => "h4_hover_color",
    "tab" => "typography",
    "default" => '#535353',
    "type" => "color");

$NIMBUS_OPTIONS_ARR["h5_style"] = array("name" => __('H5 Settings', 'nimbus'),
    "desc" => __('Set H5 style. <span style="color:#ca0088;"><a style="color:#ca0088;" href="' . SALESPAGEURL . '?utm_source=' . THEME_NAME_CLEAN . '&utm_medium=theme&utm_content=panel_link&utm_campaign=' . THEME_NAME_CLEAN . '">Upgrade Now</a> to choose from <strong>Hundreds of Fonts</strong></span>.', 'nimbus'),
    "id" => "h5_style",
    "tab" => "typography",
    "default" => array("size" => "15px", "line" => "1.3em", "face" => "Droid Sans", "style" => "700", "color" => "#444444", "fonttrans" => "none"),
    "type" => "typography");

$NIMBUS_OPTIONS_ARR["h5_hover_color"] = array("name" => __('H5 Hover Color', 'nimbus'),
    "desc" => __('Set H5 hover color.', 'nimbus'),
    "id" => "h5_hover_color",
    "tab" => "typography",
    "default" => '#535353',
    "type" => "color");

$NIMBUS_OPTIONS_ARR["h6_style"] = array("name" => __('H6 Settings', 'nimbus'),
    "desc" => __('Set H6 style. <span style="color:#ca0088;"><a style="color:#ca0088;" href="' . SALESPAGEURL . '?utm_source=' . THEME_NAME_CLEAN . '&utm_medium=theme&utm_content=panel_link&utm_campaign=' . THEME_NAME_CLEAN . '">Upgrade Now</a> to choose from <strong>Hundreds of Fonts</strong></span>.', 'nimbus'),
    "id" => "h6_style",
    "tab" => "typography",
    "default" => array("size" => "15px", "line" => "1.3em", "face" => "Droid Sans", "style" => "700", "color" => "#999999", "fonttrans" => "none"),
    "type" => "typography");

$NIMBUS_OPTIONS_ARR["h6_hover_color"] = array("name" => __('H6 Hover Color', 'nimbus'),
    "desc" => __('Set H6 hover color.', 'nimbus'),
    "id" => "h6_hover_color",
    "tab" => "typography",
    "default" => '#535353',
    "type" => "color");

$NIMBUS_OPTIONS_ARR[] = array(
    "tab" => "typography",
    "html" => "<h1>" . __('Blog Element Typography Options', 'nimbus') . "</h1>",
    "type" => "html"
    );

$NIMBUS_OPTIONS_ARR["nimbus_post_meta_style"] = array("name" => __('Post Meta Style', 'nimbus'),
    "desc" => __('Set the font style for the post date, category, and tags. <span style="color:#ca0088;"><a style="color:#ca0088;" href="' . SALESPAGEURL . '?utm_source=' . THEME_NAME_CLEAN . '&utm_medium=theme&utm_content=panel_link&utm_campaign=' . THEME_NAME_CLEAN . '">Upgrade Now</a> to choose from <strong>Hundreds of Fonts</strong></span>.', 'nimbus'),
    "id" => "nimbus_post_meta_style",
    "tab" => "typography",
    "default" => array("size" => "13px", "line" => "1.3em", "face" => "Droid Sans", "style" => "400", "color" => "#444444", "fonttrans" => "none"),
    "type" => "typography");

$NIMBUS_OPTIONS_ARR[] = array(
    "tab" => "typography",
    "html" => "<h1>" . __('Blockquote and Pullquote Typography Options', 'nimbus') . "</h1>",
    "type" => "html"
    );

$NIMBUS_OPTIONS_ARR["blockquote_style"] = array("name" => __('Blockquote Settings', 'nimbus'),
    "desc" => __('Set blockquote tag style and the typographic style for the [nimbus_quote] shortcode. <span style="color:#ca0088;"><a style="color:#ca0088;" href="' . SALESPAGEURL . '?utm_source=' . THEME_NAME_CLEAN . '&utm_medium=theme&utm_content=panel_link&utm_campaign=' . THEME_NAME_CLEAN . '">Upgrade Now</a> to choose from <strong>Hundreds of Fonts</strong></span>.', 'nimbus'),
    "id" => "blockquote_style",
    "tab" => "typography",
    "default" => array("size" => "22px", "line" => "1.3em", "face" => "Volkorn", "style" => "400", "color" => "#777777", "fonttrans" => "none"),
    "type" => "typography");

$NIMBUS_OPTIONS_ARR["pullquote_style"] = array("name" => __('Pullquote Settings', 'nimbus'),
    "desc" => __('Set typographic style for the [nimbus_pullquote_left] and [nimbus_pullquote_right] shortcodes. ', 'nimbus'),
    "id" => "pullquote_style",
    "tab" => "typography",
    "default" => array("size" => "22px", "line" => "1.3em", "face" => "Volkorn", "style" => "400", "color" => "#777777", "fonttrans" => "none"),
    "type" => "pro");

$NIMBUS_OPTIONS_ARR[] = array(
    "tab" => "typography",
    "html" => "<h1>" . __('Code Typography Options', 'nimbus') . "</h1>",
    "type" => "html"
    );

$NIMBUS_OPTIONS_ARR["code_style"] = array("name" => __('Code/Pre Settings', 'nimbus'),
    "desc" => __('Set Code/Pre style.', 'nimbus'),
    "id" => "code_style",
    "tab" => "typography",
    "default" => array('face' => 'Courier New', 'color' => '#121212'),
    "type" => "font");

$NIMBUS_OPTIONS_ARR[] = array(
    "tab" => "typography",
    "html" => "<h1>" . __('Table Typography Options', 'nimbus') . "</h1>",
    "type" => "html"
    );

$NIMBUS_OPTIONS_ARR["th_style"] = array("name" => __('TH Settings', 'nimbus'),
    "desc" => __('Set TH (Table Heading) style. <span style="color:#ca0088;"><a style="color:#ca0088;" href="' . SALESPAGEURL . '?utm_source=' . THEME_NAME_CLEAN . '&utm_medium=theme&utm_content=panel_link&utm_campaign=' . THEME_NAME_CLEAN . '">Upgrade Now</a> to choose from <strong>Hundreds of Fonts</strong></span>.', 'nimbus'),
    "id" => "th_style",
    "tab" => "typography",
    "default" => array("size" => "13px", "line" => "1em", "face" => "Droid Sans", "style" => "400", "color" => "#444444", "fonttrans" => "none"),
    "type" => "typography");

$NIMBUS_OPTIONS_ARR["td_style"] = array("name" => __('TD Settings', 'nimbus'),
    "desc" => __('Set TD (Table Data) style. <span style="color:#ca0088;"><a style="color:#ca0088;" href="' . SALESPAGEURL . '?utm_source=' . THEME_NAME_CLEAN . '&utm_medium=theme&utm_content=panel_link&utm_campaign=' . THEME_NAME_CLEAN . '">Upgrade Now</a> to choose from <strong>Hundreds of Fonts</strong></span>.', 'nimbus'),
    "id" => "td_style",
    "tab" => "typography",
    "default" => array("size" => "13px", "line" => "1em", "face" => "Droid Sans", "style" => "400", "color" => "#444444", "fonttrans" => "none"),
    "type" => "typography");

$NIMBUS_OPTIONS_ARR["tc_style"] = array("name" => __('Table Caption Settings', 'nimbus'),
    "desc" => __('Set Table Caption style. <span style="color:#ca0088;"><a style="color:#ca0088;" href="' . SALESPAGEURL . '?utm_source=' . THEME_NAME_CLEAN . '&utm_medium=theme&utm_content=panel_link&utm_campaign=' . THEME_NAME_CLEAN . '">Upgrade Now</a> to choose from <strong>Hundreds of Fonts</strong></span>.', 'nimbus'),
    "id" => "tc_style",
    "tab" => "typography",
    "default" => array("size" => "13px", "line" => "1em", "face" => "Droid Sans", "style" => "400", "color" => "#444444", "fonttrans" => "none"),
    "type" => "typography");

$NIMBUS_OPTIONS_ARR[] = array(
    "tab" => "typography",
    "html" => "<h1>" . __('Sidebar Typography Options', 'nimbus') . "</h1>",
    "type" => "html"
    );

$NIMBUS_OPTIONS_ARR["nimbus_sidebar_heading_style"] = array("name" => __('Sidebar Heading', 'nimbus'),
    "desc" => __('Set the default font that will be used for sidebar headings. <span style="color:#ca0088;"><a style="color:#ca0088;" href="' . SALESPAGEURL . '?utm_source=' . THEME_NAME_CLEAN . '&utm_medium=theme&utm_content=panel_link&utm_campaign=' . THEME_NAME_CLEAN . '">Upgrade Now</a> to choose from <strong>Hundreds of Fonts</strong></span>.', 'nimbus'),
    "id" => "nimbus_sidebar_heading_style",
    "tab" => "typography",
    "default" => array("size" => "22px", "line" => "1.3em", "face" => "Volkorn", "style" => "400", "color" => "#777777", "fonttrans" => "none"),
    "type" => "typography");
$NIMBUS_OPTIONS_ARR["nimbus_sidebar_text_style"] = array("name" => __('Sidebar Text', 'nimbus'),
    "desc" => __('Set the default font that will be used for sidebar text. <span style="color:#ca0088;"><a style="color:#ca0088;" href="' . SALESPAGEURL . '?utm_source=' . THEME_NAME_CLEAN . '&utm_medium=theme&utm_content=panel_link&utm_campaign=' . THEME_NAME_CLEAN . '">Upgrade Now</a> to choose from <strong>Hundreds of Fonts</strong></span>.', 'nimbus'),
    "id" => "nimbus_sidebar_text_style",
    "tab" => "typography",
    "default" => array("size" => "13px", "line" => "1.3em", "face" => "Droid Sans", "style" => "400", "color" => "#444444", "fonttrans" => "none"),
    "type" => "typography");

$NIMBUS_OPTIONS_ARR[] = array(
    "tab" => "typography",
    "html" => "<h1>" . __('Footer Typography Options', 'nimbus') . "</h1>",
    "type" => "html"
    );

$NIMBUS_OPTIONS_ARR["nimbus_footer_text_style"] = array("name" => __('Copyright Text', 'nimbus'),
    "desc" => __('Set the default style for the footer text. <span style="color:#ca0088;"><a style="color:#ca0088;" href="' . SALESPAGEURL . '?utm_source=' . THEME_NAME_CLEAN . '&utm_medium=theme&utm_content=panel_link&utm_campaign=' . THEME_NAME_CLEAN . '">Upgrade Now</a> to choose from <strong>Hundreds of Fonts</strong></span>.', 'nimbus'),
    "id" => "nimbus_footer_text_style",
    "tab" => "typography",
    "default" => array("size" => "14px", "line" => "1.3em", "face" => "Droid Sans", "style" => "400", "color" => "#ffffff", "fonttrans" => "none"),
    "type" => "typography");

$NIMBUS_OPTIONS_ARR["nimbus_footer_heading_style"] = array("name" => __('Copyright Text', 'nimbus'),
    "desc" => __('Set the default style for the footer text. <span style="color:#ca0088;"><a style="color:#ca0088;" href="' . SALESPAGEURL . '?utm_source=' . THEME_NAME_CLEAN . '&utm_medium=theme&utm_content=panel_link&utm_campaign=' . THEME_NAME_CLEAN . '">Upgrade Now</a> to choose from <strong>Hundreds of Fonts</strong></span>.', 'nimbus'),
    "id" => "nimbus_footer_heading_style",
    "tab" => "typography",
    "default" => array("size" => "14px", "line" => "1.3em", "face" => "Droid Sans", "style" => "400", "color" => "#ffffff", "fonttrans" => "none"),
    "type" => "typography");

$NIMBUS_OPTIONS_ARR["nimbus_copyright_style"] = array("name" => __('Copyright Text', 'nimbus'),
    "desc" => __('Set the default text for the copyright. <span style="color:#ca0088;"><a style="color:#ca0088;" href="' . SALESPAGEURL . '?utm_source=' . THEME_NAME_CLEAN . '&utm_medium=theme&utm_content=panel_link&utm_campaign=' . THEME_NAME_CLEAN . '">Upgrade Now</a> to choose from <strong>Hundreds of Fonts</strong></span>.', 'nimbus'),
    "id" => "nimbus_copyright_style",
    "tab" => "typography",
    "default" => array("size" => "13px", "line" => "1.3em", "face" => "Droid Sans", "style" => "400", "color" => "#999999", "fonttrans" => "none"),
    "type" => "typography");

$NIMBUS_OPTIONS_ARR[] = array(
    "tab" => "typography",
    "html" => "<h1>" . __('Odds and Ends', 'nimbus') . "</h1>",
    "type" => "html"
    );

$NIMBUS_OPTIONS_ARR["default_button_style"] = array("name" => "Default Button Font",
    "desc" => "Set button style. ",
    "id" => "default_button_style",
    "tab" => "typography",
    "default" => array("size" => "18px", "line" => "1em", "face" => "Volkorn", "style" => "400", "color" => "#ffffff", "fonttrans" => "none"),
    "type" => "typography");
    
$NIMBUS_OPTIONS_ARR["nimbus_typography_one"] = array(
    "name" => __('Font for [nimbus_typography_one] Shortcode ', 'nimbus'),
    "desc" => __('Set the font that will be used for the [nimbus_typography_one] alternate typography shortcode.', 'nimbus'),
    "id" => "nimbus_typography_one",
    "tab" => "typography",
    "default" => array("face" => "PT Sans"),
    "type" => "pro"
    );

$NIMBUS_OPTIONS_ARR["nimbus_typography_two"] = array(
    "name" => __('Font for [nimbus_typography_two] Shortcode ', 'nimbus'),
    "desc" => __('Set the font that will be used for the [nimbus_typography_two] alternate typography shortcode.', 'nimbus'),
    "id" => "nimbus_typography_two",
    "tab" => "typography",
    "default" => array("face" => "PT Sans"),
    "type" => "pro"
    );

$NIMBUS_OPTIONS_ARR["nimbus_typography_three"] = array(
    "name" => __('Font for [nimbus_typography_three] Shortcode ', 'nimbus'),
    "desc" => __('Set the font that will be used for the [nimbus_typography_three] alternate typography shortcode.', 'nimbus'),
    "id" => "nimbus_typography_three",
    "tab" => "typography",
    "default" => array("face" => "PT Sans"),
    "type" => "pro"
    );
$NIMBUS_OPTIONS_ARR["button_style"] = array("name" => __('Button Shortcodes', 'nimbus'),
    "desc" => __('Set the font that will be used for all button shortcodes.', 'nimbus'),
    "id" => "button_style",
    "tab" => "typography",
    "default" => array("face" => "Volkorn"),
    "type" => "pro");

$NIMBUS_OPTIONS_ARR[] = array(
    "type" => "close_tab"
);


/* * *************************************************************************************************** */
// CSS
/* * *************************************************************************************************** */

$NIMBUS_OPTIONS_ARR["css_tab"] = array("name" => __('Custom CSS', 'nimbus'),
    "id" => "css_tab",
    "tab" => "tab",
    "classes" => "",
    "url" => "css",
    "icon" => "fa-code",
    "type" => "tab");
    
$NIMBUS_OPTIONS_ARR[] = array(
    "tab" => "typography",
    "html" => "<h1>" . __('Custom CSS Options', 'nimbus') . "</h1>",
    "type" => "html"
    );
    
$NIMBUS_OPTIONS_ARR["custom_css"] = array("name" => __('Custom CSS', 'nimbus'),
    "desc" => __('Add your custom CSS to the header.', 'nimbus'),
    "id" => "custom_css",
    "tab" => "css",
    "default" => "",
    "info" => "<p>The css in this field will be populated to the header.</p>",
    "type" => "pro");

$NIMBUS_OPTIONS_ARR["custom_css_less_767"] = array("name" => "Responsive CSS: Browsers Less Than 767px",
    "desc" => "Add your custom CSS to the header.",
    "id" => "custom_css_less_767",
    "tab" => "css",
    "default" => "",
    "info" => "<p>The css in this field will be populated to the header.</p>",
    "type" => "textarea");

$NIMBUS_OPTIONS_ARR["custom_css_768_979"] = array("name" => "Responsive CSS: Browsers Between 768px and 979px",
    "desc" => "Add your custom CSS to the header.",
    "id" => "custom_css_768_979",
    "tab" => "css",
    "default" => "",
    "info" => "<p>The css in this field will be populated to the header.</p>",
    "type" => "textarea");

$NIMBUS_OPTIONS_ARR["custom_css_980_1200"] = array("name" => "Responsive CSS: Browsers Between 980px and 1200px",
    "desc" => "Add your custom CSS to the header.",
    "id" => "custom_css_980_1200",
    "tab" => "css",
    "default" => "",
    "info" => "<p>The css in this field will be populated to the header.</p>",
    "type" => "textarea");

$NIMBUS_OPTIONS_ARR["custom_css_more_1200"] = array("name" => "Responsive CSS: Browsers Larger Than 1200px",
    "desc" => "Add your custom CSS to the header.",
    "id" => "custom_css_more_1200",
    "tab" => "css",
    "default" => "",
    "info" => "<p>The css in this field will be populated to the header.</p>",
    "type" => "textarea");

$NIMBUS_OPTIONS_ARR[] = array(
    "type" => "close_tab"
);


?>