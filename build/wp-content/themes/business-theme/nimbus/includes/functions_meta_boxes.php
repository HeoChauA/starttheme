<?php

/* **************************************************************************************************** */
// Form Fields for Meta Boxes
/* **************************************************************************************************** */

function nimbus_draw_fields($fields, $post_id){
    foreach($fields as $k=>$f){
        $field_name = $k;
        $field_value = get_post_meta($post_id, $field_name, true);
        if (isset($f['help'])) {
            echo '<p>' . $f['help'] . '</p>';
        }
        if (isset($f['script'])) {
            echo $f['script'];
        }
        switch($f['type']){
            case 'radio':
                        nimbus_draw_radio_buttons($f['options'], $f['default'], $field_name, $field_value);
                        break;
            case 'textbox':
                        nimbus_draw_textbox($f['label'], $field_name, $field_value, $f['size']);
                        break;
            case 'textarea':
                        nimbus_draw_textarea($f['label'], $field_name, $field_value, $f['cols'], $f['rows']);
                        break;
            case 'select':
                        nimbus_draw_select($f['options'], $f['default'], $field_name, $field_value);
                        break;
            case 'colorbox':
                        nimbus_draw_colorbox($f['label'], $field_name, $field_value, $f['size']);
                        break;
        }
    }
}

/* **************************************************************************************************** */
// Nonce Field for Meta Boxes
/* **************************************************************************************************** */

function nimbus_metabox_nonce(){
    echo '<input type="hidden" name="meta_box_nonce" value="', wp_create_nonce(basename(__FILE__)), '" />';
}

/* **************************************************************************************************** */
// Radio Buttons
/* **************************************************************************************************** */

function nimbus_draw_radio_buttons($options, $default, $field_name, $field_value){
    $checked_option = $default;
    foreach($options as $val=>$lab){
        if($field_value == $val && $field_value != $default)
            $checked_option = $val;
    }
    foreach($options as $val=>$lab){
        $checked = $val == $checked_option ? 'checked' : '';
        $id = $field_name . '-' . $val;
        echo '<input class="" type="radio" name="'.$field_name.'" id="'.$id .'" value="'.$val.'" ' . $checked . '><label for="'.$id.'">'.$lab.'</label><br />';
    }
}

/* **************************************************************************************************** */
// Select Box / Dropdown Menu
/* **************************************************************************************************** */

function nimbus_draw_select($options, $default, $field_name, $field_value){
    echo '<select name="'.$field_name.'">';
    foreach($options as $val=>$lab){
        $selected = $field_value == $val ? 'selected' : '';
        if($checked == '') $checked = $val == $default ? 'selected' : '';
        echo '<option value="'.$val.'" ' . $selected . '>'.$lab.'</option>';
    }
    echo '</select>';
}

/* **************************************************************************************************** */
// Textbox
/* **************************************************************************************************** */

function nimbus_draw_textbox($label, $field_name, $field_value, $size){
    echo '<label>' . $label . ' </label>';
    echo '<input type="text" id="'.$field_name.'" name="'.$field_name.'" value="'.$field_value.'" size="'.$size.'" />';
}

/* **************************************************************************************************** */
// Color box
/* **************************************************************************************************** */

function nimbus_draw_colorbox($label, $field_name, $field_value, $size){
	echo '<label>' . $label . ' </label>'; 
	echo '<input type="text" class="meta-box-color-picker color {required:false}" id="colorbox_'.$field_name.'" name="'.$field_name.'" value="'.$field_value.'" size="'.$size.'" />';
}

/* **************************************************************************************************** */
// Text area
/* **************************************************************************************************** */

function nimbus_draw_textarea($label, $field_name, $field_value, $cols, $rows){
    echo '<label>' . $label . '</label><br />';
    echo '<textarea name="'.$field_name.'" cols="'.$cols.'" rows="'.$rows.'">' . $field_value . '</textarea>';
}

/* **************************************************************************************************** */
// Meta Box Field Verification / Permissions
/* **************************************************************************************************** */

function nimbus_verify_nonce($meta_box_nonce, $post_id){
    if (isset($meta_box_nonce)) {
        if (!wp_verify_nonce($meta_box_nonce, basename(__FILE__))) {
            return $post_id;
        }
    }
    return false;
}

function nimbus_check_autosave($post_id){
    if (defined('DOING_AUTOSAVE') && DOING_AUTOSAVE) {
        return $post_id;
    }
    return false;
}

function nimbus_verify_permissions($post_id, $post_type){
    if (isset($post_type)) {
        if ('page' == $post_type) {
            if (!current_user_can('edit_page', $post_id)) {
                return $post_id;
            }
        } elseif (!current_user_can('edit_post', $post_id)) {
            return $post_id;
        }
        return false;
    }
    return false;
}

/* **************************************************************************************************** */
// Meta Box Styling
/* **************************************************************************************************** */

function nimbus_output_metabox_style($meta_box_id, $context='normal'){
    if(!is_admin()) return;
    
    $str_normal = 
'<style>
#[META_BOX_ID] { background:#e9f7ff!important; }
#[META_BOX_ID] h3.hndle { background-color:#90c9e9;background-image:-ms-linear-gradient(top,#abdaf4,#90c9e9)!important; background-image:-moz-linear-gradient(top,#abdaf4,#90c9e9)!important; background-image:-o-linear-gradient(top,#abdaf4,#90c9e9)!important; background-image:-webkit-gradient(linear,left top,left bottom,from(#abdaf4),to(#90c9e9))!important; background-image:-webkit-linear-gradient(top,#abdaf4,#90c9e9)!important; background-image:linear-gradient(top,#abdaf4,#90c9e9)!important; color:#000; }
#[META_BOX_ID] label {float:left; width:25%; margin-right:0.5em; padding-top:0.2em; font-weight:bold;}
</style>';

    $str_side = 
'<style>
#[META_BOX_ID] { background:#e9f7ff!important; }
#[META_BOX_ID] h3.hndle { background-color:#90c9e9;background-image:-ms-linear-gradient(top,#abdaf4,#90c9e9)!important; background-image:-moz-linear-gradient(top,#abdaf4,#90c9e9)!important; background-image:-o-linear-gradient(top,#abdaf4,#90c9e9)!important; background-image:-webkit-gradient(linear,left top,left bottom,from(#abdaf4),to(#90c9e9))!important; background-image:-webkit-linear-gradient(top,#abdaf4,#90c9e9)!important; background-image:linear-gradient(top,#abdaf4,#90c9e9)!important; color:#000; }
</style>';
    $str = $context == 'normal' ? $str_normal : $str_side;
    echo str_replace('[META_BOX_ID]', $meta_box_id, $str);
}
?>