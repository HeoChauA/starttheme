<?php
$testposts = array();
if ( nimbus_get_option('toggle_testimonials') == "show" ) {
    $heading = '';
    $c = get_category_by_slug('testimonials'); 
    if($c) {
        $id = $c->term_id; 
        $args = array(
            'posts_per_page'   => 3,
            'category'         => $id
        ); 
        $testposts = get_posts($args);
        $heading = nimbus_get_option('nimbus_testimonials_heading');
    }
    ?>
    <?php if($testposts) { ?>
    <?php global $nimbus_testimonials_bg_color ?>
    <section class="<?php echo $nimbus_testimonials_bg_color ?>" id="home_testimonials">
        <div class="container testimonials">
            <h2 class="heading-2"><span><?php echo $heading ?></span></h2>
            <div class="row">
                <?php foreach ($testposts as $post) : setup_postdata($post); ?>
                <?php
                $thumb_id = get_post_thumbnail_id();
                $thumb_url_array = wp_get_attachment_image_src($thumb_id, 'thumbnail-size', true);
                $thumb_url = $thumb_url_array[0];
                ?>
                <div class="col-sm-4">
                    <div class="text"><?php the_content(); ?></div>
                    <div class="image"><img src="<?php echo $thumb_url ?>" alt="<?php the_title(); ?>" /></div>
                    <div class="by"><?php the_title(); ?></div>
                </div>
                <?php endforeach; ?>
            </div>
        </div>
    </section>
    <?php } 
    wp_reset_postdata(); 
}?>