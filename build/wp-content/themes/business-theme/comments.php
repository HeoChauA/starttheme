<?php
if (comments_open()) {
?>
<div class="comment-block2">
<a name="comments" id="comments"></a>
<?php
if (have_comments()) {
    $comments_by_type = separate_comments($comments);
    if (!empty($comments_by_type['comment'])) {
?>
    <div class="comment-head2"><h3>Comments</h3></div>
        <ul class="comment-list2">
        <?php wp_list_comments(array('type' => 'comment', 'callback' => 'nimbus_comment', 'avatar_size' => 75, 'reply_text' => __('Reply', 'nimbus'))); ?>
        </ul>
        <p><?php paginate_comments_links() ?></p>
<?php } 
}
?>

<?php
$commenter = wp_get_current_commenter();
$req = get_option('require_name_email');
if($req)    $star = "*";
$fields = array(
    'author'    => '<div class="field"><input id="author" name="author" type="text" placeholder="Your Name'.$star.'" class="inputText" value="'.esc_attr($commenter['comment_author']).'" /></div>',
    'email'     => '<div class="field"><input id="email" name="email" type="text" placeholder="Email'.$star.'" class="inputText" value="' . esc_attr($commenter['comment_author_email']) . '" /></div>',
    'url'       => '<div class="field"><input id="url" name="url" type="text" placeholder="Website" class="inputText" value="' . esc_attr($commenter['comment_author_url']) . '"  /></div>'
);

$modified_defaults = array(
    'fields'            => apply_filters('comment_form_default_fields', $fields),
    
    'comment_field'     => '<div class="field"><textarea id="comment" name="comment" rows="3" cols="100" placeholder="Your comment here" class="areaText"></textarea></div>',
    
    'must_log_in'       => '<p class="must-log-in">' . sprintf(__('You must be <a href="%s">logged in</a> to post a comment.'), wp_login_url(apply_filters('the_permalink', get_permalink()))) . '</p>',
    
    'logged_in_as'      => '<p class="logged-in-as">' . sprintf(__('Logged in as <a href="%1$s">%2$s</a>. <a href="%3$s" title="Log out of this account">Log out?</a>'), admin_url('profile.php'), $user_identity, wp_logout_url(apply_filters('the_permalink', get_permalink()))) . '</p>',
    
    'comment_notes_before'  => '',
    
    'comment_notes_after'   => '',
    
    'id_form'           => 'comment-form',
    
    'id_submit'         => 'comment-submit',
    
    'title_reply'       => 'Leave a Reply',
    
    'title_reply_to'    => 'Leave a Reply to %s',
    
    'cancel_reply_link' => ' >> Or Cancel reply',

    'label_submit'      => 'Submit',

);
?>

<?php comment_form($modified_defaults); ?>
</div>
<?php } ?>
