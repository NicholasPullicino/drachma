<?php

    function custom_customize_register($wp_customize)
    {
            // HEADER
            $wp_customize->add_section('custom_header_options', array(
                'title' => 'Header Options',
                'description' => 'You can change header options here'
        ));

        $wp_customize->add_setting('custom_header_bg', array(
            'default' => 'dark',
            'sanitize_callback' => 'sanitize_text_field'
        ));

        $wp_customize->add_control('custom_header_bg', array(
            'type' => 'select',
            'label' => 'Background Colour',
            'choices' => array(
                'light' => 'Light',
                'dark' => 'Dark',
            ),

            'section' => 'custom_header_options'
        )); 



        //FOOTER
        // dan il wp customize se nzidulu r risultat ta add_section
        $wp_customize->add_section('custom_footer_options', array(
            'title' => 'Footer Options',
            'description' => 'You can change footer options here'
    ));

    // se namlu setting fejn l user jista jazel xtip ta background se jkollu
    $wp_customize->add_setting('custom_footer_bg', array(
        'default' => 'dark',
        //din jekk for some reason l user prova jfotti (dahhal xi haga stramba mill inspect), din se tnaddaf l value
        'sanitize_callback' => 'sanitize_text_field'
    ));

    // din biex l user ikun jista ibiddel l value - gives cnotrol to the user
    $wp_customize->add_control('custom_footer_bg', array(
        'type' => 'select',
        'label' => 'Background Colour',
        // din tindika xinuma loptions li se jkollna fid dropdown list li jsita jazel l user
        'choices' => array(
            'light' => 'Light',
            'dark' => 'Dark',
        ),

        // din tefa l control li amilna fis section
        'section' => 'custom_footer_options'
    )); 



//biex l user jazel kemm n number of widgets jist ajkellu fil footer from 1 to 4
    $wp_customize->add_setting('custom_footer_widgets', array(
        'default' => '3',
        'sanitize_callback' => 'sanitize_text_field'
    ));

    $wp_customize->add_control('custom_footer_widgets', array(
        'type' => 'select',
        'label' => 'Number of Widgets',
        'choices' => array(
            '1' => '1',
            '2' => '2',
            '3' => '3',
            '4' => '4'
        ),

        'section' => 'custom_footer_options'
    )); 




}

    add_action('customize_register', 'custom_customize_register');
?>