<?php get_header (); ?>
        <main>
        <?php get_template_part( 'partials/post/sidebar-expandable'); ?>
            <div class="container">
                <div class="posts">
                    <div class="entry-title">
                        <h2><?php _e('Search results for: ', 'mp'); the_search_query(); ?></h2>
                    </div>
                    <?php 
                        if (have_posts()) {
                            while (have_posts()){
                                the_post();
                                get_template_part( 'partials/post/content-excerpt');
                            }
                        }
                    ?>

                <div class="wide-search margin-top">
                    <?php get_search_form (); ?>
                </div>
                </div>
            </div>
            <div class="pagination">
            <div class="next"><?php next_posts_link('<i class="fas fa-chevron-left"></i>');?></div>   
                <div class="prev"><?php previous_posts_link('<i class="fas fa-chevron-right"></i>');?></div> 
            </div>
        </main>
<?php get_footer (); ?>
        