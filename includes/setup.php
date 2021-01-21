<?php
function mp_setup_theme () {
    add_theme_support( 'post-thumbnails');
    add_theme_support( 'title-tag');
    add_theme_support( 'custom-logo');
    add_theme_support( 'automatic-feed-links');
    add_theme_support( 'html5', array ('comment-list', 'comment-form', 'search-form', 'gallery', 'caption'));
    add_theme_support( 'starter-content', [
        'widgets'                   =>  [
            'mp_sidebar'            =>  [
                'text_business_info', 'search', 'text_about',
            ]
        ],

        'attachments'               =>  [
            'image-about'           =>  [
                'post_title'        =>  __( 'About', 'mp' ),
                'file'              =>  'assets/images/no-image.png', 
            ],
        ],

        'posts'                     =>  [
            'home'                  =>  array(
                'thumbnail'         => '{{image-about}}',
            ),
            'about'                 =>  array(
                'thumbnail'         => '{{image-about}}',
            ),
            'contact'               => array(
                'thumbnail'         => '{{image-about}}',
            ),
            'blog'                  => array(
                'thumbnail'         => '{{image-about}}',
            ),
            'homepage-section'      => array(
                'thumbnail'         => '{{image-about}}',
            ),
        ],

        'options'                   =>  [
            'show_on_front'         => 'page',
            'page_on_front'         => '{{home}}',
            'page_for_posts'        => '{{blog}}',
        ],

        'theme_mods'                =>  [
            'ju_facebook_handle'    =>  'mp',
            'ju_twitter_handle'     =>  'mp',
            'ju_instagram_handle'   =>  'mp',
            'ju_email'              =>  'mp',
            'ju_phone_number'       =>  'mp',
        ],

        'nav_menus'                 =>  [
            'primary'               =>  array(
                'name'              =>  __( 'Primary Menu', 'mp' ),
                'items'             =>  array(
                    'link_home', 
                    'page_about',
                    'page_blog',
                    'page_contact',
                ),
            ),
        ],
    ]);

    register_nav_menu( 'primary', __('Primary Menu', 'mp' ));
} 