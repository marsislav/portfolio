<?php

function mp_customize_preview_init(){
    wp_enqueue_script(
        'mp_theme_customizer',
        get_theme_file_uri( '/js/theme-customize.js' ),
        [ 'jquery', 'customize-preview' ],
        false,
        true 
    );
}