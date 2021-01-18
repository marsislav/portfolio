<?php
if (post_password_required ()) {
    return;
}
?>
<?php if (have_comments()) { ?>
<div class="active-comments">
    <ol class="comments-list">
        <?php foreach ($comments as $comment ) { ?>
            <li class="single-comment">
                <span class="avatar"><?php echo  get_avatar($comment, 60 , '', '', ['class'=>'user-avatar-img']); ?></span>
                <div class="comment-author">
                    <?php comment_author();?>
                    <span class="comment-date">, <?php comment_date(); ?></span>
                    <div class="comment-text">
                        <?php comment_text();?>
                    </div>
                </div>
            </li>
        <?php } 
        the_comments_pagination(); 
    }
        ?>
    </ol>
</div>
<div class="comment-form">
<?php

comment_form([
    'comment_field'         =>  '<div class="comment-form-field"></div>

    <div class="col_full">
        <label>Comment</label>
        <textarea name="comment" cols="58" rows="7" class="sm-form-control"></textarea>
    </div>',
    'fields'                =>  [
        'author'            =>  
            '<div class="comment-author-field">
                <label>' . __( 'Name', 'mars' ) . '</label>
                <input type="text" name="author" class="sm-form-control" />
            </div>',
        'email'             =>  
            '<div class="comment-email-field">
                <label>' . __( 'Email', 'mars' ) . '</label>
                <input type="text" name="email" class="sm-form-control" />
            </div>',
        'url'               =>  
            '<div class="comment-url-field">
                <label>' . __( 'Website', 'mars' ) . '</label>
                <input type="text" name="url" class="sm-form-control" />
            </div>'
    ],
    'class_submit'          =>  'submit-comment-btn',
    'label_submit'          =>  __( 'Submit Comment', 'mars' ),
    'title_reply'           =>  __( 'Leave a <span>Comment</span>', 'mars' )
]);

?>
</div> 