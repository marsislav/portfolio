<?php
    function mp_enqueue () {
        $uri=get_theme_file_uri();
        
        wp_register_style('mp_google_fonts', 'https://fonts.googleapis.com/css2?family=Roboto+Condensed:wght@400;700&display=swap'); 
        wp_register_style('mp_main_stylesheet', $uri.'/assets/css/main.css');
        wp_register_style('mp_skeleton_stylesheet', $uri.'/assets/css/skeleton.css');
        wp_register_style('mp_fontawesome',$uri.'/assets/css/fontawesome.min.css');
        
        wp_enqueue_style('mp_fontawesome');
        wp_enqueue_style('mp_google_fonts');
        wp_enqueue_style('mp_main_stylesheet');
        wp_enqueue_style('mp_skeleton_stylesheet');

        wp_register_script('mp_mainjs', $uri.'/assets/js/main.js', [], false, true );
        wp_enqueue_script('jquery');
        wp_enqueue_script('mp_mainjs');
    }