<?php
    //Setup


    //Includes
    include (get_theme_file_path('includes/front/enqueue.php'));
    include (get_theme_file_path('includes/setup.php'));
    include (get_theme_file_path('includes/widgets.php'));
    include (get_theme_file_path('includes/theme-customizer.php'));
    include (get_theme_file_path('includes/customizer/social.php'));
    include (get_theme_file_path('includes/customizer/misc.php'));


    //Hooks
    add_action('wp_enqueue_scripts', 'mp_enqueue');
    add_action('after_setup_theme', 'mp_setup_theme');
    add_action('widgets_init', 'mp_widgets');
    add_action('customize_register', 'mp_customizer_register');

    //Shortcodes