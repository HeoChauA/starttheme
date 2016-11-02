<?php


/***********************************************
 * Enqueue scripts and styles for the front end
 ***********************************************/
 
function nimbus_frontend_styles_scripts() {
    if (!is_admin()) {
        wp_register_style("bootstrap", get_template_directory_uri() . "/assets/css/bootstrap.min.css", array(), "3.0.3", "all");
        wp_register_style("bootstrap-theme", get_template_directory_uri() . "/assets/css/bootstrap-theme.min.css", array(), "3.0.3", "all");
        wp_register_style("font-awesome", get_template_directory_uri() . "/assets/font-awesome/css/font-awesome.min.css", array(), "4.0.3", "all");
        wp_register_style("nimbus-modern", get_template_directory_uri() . "/style.css", array(), "1.0.0", "all");
        wp_register_script("bootstrap", get_template_directory_uri() . "/assets/js/bootstrap.min.js", array(), "3.0.3");
        wp_enqueue_style('bootstrap');
        wp_enqueue_style('bootstrap-theme');
        wp_enqueue_style('font-awesome');
        wp_enqueue_style('nimbus-modern');
        wp_enqueue_script('jquery');
        wp_enqueue_script('bootstrap');
        wp_enqueue_script('jquery-masonry');
    }
}
add_action( 'wp_enqueue_scripts', 'nimbus_frontend_styles_scripts' );


/***********************************************
 * WP_Head scripts
 ***********************************************/

function nimbus_public_scripts_wp_head() {
?>
    <!--[if lt IE 9]>
        <script src="<?php echo get_template_directory_uri(); ?>/assets/js/html5shiv.js"></script>
        <script src="<?php echo get_template_directory_uri(); ?>/assets/js/respond.min.js"></script>
    <![endif]-->
<?php
}
add_action('wp_head', 'nimbus_public_scripts_wp_head');

/* * *************************************************************************************************** */
// WP_head options/styles.
/* * *************************************************************************************************** */

add_action('wp_head', 'nimbus_options_to_head');

