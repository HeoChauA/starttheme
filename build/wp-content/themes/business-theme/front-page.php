<?php
get_header();
get_template_part( 'parts/banner'); 

#get order of sections and build background colors array
$nimbus_frontpage_sections_order = nimbus_get_option('nimbus_frontpage_sections_order'); 
$nimbus_frontpage_sections_order_arr = explode(',', $nimbus_frontpage_sections_order);
$odd = 'white-bg';
$even = 'grey-bg';
$i=1;
foreach($nimbus_frontpage_sections_order_arr as $v) { 
    $bg_color = 'nimbus_'.$v.'_bg_color';
    $nimbus_bg_color = nimbus_get_option($bg_color);
    $t = get_category_by_slug('testimonials'); 
    $tm = get_category_by_slug('team');
    if(($v == 'testimonials') && ($t == false) || ($v == 'team') && ($tm == false)) {
        continue;
    }
    
    if($nimbus_bg_color == ''){
        if($i%2==0) $$bg_color = $even;
        else        $$bg_color = $odd;
        $i++;
    } else {
        echo "<style>section.custom-bg-".$v."{background:".$nimbus_bg_color.";}</style>";
        $$bg_color = 'custom-bg-'.$v;
    }
}
foreach($nimbus_frontpage_sections_order_arr as $v) { 
    $bg_color = 'nimbus_'.$v.'_bg_color';
    switch($v){
        case '4boxes':          get_template_part('parts/frontpage', '4boxes'); break;
        case 'testimonials':    get_template_part('parts/frontpage', 'testimonials'); break;
        case 'services':        get_template_part('parts/frontpage', 'services'); break;
        case 'partners':        get_template_part('parts/frontpage', 'partners'); break;
        case 'team':            get_template_part('parts/frontpage', 'team'); break;
        case 'pagetext':        get_template_part('parts/frontpage', 'pagetext'); break;
    }
}

get_footer(); 
?>