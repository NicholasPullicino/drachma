<?php 

    function drachma_customize_register($wp_customize){
        $wp_customize->add_section('drachma_footer_options', array(
            'title' => 'Footer Options',
            'description' => 'You can change footer options here'
        ));

        $wp_customize->add_setting('drachma_footer_widgets', array(
            'default' => '3',
            'sanitize_callback' => 'sanitize_text_field'
        ));

        $wp_customize->add_control('drachma_footer_widgets', array(
            'type' => 'select',
            'label' => 'Number of Widgets',
            'choices' => array(
                '1' => '1',
                '2' => '2',
                '3' => '3',
                '4' => '4'
            ),
            'section' => 'drachma_footer_options'
        ));

        $wp_customize->add_setting('drachma_footer_bg', array(
            'default' => 'black',
            'sanitize_callback' => 'sanitize_text_field'
        ));

        $wp_customize->add_control('drachma_footer_bg', array(
            'type' => 'select',
            'label' => 'Background Colour',
            'choices' => array(
                'light' => 'Light',
                'dark' => 'Dark',
                'black' => 'Black'
            ),
            'section' => 'drachma_footer_options'
        ));
    }

    add_action('customize_register', 'drachma_customize_register');

?>