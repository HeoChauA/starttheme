<?php
$teamposts = array();
if ( nimbus_get_option('toggle_team') == "show" ) {
    $heading = '';
    $c = get_category_by_slug('team'); 
    if($c) { 
        $id = $c->term_id; 
        $args = array(
            'posts_per_page'   => 4,
            'category'         => $id
        ); 
        $teamposts = get_posts($args);
        $heading = nimbus_get_option('nimbus_team_heading');
    }
    ?>

    <?php global $nimbus_team_bg_color; ?>
    <?php if($teamposts) { ?>
    <section class="<?php echo $nimbus_team_bg_color ?>" id="home_team">
        <div class="container ">
            <h2 class="heading"><span><?php echo $heading ?></span></h2>
            <div class="our-team">
                <div class="row">
                    <?php foreach ($teamposts as $post) : setup_postdata($post); ?>
                    <?php 
                    $thumb_id = get_post_thumbnail_id();
                    $thumb_url_array = wp_get_attachment_image_src($thumb_id, 'thumbnail-size', true);
                    $thumb_url = $thumb_url_array[0];
                    $position = get_post_meta(get_the_ID(),'team_member_position',TRUE);
                    ?>
                    <div class="col-sm-3">
                        <div class="line"></div>
                        <div class="image"><a href="<?php the_permalink(); ?>"><img src="<?php echo $thumb_url ?>" alt="<?php the_title(); ?>" /></a></div>
                        <div class="name"><?php the_title(); ?></div>
                        <?php if($position != '') { ?><div class="position"><?php echo $position ?></div><?php } ?>
                        <div class="read-more"><a href="<?php the_permalink(); ?>">See Bio <i class="fa fa-long-arrow-right"></i></a></div>
                    </div>
                    <?php endforeach; ?>
                </div>
            </div>
        </div>
    </section>

    <?php } 
    wp_reset_postdata(); 
}
?>