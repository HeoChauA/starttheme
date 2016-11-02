<?php

/* **************************************************************************************************** */
// METABOX - SIDEBAR +++ START
/* **************************************************************************************************** */

$meta_box_options['nimbus_sidebar_meta_box']['id'] = 'sidebar_meta_box';
$meta_box_options['nimbus_sidebar_meta_box']['title'] = 'Nimbus Sidebar Options';
$meta_box_options['nimbus_sidebar_meta_box']['callback'] = 'nimbus_call_sidebar_meta_box'; #create
$meta_box_options['nimbus_sidebar_meta_box']['post_type'] = 'post,page';
$meta_box_options['nimbus_sidebar_meta_box']['context'] = 'side';
$meta_box_options['nimbus_sidebar_meta_box']['priority'] = 'high';
$meta_box_options['nimbus_sidebar_meta_box']['fields']['show_sidebar'] 
    = array('type'=>'radio', 
            'options'=>array('yes'=>'Show Sidebar', 'no'=>'No Sidebar'), 
            'default'=>'yes', 
            'help'=>'Sidebar Display Options:');
$meta_box_options['nimbus_sidebar_meta_box']['fields']['sidebar_number'] 
    = array('type'=>'textbox', 
            'default'=>'', 
            'label'=>'Sidebar #:', 
            'help'=>'Enter the number of the alternate sidebar you would like to apply. Leave blank to use default.', 
            'size'=>2);


add_action("admin_init", "nimbus_sidebar_meta_box");
add_action('save_post', 'nimbus_save_sidebar_meta_box');



function nimbus_sidebar_meta_box() {
    $key = 'nimbus_sidebar_meta_box';
    global $meta_box_options;
    $id = $meta_box_options[$key]['id'];
    $title = $meta_box_options[$key]['title'];
    $callback = $meta_box_options[$key]['callback'];
    $post_type = $meta_box_options[$key]['post_type'];
    $context = $meta_box_options[$key]['context'];
    $priority = $meta_box_options[$key]['priority'];
    $arr = explode(',', $post_type);
    foreach($arr as $v){
        add_meta_box($id, $title, $callback, $v, $context, $priority);
    }
}

function nimbus_call_sidebar_meta_box() {
    $key = 'nimbus_sidebar_meta_box';
    global $meta_box_options;
    global $post;
    nimbus_output_metabox_style($meta_box_options['nimbus_sidebar_meta_box']['id'], $meta_box_options['nimbus_sidebar_meta_box']['context']);
    $fields = $meta_box_options[$key]['fields'];
    nimbus_metabox_nonce();
    nimbus_draw_fields($fields, $post->ID);
    
}

function nimbus_save_sidebar_meta_box($post_id) {
    
    $key = 'nimbus_sidebar_meta_box';
    global $meta_box_options;
    global $post;

    // verify nonce
    if (isset($_POST['meta_box_nonce'])) {
        $pid = nimbus_verify_nonce($_POST['meta_box_nonce'], $post_id);
        if($pid) return $pid;
    }

    // check autosave
    $pid = nimbus_check_autosave($post_id);
    if($pid) return $pid;

    // check permissions
    if (isset($_POST['post_type'])) {
        $pid = nimbus_verify_permissions($post_id, $_POST['post_type']);
        if($pid) return $pid;
    }

    $fields = $meta_box_options[$key]['fields'];
    foreach($fields as $k=>$f){
        $field_name = $k;
        if(isset($_POST[$field_name]))
            update_post_meta($post_id, $field_name, $_POST[$field_name]);
    }
    
} 

/* **************************************************************************************************** */
// METABOX - SIDEBAR +++ END
/* **************************************************************************************************** */
   



/* **************************************************************************************************** */
// METABOX - TEAM +++ START
/* **************************************************************************************************** */

$meta_box_options['nimbus_team_meta_box']['id'] = 'team_meta_box';
$meta_box_options['nimbus_team_meta_box']['title'] = 'Nimbus Team Member Options';
$meta_box_options['nimbus_team_meta_box']['callback'] = 'nimbus_call_team_meta_box'; #create
$meta_box_options['nimbus_team_meta_box']['post_type'] = 'post';
$meta_box_options['nimbus_team_meta_box']['context'] = 'side';
$meta_box_options['nimbus_team_meta_box']['priority'] = 'high';
$meta_box_options['nimbus_team_meta_box']['fields']['team_member_position'] 
    = array('type'=>'textbox', 
            'default'=>'', 
            'label'=>'Designation/Position:', 
            'help'=>'', 
            'size'=>20);

add_action("admin_init", "nimbus_team_meta_box");
add_action('save_post', 'nimbus_save_team_meta_box');


function nimbus_team_meta_box() {
    $c = get_category_by_slug('team'); 
    if($c) { 
        $cat_id = $c->term_id; 
        #not sure if this is the best way to do this, global $post doesn't work. 
        #$post is passed as a parameter to the callback function but by then the "add_meta_box" has already been called and the meta box title is displaying. 
        #we can check for this condition inside the callback but the title shows regardless because add_meta_box has been called already. move things around?
        if ( isset( $_GET['post'] ) )
            $post_id = $post_ID = (int) $_GET['post'];
        elseif ( isset( $_POST['post_ID'] ) )
            $post_id = $post_ID = (int) $_POST['post_ID'];
        else
            $post_id = $post_ID = 0;
        if (in_category($cat_id, $post_id)){
        
            $key = 'nimbus_team_meta_box';
            global $meta_box_options;
            $id = $meta_box_options[$key]['id'];
            $title = $meta_box_options[$key]['title'];
            $callback = $meta_box_options[$key]['callback'];
            $post_type = $meta_box_options[$key]['post_type'];
            $context = $meta_box_options[$key]['context'];
            $priority = $meta_box_options[$key]['priority'];
            $arr = explode(',', $post_type);
            foreach($arr as $v){
                add_meta_box($id, $title, $callback, $v, $context, $priority);
            }
        }
    }
}

function nimbus_call_team_meta_box($post) {

    
            $key = 'nimbus_team_meta_box';
            global $meta_box_options;
            global $post;
            nimbus_output_metabox_style($meta_box_options['nimbus_team_meta_box']['id'], $meta_box_options['nimbus_team_meta_box']['context']);
            $fields = $meta_box_options[$key]['fields'];
            nimbus_metabox_nonce();
            nimbus_draw_fields($fields, $post->ID);
        
}

function nimbus_save_team_meta_box($post_id) {
    
    $key = 'nimbus_team_meta_box';
    global $meta_box_options;
    global $post;

    // verify nonce
    if (isset($_POST['meta_box_nonce'])) {
        $pid = nimbus_verify_nonce($_POST['meta_box_nonce'], $post_id);
        if($pid) return $pid;
    }

    // check autosave
    $pid = nimbus_check_autosave($post_id);
    if($pid) return $pid;

    // check permissions
    if (isset($_POST['post_type'])) {
        $pid = nimbus_verify_permissions($post_id, $_POST['post_type']);
        if($pid) return $pid;
    }

    $fields = $meta_box_options[$key]['fields'];
    foreach($fields as $k=>$f){
        $field_name = $k;
        if(isset($_POST[$field_name]))
            update_post_meta($post_id, $field_name, $_POST[$field_name]);
    }
    
} 

/* **************************************************************************************************** */
// METABOX - SIDEBAR +++ END
/* **************************************************************************************************** */


?>