<?php 

    function drachma_customize_register($wp_customize){
        //adding a section in wp_customize
        $wp_customize->add_section('drachma_footer_options', array(
            'title' => 'Footer Options',
            'description' => 'You can change footer options here'
        ));

        //adding a setting where the client can choose amount of widgets
        $wp_customize->add_setting('drachma_footer_widgets', array(
            'default' => '3',

            //clears the value, just in case someone inputs something strange/not appropriate, for example from inspect
            'sanitize_callback' => 'sanitize_text_field'
        ));

        //gives control to the client, the client can change the value itself
        $wp_customize->add_control('drachma_footer_widgets', array(
            'type' => 'select',
            'label' => 'Number of Widgets',

            //indicates the options in the dropdown menu
            'choices' => array(
                '1' => '1',
                '2' => '2',
                '3' => '3',
                '4' => '4'
            ),

            //control of section
            'section' => 'drachma_footer_options'
        ));



        //a new setting for the colour mode
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