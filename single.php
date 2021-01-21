<?php get_header (); ?>
        <main>
        <?php get_template_part( 'partials/post/sidebar-expandable'); ?>
            <div class="container">
                <div <?php post_class('posts');?> id="post-<?php the_ID(); ?>">
                    <?php 
                        if (have_posts()) {
                            while (have_posts()){
                                the_post();
                                global $post;
                                $author_ID = $post->post_author;
                                $author_URL = get_author_posts_url( $author_ID);
                                ?>
                                    <div class="entry-title">
                                        <h2><?php the_title(); ?></h2>
                                    </div>
                                    <?php if (has_post_thumbnail() ) { ?>
                                        <div class="entry-image">
                                            <?php the_post_thumbnail ('full'); ?>
                                        </div>
                                    <?php } ?> 
                                    <ul class="entry-meta clearfix">
                                        <li><i><i class="fas fa-calendar-alt"></i></i><?php echo get_the_date(); ?> </li>
                                        <li><a href=""><i><i class="fas fa-comments"></i></i><?php comments_number ('0'); ?> </a> </li>
                                        <li><a href="<?php echo $author_URL;?>"><i class="fas fa-user-alt"></i> <?php the_author();  ?></a></li>
                                        <li><i><i class="fas fa-folder-open"></i></i> <?php the_category(' ');?></li>
                                    </ul>
                                    <div class="entry-content">
                                            <?php 
                                            the_content();
                                            $defaults = array(
                                                'before'           => '<p class="text-center">' . __( 'Pages:', 'mp' ),
                                                'after'            => '</p>'

                                            );
                                         
                                            wp_link_pages ($defaults);
                                            ?>
                                    </div>
                                    <div class="author-info">
                                        <p><?php _e('Posted by: ', 'mp');?> <a href="<?php echo $author_URL; ?>"> <?php the_author() ;?></a> </p>
                                        <div class="author-bio">
                                            <div class="author-image"><?php echo get_avatar($author_ID, 90, '', false, ['class'=>'avatar-img-class'] ); ?></div>
                                            <div class="author-resume"><?php echo nl2br (get_the_author_meta('description'));?></div>
                                        </div>
                                    </div>
                                    <div class="related-posts">
                                        <?php
                                            $categories= get_the_category();
                                            $rp_query=new WP_Query([
                                                'posts_per_page'=>2,
                                                'post__not_in' => [$post->ID],
                                                'cat'=>!empty($categories) ? $categories[0]->term_id : null

                                            ]);
                                            if ($rp_query->have_posts()) {
                                                _e('<p>Related posts:</p>', 'mp');
                                                while ($rp_query->have_posts()) {
                                                    $rp_query->the_post(); ?>
                                                    <div class="rp">
                                                        <div class="rp-title">
                                                            <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                                                        </div>
                                                        <div class="rp-date">
                                                            <?php echo ", " . get_the_date(); ?>
                                                        </div>
                                                    </div>
 
                                                <?php 
                                                }
                                                wp_reset_postdata();
                                            }
                                        ?>
                                    </div>
                                    <?php if (comments_open() || get_comments_number() ) { ?>
                                        <div class="comments-form">
                                            <?php comments_template();?>
                                        </div>
                                    <?php } 
                                    if (has_tag()) {
                                    ?>

                                    <div class="tags">
                                        <?php the_tags('', ' ');?>
                                    </div>
                                     <?php } ?>
                                    <div class="posts-navigation">
                                        <div class="previous-post"><?php previous_post_link();?></div>
                                        <div class="next-post"><?php next_post_link();?></div>
                                    </div>
                            <?php }
                        }
                    ?>
                </div>
            </div>
            <div class="pagination">
                <div class="next"><?php next_posts_link('<i class="fas fa-chevron-left"></i>');?></div>   
                <div class="prev"><?php previous_posts_link('<i class="fas fa-chevron-right"></i>');?></div> 
            </div>
        </main>
<?php get_footer (); ?>
        