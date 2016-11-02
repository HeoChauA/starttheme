<?php get_header(); ?>
<?php $show_sidebar = get_post_meta(get_the_ID(),'show_sidebar',TRUE); ?>
<?php get_template_part('parts/post', 'title'); ?>
<section class="white-bg">
    <div class="container">
        <div class="row">
            <?php if($show_sidebar == 'yes') { ?>
            <div class="col-md-9">
            <?php } else { ?>
            <div class="col-md-12">
            <?php } ?>
                <div id="post-<?php the_ID(); ?>" <?php post_class('post-details'); ?>>
                    <?php get_template_part('parts/post', 'image'); ?>
                    <?php if (has_post_thumbnail()) { ?>
                    <?php get_template_part('parts/post', 'meta'); ?>
                    <?php } ?>
                    <div class="desc"><?php the_content(); ?></div>
                    <?php if (!has_post_thumbnail()) { ?>
                    <?php get_template_part('parts/post', 'meta'); ?>
                    <?php } ?>
                    <?php $nimbus_post_meta_blog = nimbus_get_option('nimbus_post_meta_blog'); ?>
                    <?php if (has_tag() && $nimbus_post_meta_blog['tags'] == 1) { ?>
                    <div class="meta-tags"><?php the_tags('Tags: '); ?></div>
                    <?php } ?>
                </div>
                <?php comments_template(); ?>
            </div>
            <?php if($show_sidebar == 'yes') { ?>
            <?php get_sidebar(); ?>
            <?php } ?>
        </div>
    </div>
</section>
<?php get_footer(); ?>