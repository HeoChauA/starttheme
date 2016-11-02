<?php if (has_post_thumbnail()) { ?>
    <div class="featured-img-wrap">
        <div class="featured-img" id="post-image-<?php the_ID(); ?>">
            <?php the_post_thumbnail('', array('class' => 'img-responsive')); ?>
        </div>   
    </div>
<?php } ?>