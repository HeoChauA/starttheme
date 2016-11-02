<?php


/* * *************************************************************************************************** */
// FontAwesome
/* * *************************************************************************************************** */

function nimbus_fontawesome() {

    $i = array("fa-heart" => __('Heart', 'nimbus'),
        "fa-bomb" => __('Bomb', 'nimbus'),
        "fa-paper-plane" => __('Paper Plane', 'nimbus'),
        "fa-wordpress" => __('WordPress', 'nimbus'),
        "fa-arrow-right" => __('Arrow Right', 'nimbus'),
        "fa-arrow-left" => __('Arrow Left', 'nimbus'),
        "fa-bolt" => __('Bolt', 'nimbus'),
        "fa-cloud" => __('Cloud', 'nimbus'),
        "fa-coffee" => __('Coffee', 'nimbus'),
        "fa-bullseye" => __('Bullseye', 'nimbus'),
        "fa-key" => __('Key', 'nimbus'),
        "fa-comments" => __('Comments', 'nimbus'),
        "fa-cogs" => __('Cogs', 'nimbus'),
        "fa-fire-extinguisher" => __('Fire', 'nimbus')        
        );
    return $i;
}

/* * *************************************************************************************************** */
// Categories
/* * *************************************************************************************************** */

function nimbus_categories_arr() {

    $categories = array();
    $get_categories = get_categories();
    foreach ($get_categories as $cat) {
        $categories[$cat->cat_ID] = $cat->cat_name;
    }
    return $categories; 
}    
    

/* * *************************************************************************************************** */
// Pages
/* * *************************************************************************************************** */

function nimbus_pages_arr() {

    $pages = array();
    $get_pages = get_pages('sort_column=post_parent,menu_order');
    foreach ($get_pages as $page) {
        $pages[$page->ID] = $page->post_title;
    }
    return $pages;
}
function nimbus_random_page(){ 
    $get_pages = get_pages();
    if(!empty($get_pages)) {    
        shuffle($get_pages);
        $page = $get_pages[0]->ID; 
    } else {
        $page = "";
    }
    return $page; 

} 


/* * *************************************************************************************************** */
// Button Styles
/* * *************************************************************************************************** */

function nimbus_button_styles() {

    $button_styles = array(
        "btn-default" =>  __('White', 'nimbus'),
        "btn-primary" =>  __('Dark Blue', 'nimbus'),
        "btn-success" =>  __('Green', 'nimbus'),
        "btn-info" =>  __('Light Blue', 'nimbus'),
        "btn-warning" =>  __('Orange', 'nimbus'),
        "btn-danger" =>  __('Red', 'nimbus')
    );
    return $button_styles;
}


/* * *************************************************************************************************** */
// Scripts
/* * *************************************************************************************************** */

function nimbus_include_scripts_in_head() {

    $scripts_in_head = array("mootools" => "MooTools*",
        "dojo" => "Dojo*",
        "prototype" => "Prototype*",
        "scriptaculous" => "script.aculo.us*");
    return $scripts_in_head;
}

/* * *************************************************************************************************** */
// Meta Info
/* * *************************************************************************************************** */

function nimbus_include_blog_meta() {

    $post_meta = array("categories" => __('Categories', 'nimbus'),
        "tags" => __('Tags', 'nimbus'));
    return $post_meta;
}

/* * *************************************************************************************************** */
// Border Types
/* * *************************************************************************************************** */

function nimbus_image_border_types() {

    $border_types = array("solid" => __('Solid', 'nimbus'),
        "double" => __('Double', 'nimbus'),
        "grooved" => __('Grooved', 'nimbus'),
        "dotted" => __('Dotted', 'nimbus'),
        "inset" => __('Inset', 'nimbus'),
        "outset" => __('Outset', 'nimbus'),
        "ridged" => __('Ridged', 'nimbus'),
        "dashed" => __('Dashed', 'nimbus'));
    return $border_types;
}

/* * *************************************************************************************************** */
// Nivo Effects
/* * *************************************************************************************************** */

