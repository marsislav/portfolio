<?php get_header (); ?>
        <main>
            <div class="container">
                <div class="posts">
                    <?php 
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
                                    
                                    
                                    <?php if (comments_open() || get_comments_number() ) { ?>
                                        <div class="comments-form">
                                            <?php comments_template();?>
                                        </div>
                                    <?php } ?>
                            <?php }
                    ?>
                </div>
            </div>
            <div class="pagination">
                <div class="next"><?php next_posts_link('<i class="fas fa-chevron-left"></i>');?></div>   
                <div class="prev"><?php previous_posts_link('<i class="fas fa-chevron-right"></i>');?></div> 
            </div>
        </main>
<?php get_footer (); ?>
        