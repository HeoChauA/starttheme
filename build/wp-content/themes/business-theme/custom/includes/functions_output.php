<?php

/* **************************************************************************************************** */
// Excerpt Modifications
/* **************************************************************************************************** */

#excerpt length
add_filter('excerpt_length', 'nimbus_excerpt_length');
function nimbus_excerpt_length($length) {
    return 30;
}

#add to pages
add_action('init', 'nimbus_add_excerpts_to_pages');
function nimbus_add_excerpts_to_pages() {
    add_post_type_support('page', 'excerpt');
}

/* **************************************************************************************************** */
// Exclude Categories From Recent Posts
/* **************************************************************************************************** */

add_filter('widget_posts_args','modify_recent_posts_widget');

function modify_recent_posts_widget($args) {
    $str = array();
    $nimbus_exclude_categories_blog = nimbus_get_option('nimbus_exclude_categories_blog');
    if($nimbus_exclude_categories_blog){
        foreach($nimbus_exclude_categories_blog as $k=>$v)
            if($v == 1)
                $str[] = $k;
    }
    $args['category__not_in'] = $str;
    return $args;
}

