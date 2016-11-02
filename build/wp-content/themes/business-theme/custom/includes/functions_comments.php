<?php

/* **************************************************************************************************** */
// Enable Threaded Comments
/* **************************************************************************************************** */

add_action('wp_enqueue_scripts', 'nimbus_threaded_comments');

function nimbus_threaded_comments() {
    if (is_singular() && comments_open() && (get_option('thread_comments') == 1)) {
        wp_enqueue_script('comment-reply');
    }
}

/* **************************************************************************************************** */
// Modify Comments Output
/* **************************************************************************************************** */

function nimbus_comment($comment, $args, $depth) {
    $GLOBALS['comment'] = $comment;
    ?>
    <li <?php comment_class(); ?> id="li_comment_<?php comment_ID() ?>">
        <div class="avatar"><?php echo get_avatar($comment, $size = '68'); ?></div>
        <div class="detail">
            <div class="by"><?php comment_author_link(); ?><?php comment_reply_link(array_merge($args, array('reply_text' => __('Leave a Reply', 'nimbus'), 'depth' => $depth, 'max_depth' => $args['max_depth']))) ?></div>
            <div class="create_date"><?php echo(get_comment_date()) ?>   <?php edit_comment_link(__('(Edit)', 'nimbus'), '  ', '') ?></div>
            <div class="text">
                <?php comment_text() ?>
                <?php if ($comment->comment_approved == '0') : ?><em><?php _e('Your comment is awaiting moderation.', 'nimbus') ?></em><?php endif; ?>
            </div>
        </div>
        <div class="clearfix"></div>
        <?php
}
?>