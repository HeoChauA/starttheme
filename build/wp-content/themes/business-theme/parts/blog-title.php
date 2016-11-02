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
            <?php if (is_home()) { ?>
                <h1><?php echo nimbus_get_option('nimbus_blog_title') ?></h1>
            <?php } else if (is_author()) {
                $curauth = (isset($_GET['author_name'])) ? get_user_by('slug', $author_name) : get_userdata(intval($author));?>
                <h1>Posts By: <?php echo $curauth->display_name; ?></h1>
            <?php } else if (is_404()) { ?>
                <h1>404</h1>
            <?php } else if (is_archive()){ ?>
                <h1><?php single_cat_title(''); ?></h1>
            <?php } ?>

            </div>
        </div>
    </div>
</div>