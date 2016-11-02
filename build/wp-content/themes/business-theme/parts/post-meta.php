<?php $nimbus_post_meta_blog = nimbus_get_option('nimbus_post_meta_blog'); ?>
<div class="meta-post" id="post-meta-<?php the_ID(); ?>">
    <span><?php the_date(get_option( 'date_format' )); ?></span>
    <?php if($nimbus_post_meta_blog['categories'] == 1) { ?><span>In: <?php the_category(', '); ?></span><?php } ?>
    <span><a href="#comments">Comments (<?php comments_number( 'None', '1', '%' ); ?>)</a></span>
</div>