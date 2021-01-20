<?php

function mp_misc_customizer_section( $wp_customize ){


    $wp_customize->add_setting( 'mp_footer_copyright_text', array(
        'default'       =>  'Copyrights &copy; 2021 All Rights Reserved.',
    ));

    $wp_customize->add_setting( 'mp_footer_tos_page', array(
        'default'       =>  0,
    ));

    $wp_customize->add_setting( 'mp_footer_privacy_page', array(
        'default'       =>  0,
    ));



    $wp_customize->add_section( 'mp_misc_section', [
        'title'         =>  __( 'Marsislav - Portfolio Misc Settings', 'mars' ),
        'priority'      =>  30
    ]);


    $wp_customize->add_control(new WP_Customize_Control(
        $wp_customize,
        'mp_footer_copyright_text',
        array(
            'label'                 =>  __( 'Footer copyright text', 'mars' ),
            'section'               => 'mp_misc_section',
            'settings'              => 'mp_footer_copyright_text',
            'type'                  =>  'text'
        )
    ));



    $wp_customize->add_control(new WP_Customize_Control(
        $wp_customize,
        'mp_footer_tos_page_input',
        array(
            'label'                 =>  __( 'Footer TOS Page', 'mars' ),
            'section'               => 'mp_misc_section',
            'settings'              => 'mp_footer_tos_page',
            'type'                  =>  'dropdown-pages'
        )
    ));

    $wp_customize->add_control(new WP_Customize_Control(
        $wp_customize,
        'mp_footer_privacy_page_input',
        array(
            'label'                 =>  __( 'Footer Privacy Policy Page', 'mars' ),
            'section'               => 'mp_misc_section',
            'settings'              => 'mp_footer_privacy_page',
            'type'                  =>  'dropdown-pages'
        )
    ));




}