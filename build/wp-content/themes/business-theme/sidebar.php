<?php $sidebar_number = get_post_meta(get_the_ID(),'sidebar_number',TRUE); ?>
<?php if(trim($sidebar_number) == '') $show_default = true; else $show_default = false; ?>
<div class="col-md-3">
    <?php 
    if($show_default) {
        if (is_active_sidebar( "default_sidebar" )) 
            dynamic_sidebar( "default_sidebar" );
    } else {
        if (is_active_sidebar( "sidebar_" . $sidebar_number )) 
            dynamic_sidebar( "sidebar_" . $sidebar_number );
    }    
?>
</div>