<?php
$nimbus_sub_bg = nimbus_get_option('nimbus_page_banner_image');
$nimbus_sub_bg_eff = nimbus_get_option('nimbus_page_banner_image_effect');
$nimbus_sub_style = "";
if (!empty($nimbus_sub_bg)) {
    if ($nimbus_sub_bg_eff == "tile") {
        $nimbus_sub_bg_repeat = "repeat";
        $nimbus_sub_bg_size = "";
    } else {
        $nimbus_sub_bg_repeat = "no-repeat";
        $nimbus_sub_bg_size = "background-size: cover";
    }
$nimbus_sub_style = "background: url(" . $nimbus_sub_bg . ") " . $nimbus_sub_bg_repeat . " 0 0 #efeae7;" . $nimbus_sub_bg_size;
}
?>
<div style="<?php echo $nimbus_sub_style; ?>" class="brick-bg" id="page-title-<?php the_ID(); ?>">
    <div class="container page-title">
        <div class="row">
            <div class="col-sm-9">
            <?php if($post->post_parent != 0) { $parent_title = get_the_title( $post->post_parent ); } else { $parent_title = ''; } ?>
            <?php if($parent_title != '') { ?>
                <div class="breadcrumb"><a href="<?php echo get_permalink($post->post_parent) ?>"><?php echo $parent_title ?></a><span class="separete">&#187;</span></div><?php } ?>
                <h1><?php the_title(); ?></h1>
            </div>
        </div>
    </div>
</div>