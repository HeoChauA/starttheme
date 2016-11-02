<?php
if ( is_search() ) { $s = get_query_var('s'); }
$str = '';
$nimbus_exclude_categories_blog = nimbus_get_option('nimbus_exclude_categories_blog');
if($nimbus_exclude_categories_blog) {
    $arr = array();
    foreach($nimbus_exclude_categories_blog as $k=>$v)
        if($v == 1)
            $arr[] = '-' . $k;
    $str = implode(',', $arr);
}
$paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
$cat = (get_query_var('cat')) ? get_query_var('cat') : '';
if($cat)    $str = $str . ',' . $cat;
query_posts('s='.$s.'&cat=' . $str . '&paged=' . $paged);
?>

    <div class="container">
        <div class="row">
            <div class="col-md-9">
                <?php if ( have_posts() ) :  ?>	
                <div id="post-list-masonry" style="width:100%;">
                <?php while ( have_posts() ) : the_post(); ?>
                    <div id="post-<?php the_ID(); ?>" <?php post_class('post-list'); ?>>
                        <?php 
                        if (has_post_thumbnail()) { ?>
                            <div class="image"><a href="<?php the_permalink(); ?>"><?php the_post_thumbnail("nimbus_232_119"); ?></a></div>
                        <?php } else if (nimbus_get_option('nimbus_example_content') == "on") {
                            echo '<div class="image"><a href="' . get_permalink() . '"><img src="' . get_template_directory_uri() . '/assets/img/preview/232x119.jpg" /></a></div>';
                        } 
                        ?>
                        <div class="meta">
                            <span class="date"><?php echo get_the_date('j M Y'); ?></span>
                            <a href="<?php the_permalink(); ?>#comments" class="tot-comment"><?php comments_number( 'No Comments', '1 Comment', '% Comments' ); ?> </a>
                        </div>
                        <h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
                        <div class="desc"><?php echo get_the_excerpt(); ?> <?php wp_link_pages(); ?></div>
                    </div>
                <?php endwhile; ?>       
                </div>
                <div class="clearfix"></div>
                <div class="post-pagination">
                    <div class="button-group tabs-control"><?php previous_posts_link();  ?>&nbsp;<?php next_posts_link();  ?></div>
                </div>
                <?php else: ?>
                <p>No posts found.</p>
                <?php endif; ?>
            </div>
            <?php get_sidebar(); ?>
        </div>
    </div>