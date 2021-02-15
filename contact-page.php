<?php
/**
* Template Name: Contact Page
**/
?>

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
                                            
                                            ?>
                                            <?php if (get_theme_mod ('mp_email_address') ) {
                                                get_template_part( 'partials/contact-form');
                                            } ?>
                                    </div>
                                    
                            <?php }
                    ?>
                </div>
            </div>
        </main>
<?php get_footer (); ?>
        