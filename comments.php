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

    <div class="comment-area">
    <label>' . __( 'Comment:', 'mp' ) . '</label>
        <textarea name="comment" rows="7" class="sm-form-control"></textarea>
    </div>',
    'fields'                =>  [
        'author'            =>  
            '<div class="comment-author-field">
                <label>' . __( 'Name:', 'mp' ) . '</label>
                <input type="text" name="author" class="sm-form-control" />
            </div>',
        'email'             =>  
            '<div class="comment-email-field">
                <label>' . __( 'Email:', 'mp' ) . '</label>
                <input type="text" name="email" class="sm-form-control" />
            </div>',
        'url'               =>  
            '<div class="comment-url-field">
                <label>' . __( 'Website:', 'mp' ) . '</label>
                <input type="text" name="url" class="sm-form-control" />
            </div>'
    ],
    'class_submit'          =>  'mainButton margin-top',
    'label_submit'          =>  __( 'Submit Comment', 'mp' ),
    'title_reply'           =>  __( 'Leave a <span>Comment</span>', 'mp' )
]);

?>
</div> 