function nimbus_nivo_effect_types() {

    $nivo_effects = array("random" => __('Random', 'nimbus'),
        "fade" => __('Fade', 'nimbus'),
        "sliceDown" => __('Slice Down', 'nimbus'),
        "sliceDownLeft" => __('Slice Down Left', 'nimbus'),
        "sliceUp" => __('Slice Up', 'nimbus'),
        "sliceUpLeft" => __('Slice Up Left', 'nimbus'),
        "sliceUpDown" => __('Slice Up Down', 'nimbus'),
        "sliceUpDownLeft" => __('Slice Up Down Left', 'nimbus'),
        "fold" => __('Fold', 'nimbus'),
        "slideInRight" => __('Slide In Right', 'nimbus'),
        "boxRandom" => __('Box Random', 'nimbus'),
        "boxRain" => __('Box Rain', 'nimbus'),
        "boxRainReverse" => __('Box Rain Reverse', 'nimbus'),
        "boxRainGrowReverse" => __('Box Rain Grow Reverse', 'nimbus'));
    return $nivo_effects;
}

/* * *************************************************************************************************** */
// Default Title Configs
/* * *************************************************************************************************** */

function nimbus_default_title_config() {

    $title_configs = array("post-site" => __('Post Title | Site Title', 'nimbus'),
        "site-post" => __('Site Title | Post Title', 'nimbus'),
        "site" => __('Site Title', 'nimbus'),
        "post" => __('Post Title', 'nimbus'));
    return $title_configs;
}

/* * *************************************************************************************************** */
// Font fonttrans Options
/* * *************************************************************************************************** */

function nimbus_font_transform() {

    $font_transform = array("none" => __('Normal', 'nimbus'),
        "capitalize" => __('Capitalize', 'nimbus'),
        "uppercase" => __('Uppercase', 'nimbus'),
        "lowercase" => __('Lowercase', 'nimbus'));
    return $font_transform;
}

/* * *************************************************************************************************** */
// Font Percent of Parnent
/* * *************************************************************************************************** */

function nimbus_percent_of_parent() {

    $nimbus_percent_of_parent = array();
        $i = 1;
        while ($i <= 400) {
            $nimbus_percent_of_parent[$i] = $i . "%";
            $i++;
        }
        
    return $nimbus_percent_of_parent;
}



/* * *************************************************************************************************** */
// Fonts Styles
/* * *************************************************************************************************** */

function nimbus_font_styles() {

    $default = array("200" => "200 (light)",
        "200 italic" => "200 (light) Italic",
        "300" => "300 (book)",
        "300 italic" => "300 (book) Italic",
        "400" => "400 (normal)",
        "400 italic" => "400 (normal) Italic",
        "500" => "500 (semi-bold)",
        "500 italic" => "500 (semi-bold) Italic",
        "600" => "600(bold)",
        "600 italic" => "600(bold) Italic",
        "700" => "700 (bolder)",
        "700 italic" => "700 (bolder) Italic",
        "800" => "800(extra-bold)",
        "800 italic" => "800(extra-bold) Italic");

    return $default;
}


/* * *************************************************************************************************** */
// Font faces
/* * *************************************************************************************************** */

global $NIMBUS_FONT_FACES;

$NIMBUS_FONT_FACES = array();

$NIMBUS_FONT_FACES = array(
    "Volkorn" => array("name" => "Volkorn*",
        "import" => "<link href='http://fonts.googleapis.com/css?family=Vollkorn:400italic,700italic,400,700' rel='stylesheet' type='text/css'>",
        "fam" => "'Volkorn', serif"),
    "Droid Sans" => array("name" => "Droid Sans*",
        "import" => "<link href='http://fonts.googleapis.com/css?family=Droid+Sans:400,700' rel='stylesheet' type='text/css' />",
        "fam" => "'Droid Sans', sans-serif"),
    "Open Sans" => array("name" => "Open Sans*",
        "import" => "<link href='http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>",
        "fam" => "'Open Sans', sans-serif"),
    "Oswald" => array("name" => "Oswald*",
        "import" => "<link href='http://fonts.googleapis.com/css?family=Oswald:400,300,700' rel='stylesheet' type='text/css'>",
        "fam" => "'Oswald', sans-serif"),
    "Verdana" => array("name" => "Verdana",
        "import" => "",
        "fam" => "Verdana, Geneva, sans-serif"),
    "Times New Roman" => array("name" => "Times New Roman",
        "import" => "",
        "fam" => "'Times New Roman', Times, serif"),
);




