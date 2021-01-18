<?php get_header (); ?>
        <main>
            <div class="container">
            <div class="archive">
                <h2><?php the_archive_title (); ?></h2>
                <span>
                    <?php 
                        if (is_year()) {
                            _e('You are vieweing a year archive', 'mars');
                        }
                        else if (is_month()) {
                            _e('You are vieweing a month archive', 'mars');
                        }
                        else if (is_day()) {
                            _e('You are vieweing a day archive', 'mars');
                        }
                    ?>
                </span>
            </div>
                <div class="posts">
                    <?php 
                        if (have_posts()) {
                            while (have_posts()){
                                the_post();
                                get_template_part( 'partials/post/category-loop');
                            }
                        }
                    ?>
                </div>
            </div>
            <?php get_sidebar();?>
            <div class="pagination">
            <div class="next"><?php next_posts_link('<i class="fas fa-chevron-left"></i>');?></div>   
                <div class="prev"><?php previous_posts_link('<i class="fas fa-chevron-right"></i>');?></div> 
            </div>
        </main>
<?php get_footer (); ?>
        