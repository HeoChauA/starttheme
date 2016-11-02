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
<div style="<?php echo $nimbus_sub_style; ?>" class="brick-bg" id="post-title-<?php the_ID(); ?>">
    <div class="container page-title">
        <div class="row">
            <div class="col-sm-9">
                <?php
                $category_breadcrumbs = '';
                $categories = get_the_category();
                if($categories){
                    foreach($categories as $category) {	 
                        $category_breadcrumbs .= '<a href="'.get_category_link( $category->term_id ).'" title="' . esc_attr( sprintf( __( "View all posts in %s", "nimbus"), $category->name ) ) . '">'.$category->cat_name.'</a>' . ' / ' ;
                    }
                    $category_breadcrumbs = substr($category_breadcrumbs, 0, strlen($category_breadcrumbs)-2);
                }
                ?>
                <div class="breadcrumb"><?php echo $category_breadcrumbs ?><span class="separete">&#187;</span></div>
                <h1><?php the_title(); ?></h1>
            </div>
            <div class="col-sm-3"><?php get_search_form(true); ?></div>
        </div>
    </div>
</div>