/* * *************************************************************************************************** */
// Get Sample Content
/* * *************************************************************************************************** */
$sample_content = '<h1>Lorem ipsum</h1>
<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque pellentesque quam elit, id dictum nulla cursus quis. Maecenas eleifend venenatis velit rhoncus condimentum. Morbi imperdiet mi aliquam, suscipit mi ac, faucibus sem. Donec tortor augue, tempor ac blandit ac, elementum vel dui. Maecenas sit amet diam molestie, rhoncus lorem eget, ultrices purus. Quisque arcu neque, tincidunt id erat eget, malesuada lacinia tortor. Integer viverra viverra turpis, laoreet adipiscing felis iaculis eget. Ut porttitor, tortor sit amet cursus condimentum, quam leo rutrum leo, non sagittis eros eros ac metus. Curabitur enim orci, fringilla sed elit eget, convallis fermentum eros. Aliquam sit amet vestibulum erat. Pellentesque neque magna, scelerisque egestas laoreet ac, suscipit quis ante. Cras nibh urna, aliquam vitae turpis in, interdum auctor nisl. Etiam lacinia lorem in semper pulvinar. Vestibulum arcu massa, placerat sed ultricies ac, iaculis sit amet justo. Aenean quis sem sagittis, tincidunt lectus sed, semper libero. </p>
<h1>Pellentesque habitant</h1>
<p>Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Pellentesque nec erat dolor. Duis volutpat dui non lectus pulvinar tincidunt. Ut at imperdiet tortor. Maecenas at elementum neque, pulvinar tempor nulla. Pellentesque at varius eros. Nulla euismod libero sed elit condimentum, sit amet luctus dolor pellentesque. Phasellus interdum magna quis porttitor dignissim. In risus nibh, ultrices eu semper at, porttitor sit amet ligula. Nulla placerat, enim ac viverra cursus, mauris arcu consectetur enim, sed sagittis sapien erat vel purus. Ut condimentum porta orci sed ornare. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Curabitur suscipit suscipit ultricies. Proin adipiscing nisi a euismod condimentum.</p>
<h1>Sed condimentum</h1>
<p>Sed condimentum erat sit amet faucibus suscipit. Ut vel metus sed sem facilisis tempus a eget enim. Etiam suscipit tellus vel blandit tincidunt. Aliquam ac feugiat nisl. Morbi eu sem sit amet lorem blandit suscipit in at lectus. Sed vitae ornare quam. Aenean in risus lorem. Proin pulvinar ipsum ac arcu ullamcorper, quis laoreet turpis dapibus. Maecenas congue consectetur odio, eu suscipit ante. Morbi at ultricies leo, in iaculis elit. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae;</p>';

$titles = get_text_between_tags($sample_content, 'h1');
$paragraphs = get_text_between_tags($sample_content, 'p');

function nimbus_get_sample_content($type){
	global $titles, $paragraphs;
	switch($type){
		case 'h1':	$str = $titles[array_rand($titles)]; break;
		case 'p':	$str = $paragraphs[array_rand($paragraphs)]; break;			
	}
	return $str;
}

function get_text_between_tags($string, $tagname) {
    $d = new DOMDocument();
    $d->loadHTML($string);
    $return = array();
    foreach($d->getElementsByTagName($tagname) as $item){
        $return[] = $item->textContent;
    }
    return $return;
}

function get_sample_image($subdir){
	$dir = get_template_directory() . '/nimbus/demo/images/' . $subdir; 
	$images = array_diff(scandir($dir), array('..', '.'));
	return get_template_directory_uri() . '/nimbus/demo/images/' . $subdir .'/' . $images[array_rand($images)];
}
?>