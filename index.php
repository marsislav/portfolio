<?php get_header (); ?>
        <main>
        <?php get_template_part( 'partials/post/sidebar-expandable'); ?>
            <div class="container">
                <div class="posts">
                    <?php 
                        if (have_posts()) {
                            while (have_posts()){
                                the_post();
                                get_template_part( 'partials/post/content-excerpt');
                            }
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
        