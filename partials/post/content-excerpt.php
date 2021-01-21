<div class="entry-post">
    <div class="row">
        <div class="one-third column">
            <?php if (has_post_thumbnail() ) { ?>
                <div class="entry-image">
                    <a href="<?php the_permalink ();?>">
                        <?php the_post_thumbnail ('full', ['class'=>'image_effect']); ?>
                    </a>
                </div>
                <?php } 
                    else {?>
                        <div class="entry-image">
                            <a href="<?php the_permalink ();?>">
                                <img src="<?php echo get_template_directory_uri();?>/img/no-image.png" />
                            </a>
                        </div>
                   <?php  }
                ?>
        </div>
        <div class="two-thirds column">
            <div class="entry-title">
                <h2>
                    <a href="<?php the_permalink ();?>">
                        <?php the_title(); ?>
                    </a>
                </h2>
            </div>
            <ul class="entry-meta clearfix"> 
                <li><i><i class="fas fa-calendar-alt"></i></i><?php echo get_the_date(); ?> </li>
                <li><a href="<?php echo get_comments_link( $post->ID ); ?>"><i><i class="fas fa-comments"></i></i><?php comments_number ('0'); ?> </a> </li>        
                <li><a href="<?php echo get_author_posts_url(get_the_author_meta('ID'));?>"><i class="fas fa-user-alt"></i> <?php the_author();  ?></a></li>
                    <li><i><i class="fas fa-folder-open"></i></i> <?php the_category(' ');?></li>
                    
            </ul>
            <div class="entry-content">
                    <?php the_excerpt(); ?>
                    <a href="<?php the_permalink (); ?>" class="mainButton read-more"><?php _e('Read more', 'mp');?></a>
            </div>
        </div>
    </div>
</div>

