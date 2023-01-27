<?php

    function drachma_customize_register($wp_customize)
    {
            // HEADER
            //adding a section in wp_customize
            $wp_customize->add_section('drachma_header_options', array(
                'title' => 'Header Options',
                'description' => 'You can change header options here'
        ));

        $wp_customize->add_setting('drachma_header_bg', array(
            'default' => 'dark',
            'sanitize_callback' => 'sanitize_text_field'
        ));

        $wp_customize->add_control('drachma_header_bg', array(
            'type' => 'select',
            'label' => 'Background Colour',
            'choices' => array(
                'light' => 'Light',
                'dark' => 'Dark',
            ),

            'section' => 'drachma_header_options'
        )); 



        //FOOTER
        $wp_customize->add_section('drachma_footer_options', array(
            'title' => 'Footer Options',
            'description' => 'You can change footer options here'
    ));

    ///a new setting for the colour mode
    $wp_customize->add_setting('drachma_footer_bg', array(
        'default' => 'dark',
        //clears the value, just in case someone inputs something strange/not appropriate, for example from inspect
        'sanitize_callback' => 'sanitize_text_field'
    ));

    //gives control to the client, the client can change the value itself
    $wp_customize->add_control('drachma_footer_bg', array(
        'type' => 'select',
        'label' => 'Background Colour',
        //indicates the options in the dropdown menu
        'choices' => array(
            'light' => 'Light',
            'dark' => 'Dark',
        ),

        //control of section
        'section' => 'drachma_footer_options'
    )); 



//adding a setting where the client can choose amount of widgets
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




}

    add_action('customize_register', 'drachma_customize_register');
?>