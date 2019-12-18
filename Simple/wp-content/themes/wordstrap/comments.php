<div class="comments">
    <?php if (have_comments()) : ?>
        <h3 class="comments-title">
            <?php
                if (get_comments_number() == 1) {
                    echo get_comments_number().' Comment';
                } else {
                    echo get_comments_number().' Comments';
                }
            ?>
        </h3>

        <ul class="row comment-list">
            <?php
                wp_list_comments(array(
                    'avatar_size' => 90,
                    'callback' => 'add_theme_comments'
                ));
            ?>
        </ul>
    <?php endif; ?>

    <?php if (!comments_open() && '0' != get_comments_number() && post_type_supports(get_post_type(), 'comments')) : ?>
        <p class="no-comments">
            <?php _e('Comments are closed.', 'dazzling'); ?>
        </p>
    <?php endif; ?>

    <hr>

    <?php
        $comments_args = array(
            'label_submit' => 'Send',
            'title_reply' => 'Write a Reply or Comment',
            'comment_notes_after' => '',
            'comment_field' => '<p class="comment-form-comment"><label for="comment">'._x('Comment', 'noun').'</label><br /><textarea class="form-control" id="comment" name="comment"></textarea></p>'
        );

        comment_form($comments_args);
    ?>
</div>
