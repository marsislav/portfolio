<?php
    function mp_social_customizer_section ($wp_customize) {
        $wp_customize->add_setting('mp_facebook_handle', [
            'default'=> ''
        ]);
        $wp_customize->add_setting('mp_twitter_handle', [
            'default'=> ''
        ]);
        $wp_customize->add_setting('mp_instagram_handle', [
            'default'=> ''
        ]);
        $wp_customize->add_setting('mp_linkedin_handle', [
            'default'=> ''
        ]);
        $wp_customize->add_setting('mp_email', [
            'default'=> ''
        ]);
        $wp_customize->add_setting('mp_phone_number', [
            'default'=> ''
        ]);
        $wp_customize->add_section('mp_social_section', [
            'title'=> __('Marsislav Portfolio Social settings', 'mp'),
            'priority'=>30
        ]);
         $wp_customize->add_control(new WP_Customize_Control(
             $wp_customize,
             'mp_social_facebook_input',
             array (
                'label' => __('Facebook Handle', 'mp'),
                'section' => 'mp_social_section',
                'settings' =>'mp_facebook_handle',
                'type'=>'text'
             )
             ));

             $wp_customize->add_control(new WP_Customize_Control(
                $wp_customize,
                'mp_social_twitter_input',
                array (
                   'label' => __('Twitter Handle', 'mp'),
                   'section' => 'mp_social_section',
                   'settings' =>'mp_twitter_handle',
                   'type'=>'text'
                )
                ));

                $wp_customize->add_control(new WP_Customize_Control(
                    $wp_customize,
                    'mp_social_instagram_input',
                    array (
                       'label' => __('Instagram Handle', 'mp'),
                       'section' => 'mp_social_section',
                       'settings' =>'mp_instagram_handle',
                       'type'=>'text'
                    )
                    ));

                    $wp_customize->add_control(new WP_Customize_Control(
                        $wp_customize,
                        'mp_social_linkedin_input',
                        array (
                           'label' => __('LinkedIn Handle', 'mp'),
                           'section' => 'mp_social_section',
                           'settings' =>'mp_linkedin_handle',
                           'type'=>'text'
                        )
                        ));


                        $wp_customize->add_control(new WP_Customize_Control(
                            $wp_customize,
                            'mp_email',
                            array (
                               'label' => __('Email Handle', 'mp'),
                               'section' => 'mp_social_section',
                               'settings' =>'mp_email',
                               'type'=>'text'
                            )
                            ));

                            $wp_customize->add_control(new WP_Customize_Control(
                                $wp_customize,
                                'mp_phone_number',
                                array (
                                   'label' => __('Phone Number Handle', 'mp'),
                                   'section' => 'mp_social_section',
                                   'settings' =>'mp_phone_number',
                                   'type'=>'text'
                                )
                                ));


    }