function nimbus_options_to_head() {

    global $NIMBUS_FONT_FACES, $NIMBUS_OPTIONS_ARR, $post;
    
    $get_fonts = $NIMBUS_FONT_FACES;
    $options = $NIMBUS_OPTIONS_ARR;
    
    foreach ($options as $option) {
        if (($option['type'] == "typography") || ($option['type'] == "font")  || ($option['type'] == "face")) {
            $$option['id'] = nimbus_get_option($option['id']);
        }    
    }
    $font_list = array();
    foreach ($options as $option) {
        if (($option['type'] == "typography") || ($option['type'] == "font")  || ($option['type'] == "face")) {
            $nimbus_get_face = nimbus_get_option($option['id']);
            array_push($font_list, $nimbus_get_face['face']);
        }    
    }
    $filtered_font_list = array_unique($font_list);
    foreach ($filtered_font_list as $key => $font) {
        if(isset($get_fonts[$font])){
            echo $get_fonts[$font]['import'];
            echo "\n";
        }
    }
    ?>

<!-- Style from <?php echo THEME_NAME; ?> Theme Options. --> <?php echo "\n"; ?> 
<style type="text/css"><?php echo "\n"; ?> 
/* navigation */
<?php $nimbus_menu_hover_color = nimbus_get_option('nimbus_menu_hover_color');
$nimbus_menu_text_color = nimbus_get_option('nimbus_menu_text_color'); ?>
.navbar-main .navbar-nav > li > a{color:<?php echo $nimbus_menu_text_color ?>;}
.navbar-main .navbar-nav > li > a > .fa-caret-down{color:<?php echo $nimbus_menu_text_color ?>;}
.navbar-main .nav > .current-menu-ancestor > a, .navbar-main .nav > .active > a,.navbar-main .nav > li > a:hover, .navbar-main .nav > li > a:focus,.navbar-main .nav .open > a, .navbar-main .nav .open > a:hover, .navbar-main .nav .open > a:focus{color:<?php echo $nimbus_menu_hover_color ?>;}
.navbar-main .dropdown-menu > li > a, .dropdown-menu > li.active.menu-item-type-custom  > a{ color:<?php echo $nimbus_menu_text_color ?>;}
.navbar-main .dropdown-menu > .selected > a,.navbar-main .dropdown-menu > li > a:focus,.navbar-main .dropdown-menu > li > a:hover{color:<?php echo $nimbus_menu_text_color ?>;}
.dropdown-menu > li.active  > a:hover, .dropdown-menu > li.active  > a:focus, .dropdown-menu > li.selected > a, .dropdown-menu > li.active > a{background:<?php echo $nimbus_menu_hover_color ?>;}
/* body */
body{font-family:<?php echo $get_fonts[$body_style['face']]['fam'] ?>;color:<?php echo $body_style['color']; ?>;font-size:<?php echo $body_style['size']; ?>;background:#ffffff;line-height:<?php echo $body_style['line']; ?>}
.nav-tabs>li>a { color:<?php echo $body_style['color']; ?>; }
/* link color */
<?php $link_color = nimbus_get_option('link_color'); $link_hover_color = nimbus_get_option('link_hover_color'); ?>
a, a:visited{color:<?php echo $link_color ?>;}
a:hover{color:<?php echo $link_hover_color ?>;}
/* logo text */
.navbar-main  .navbar-brand-text{padding-top:30px; font-size:<?php echo $nimbus_logo_style['size'] ?>; font-family:<?php echo $get_fonts[$nimbus_logo_style['face']]['fam'] ?>;}
.navbar-main .navbar-brand-text a{color: <?php echo $nimbus_logo_style['color']; ?>}
/* slideshow */
#slideshow .headline{color:<?php echo $nimbus_slideshow_heading_style['color']; ?>;font-size:<?php echo $nimbus_slideshow_heading_style['size']; ?>;margin:0;font-family:<?php echo $get_fonts[$nimbus_slideshow_heading_style['face']]['fam'] ?>;}
.slide_h1_wrap {font-size:<?php echo $nimbus_slideshow_heading_style['size']; ?>;}
#slideshow .sub-headline{color:<?php echo $nimbus_slideshow_subheading_style['color'] ?>;font-size:<?php echo $nimbus_slideshow_subheading_style['size'] ?>;margin:0 0 20px;font-weight:<?php echo $nimbus_slideshow_subheading_style['style'] ?>;letter-spacing:1px;}
.slide_h3_wrap { font-size:<?php echo $nimbus_slideshow_subheading_style['size'] ?>; }
#slideshow .descriptions{color:<?php echo $nimbus_slideshow_text_style['color'] ?>;font-size:<?php echo $nimbus_slideshow_text_style['size'] ?>;margin:0 0 20px;border:1px solid #dadada;background:#ffffff;background:rgba(255,255,255,0.7);padding:20px;max-width:100%;width:455px;}
/* navigation font */
/* headings */
h1, h1 a, h1 a:visited { font:<?php echo $h1_style['style']; ?> <?php echo $h1_style['size']; ?>/<?php echo $h1_style['line']; ?> <?php echo $get_fonts[$h1_style['face']]['fam']; ?>; color:<?php echo $h1_style['color']; ?>;  text-transform:<?php echo $h1_style['fonttrans']; ?>; } 
h1 a:hover { color:<?php echo nimbus_get_option('h1_hover_color'); ?>; }
h2, h2 a, h2 a:visited { font:<?php echo $h2_style['style']; ?> <?php echo $h2_style['size']; ?>/<?php echo $h2_style['line']; ?> <?php echo $get_fonts[$h2_style['face']]['fam']; ?>; color:<?php echo $h2_style['color']; ?>; text-transform:<?php echo $h2_style['fonttrans']; ?>; }
h2 a:hover { color:<?php echo nimbus_get_option('h2_hover_color'); ?>; }
h3, h3 a, h3 a:visited { font:<?php echo $h3_style['style']; ?> <?php echo $h3_style['size']; ?>/<?php echo $h3_style['line']; ?> <?php echo $get_fonts[$h3_style['face']]['fam']; ?>; color:<?php echo $h3_style['color']; ?>;  text-transform:<?php echo $h3_style['fonttrans']; ?>; }
h3 a:hover { color:<?php echo nimbus_get_option('h3_hover_color'); ?>; }
h4, h4 a, h4 a:visited { font:<?php echo $h4_style['style']; ?> <?php echo $h4_style['size']; ?>/<?php echo $h4_style['line']; ?> <?php echo $get_fonts[$h4_style['face']]['fam']; ?>; color:<?php echo $h4_style['color']; ?>;  text-transform:<?php echo $h4_style['fonttrans']; ?>;}
h4 a:hover { color:<?php echo nimbus_get_option('h4_hover_color'); ?>; }
h5, h5 a, h5 a:visited { font:<?php echo $h5_style['style']; ?> <?php echo $h5_style['size']; ?>/<?php echo $h5_style['line']; ?> <?php echo $get_fonts[$h5_style['face']]['fam']; ?>; color:<?php echo $h5_style['color']; ?>;  text-transform:<?php echo $h5_style['fonttrans']; ?>;}
h5 a:hover { color:<?php echo nimbus_get_option('h5_hover_color'); ?>; }
h6, h6 a, h6 a:visited { font:<?php echo $h6_style['style']; ?> <?php echo $h6_style['size']; ?>/<?php echo $h6_style['line']; ?> <?php echo $get_fonts[$h6_style['face']]['fam']; ?>; color:<?php echo $h6_style['color']; ?>;  text-transform:<?php echo $h6_style['fonttrans']; ?>;}
h6 a:hover { color:<?php echo nimbus_get_option('h6_hover_color'); ?>; }        
/* post meta */
.post-details .meta-post{font-size:<?php echo $nimbus_post_meta_style['size'];?> font-family: <?php echo $get_fonts[$nimbus_post_meta_style['face']]['fam'] ?>;}
.post-details .meta-tags{font-size:<?php echo $nimbus_post_meta_style['size'];?> ; font-family: <?php echo $get_fonts[$nimbus_post_meta_style['face']]['fam'] ?> text-align:center;}        
/* blockquote */
blockquote, .blockquote{border:0;background:url(<?php echo get_template_directory_uri(); ?>/assets/img/quote-top.png) no-repeat 50px 25px #f5f5f5;color:<?php echo $blockquote_style['color'] ?>;font-size:<?php echo $blockquote_style['size'] ?>;font-family:<?php echo $get_fonts[$blockquote_style['face']]['fam'] ?>;}
blockquote p, .blockquote p{text-align:center;color:<?php echo $blockquote_style['color'] ?>;font-size:<?php echo $blockquote_style['size'] ?>;font-family:<?php echo $get_fonts[$blockquote_style['face']]['fam'] ?>;}
.pullquote_left p, .pullquote_right p { font:<?php echo $pullquote_style['style']; ?> <?php echo $pullquote_style['size']; ?>/<?php echo $pullquote_style['line']; ?> <?php echo $get_fonts[$pullquote_style['face']]['fam']; ?>; color:<?php echo $pullquote_style['color']; ?>;  text-transform:<?php echo $pullquote_style['fonttrans']; ?>;  }
/* code */
code, pre, var { font-family:<?php echo $get_fonts[$code_style['face']]['fam']; ?>; color:<?php echo $code_style['color']; ?>; }
/* tables */
th { font:<?php echo $th_style['style']; ?> <?php echo $th_style['size']; ?>/<?php echo $th_style['line']; ?> <?php echo $get_fonts[$th_style['face']]['fam']; ?>; color:<?php echo $th_style['color']; ?>;  text-transform:<?php echo $th_style['fonttrans']; ?>;}
td, td a, td a:hover { font:<?php echo $td_style['style']; ?> <?php echo $td_style['size']; ?>/<?php echo $td_style['line']; ?> <?php echo $get_fonts[$td_style['face']]['fam']; ?>; color:<?php echo $td_style['color']; ?>;  text-transform:<?php echo $td_style['fonttrans']; ?>;}
caption { font:<?php echo $tc_style['style']; ?> <?php echo $tc_style['size']; ?>/<?php echo $tc_style['line']; ?> <?php echo $get_fonts[$tc_style['face']]['fam']; ?>; color:<?php echo $tc_style['color']; ?>;  text-transform:<?php echo $tc_style['fonttrans']; ?>;}
/* sidebar */
.widget .widget-head{text-align:center;color:<?php $nimbus_sidebar_heading_style['color'] ?>;font-size:<?php echo $nimbus_sidebar_heading_style['size'] ?>;font-family:<?php echo $get_fonts[$nimbus_sidebar_heading_style['face']]['fam']; ?>;margin:0 0 20px;background:url(<?php echo get_template_directory_uri(); ?>/assets/img/grey-line.png) repeat-x 0 center;text-transform:none;font-weight:<?php echo $nimbus_sidebar_heading_style['style'] ?>;}
.widget ul{list-style:none;margin:0;padding:0; color:<?php $nimbus_sidebar_text_style['color'] ?>;font-size:<?php echo $nimbus_sidebar_text_style['size'] ?>;font-family:<?php echo $get_fonts[$nimbus_sidebar_text_style['face']]['fam']; ?>}
.widget ul li{margin-bottom:5px;text-align:center;color:<?php $nimbus_sidebar_text_style['color'] ?>;font-size:<?php echo $nimbus_sidebar_text_style['size'] ?>;font-family:<?php echo $get_fonts[$nimbus_sidebar_text_style['face']]['fam']; ?>}
.widget {color:<?php $nimbus_sidebar_text_style['color'] ?>;font-size:<?php echo $nimbus_sidebar_text_style['size'] ?>;font-family:<?php echo $get_fonts[$nimbus_sidebar_text_style['face']]['fam']; ?> }         
/* footer */
#footers{background:#444444;padding:25px 0;color:<?php echo $nimbus_footer_text_style['color'] ?>;font-size:<?php echo $nimbus_footer_text_style['size'] ?>; font-family:<?php echo $get_fonts[$nimbus_footer_text_style['face']]['fam']; ?>}
.copyright, .copyright a{color:<?php echo $nimbus_copyright_style['color'] ?>;font-size:<?php echo $nimbus_copyright_style['size']; ?>; font-family:<?php echo $get_fonts[$nimbus_copyright_style['face']]['fam']; ?>;}
/* buttons*/


a.nimbus_button { font-family:<?php echo $get_fonts[$button_style['face']]['fam']; ?>; }


.btn-blue, .btn-blue:visited, #comment-submit, #comment-submit:visited, input[type="button"], input[type="reset"], input[type="submit"] {display: inline-block;background-color: #25a9b5;background-image: -moz-linear-gradient(top, #37bbc7, #25a9b5);background-image: -webkit-gradient(linear, 0 0, 0 100%, from(#37bbc7), to(#25a9b5));background-image: -webkit-linear-gradient(top, #37bbc7, #25a9b5);background-image: -o-linear-gradient(top, #37bbc7, #25a9b5);background-image: linear-gradient(to bottom, #37bbc7, #25a9b5);background-repeat: repeat-x;filter: progid:DXImageTransform.Microsoft.gradient(startColorstr='#ff37bbc7', endColorstr='#ff25a9b5', GradientType=0);color:<?php echo $default_button_style['color'] ?>;font-size:<?php echo $default_button_style['size'] ?>;font-weight:<?php echo $default_button_style['style'] ?>;font-family:<?php echo $get_fonts[$default_button_style['face']]['fam'] ?>;-webkit-border-radius:10px;-moz-border-radius:10px;border-radius:10px;padding:10px 16px 10px;border:none;outline:none!important;}

.btn-blue:hover, .btn-blue:focus, #comment-submit:hover, #comment-submit:focus, input[type="button"]:hover, input[type="reset"]:hover, input[type="submit"]:hover {background-color: #37bbc7;background-image: -moz-linear-gradient(top, #25a9b5, #37bbc7);background-image: -webkit-gradient(linear, 0 0, 0 100%, from(#25a9b5), to(#37bbc7));background-image: -webkit-linear-gradient(top, #25a9b5, #37bbc7);background-image: -o-linear-gradient(top, #25a9b5, #37bbc7);background-image: linear-gradient(to bottom, #25a9b5, #37bbc7);background-repeat: repeat-x;filter: progid:DXImageTransform.Microsoft.gradient(startColorstr='#ff25a9b5', endColorstr='#ff37bbc7', GradientType=0);color:<?php echo $default_button_style['color'] ?>;font-size:<?php echo $default_button_style['size'] ?>;font-weight:<?php echo $default_button_style['style'] ?>;font-family:<?php echo $get_fonts[$default_button_style['face']]['fam'] ?>;text-decoration:none;}


/* shortcodes */
span.nimbus_typography_one { font-family:<?php echo $get_fonts[$nimbus_typography_one['face']]['fam']; ?>; }
span.nimbus_typography_two { font-family:<?php echo $get_fonts[$nimbus_typography_two['face']]['fam']; ?>; }
span.nimbus_typography_three { font-family:<?php echo $get_fonts[$nimbus_typography_three['face']]['fam']; ?>; }


/* custom */
<?php echo nimbus_get_option('custom_css') ?>
@media (max-width: 767px) {
<?php echo nimbus_get_option('custom_css_less_767') ?>
#slideshow .headline, #slideshow .sub-headline{font-size:<?php echo nimbus_get_option('slide_title_mobile'); ?>%;}
#slideshow .descriptions * { font-size:<?php echo nimbus_get_option('slide_text_mobile'); ?>%; }
}
@media (min-width: 768px) and (max-width: 979px) {
<?php echo nimbus_get_option('custom_css_768_979') ?>
#slideshow .headline, #slideshow .sub-headline{font-size:<?php echo nimbus_get_option('slide_title_tab'); ?>%;}
#slideshow .descriptions * { font-size:<?php echo nimbus_get_option('slide_text_tab'); ?>%; }
}
@media (min-width: 980px)and (max-width: 1200px) {
<?php echo nimbus_get_option('custom_css_980_1200') ?>
}
@media (min-width: 1200px) {
<?php echo nimbus_get_option('custom_css_more_1200') ?>
}
    <?php echo "\n"; ?> 
    </style>
    <?php
    echo "\n";
}


/***********************************************
 * WP_Footer scripts
 ***********************************************/

function nimbus_public_scripts_wp_footer() {
?>
<script type="text/javascript">
var $container = jQuery('#post-list-masonry');
$container.masonry({
    isFitWidth: true,
    itemSelector: '.post-list'
});
</script>
<?php
}
add_action('wp_footer', 'nimbus_public_scripts_wp_footer', 100);

