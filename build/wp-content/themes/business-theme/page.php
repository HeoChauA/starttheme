<?php get_header(); ?>
<?php $show_sidebar = get_post_meta(get_the_ID(),'show_sidebar',TRUE); ?>
<?php get_template_part('parts/page', 'title'); ?>
<section class="white-bg" id="page-<?php the_ID(); ?>">
    <div class="container">
        <div class="row">
            <?php if($show_sidebar == 'yes') { ?>
            <div class="col-md-9">
            <?php } else { ?>
            <div class="col-md-12">
            <?php } ?>
                <?php the_content(); ?>
                <?php comments_template(); ?>
            </div>
            <?php if($show_sidebar == 'yes') { ?>
            <?php get_sidebar(); ?>
            <?php } ?>
        </div>
    </div>
</section>
<?php get_footer(); ?>