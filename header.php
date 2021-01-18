<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php wp_head(); ?>
    <title>Document</title>
</head>
<body <?php body_class(); ?>>
        <header>
        <div class="container">
            <div class="logo">
                <?php if (has_custom_logo()) {
                    the_custom_logo();
                }
                else {?>
                <a href="<?php echo home_url('/') ?>" class="standard-logo">
                    <div class="logo-container">
                        <h1><?php bloginfo('name');?></h1>
                        <p><?php bloginfo('description');?></p>
                       
                    </div>
                </a>

                
                <?php } ?>
            </div>
            <nav>
            <?php
            if (has_nav_menu ('primary')) {
                wp_nav_menu( array(
                    'theme_location' => 'primary',
                    'container_class'=>'menuDots',
                    'link_before'=>'<span>',
                    'link_after'=>'</span>',

                    'after'=>'<i></i>',
                    'depth'=> 4
                ) );
            }
            else {
                echo __('Main navigation goes here!', 'mars');
            }
    ?>
            </nav>
        </div>
        </header>