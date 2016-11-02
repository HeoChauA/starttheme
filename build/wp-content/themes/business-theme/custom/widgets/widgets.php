<?php

if ( function_exists('register_sidebar') )
{
    #footer - box 1
    register_sidebar(array(
        'id' => 'footer_box_1',
        'name' => __( 'Footer - Box 1', 'nimbus'),
        'before_widget' => '<div id="%1$s" class="%2$s">',
        'after_widget' => '</div>',
        'before_title' => '<h3 class="head-foot-widget"><span>',
        'after_title' => '</span></h3>'
    ));
    
    #footer - box 2
    register_sidebar(array(
        'id' => 'footer_box_2',
        'name' => __( 'Footer - Box 2', 'nimbus'),
        'before_widget' => '<div id="%1$s" class="%2$s">',
        'after_widget' => '</div>',
        'before_title' => '<h3 class="head-foot-widget"><span>',
        'after_title' => '</span></h3>'
    ));
    
    #footer - box 3
    register_sidebar(array(
        'id' => 'footer_box_3',
        'name' => __( 'Footer - Box 3', 'nimbus'),
        'before_widget' => '<div id="%1$s" class="%2$s">',
        'after_widget' => '</div>',
        'before_title' => '<h3 class="head-foot-widget"><span>',
        'after_title' => '</span></h3>'
    ));
    
    
    #footer - box 4
    register_sidebar(array(
        'id' => 'footer_box_4',
        'name' => __( 'Footer - Box 4', 'nimbus'),
        'before_widget' => '<div id="%1$s" class="%2$s">',
        'after_widget' => '</div>',
        'before_title' => '<h3 class="head-foot-widget"><span>',
        'after_title' => '</span></h3>'
    ));
    
    
    #default sidebar
    register_sidebar(array(
        'id' => 'default_sidebar',
        'name' => __('Default Sidebar', 'nimbus'),
        'before_widget' => '<div id="%1$s" class="widget %2$s widget sidebar_editable">',
        'after_widget' => '</div>',
        'before_title' => '<h3 class="widget-head"><span>',
        'after_title' => '</span></h3>'
    ));

    #20 alternate sidebars
    $i = 1;
    while ($i <= 20) {
        register_sidebar(array(
            'id' => 'sidebar_' . $i,
            'name' => __('Alternate Sidebar #', 'nimbus') . $i,
            'before_widget' => '<div id="%1$s" class="widget %2$s widget sidebar_editable">',
            'after_widget' => '</div>',
            'before_title' => '<h3 class="widget-head"><span>',
            'after_title' => '</span></h3>'
        ));
        $i++;
    }    
    
    
} 


?>