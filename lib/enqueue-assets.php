<?php

    //created a function called custom_assets and created wp_enqueue_style to enqueue a style sheet in it 
    function drachma_assets(){

        wp_enqueue_style(

            //a unique name that will be displayed in html
            'drachma',

            //fetches the active template's rootfolder
            get_template_directory_uri().'/assets/css/style.css',
            array(),

            //version - can be overridden here
            '1.0.0',

            //this stylesheet will be used in all media modes (printing, digital, and more)
            'all'
        );

        
        //decleration of CSS File
        wp_enqueue_style(
            'drachma-bootstrap-stylesheet',
            get_template_directory_uri().'/assets/css/bootstrap.css',
            array(),
            '1.0.0',
            'all'
        );

        //decleration of JS File
        wp_enqueue_script( 
            'drachma-bootstrap-scripts', 
            get_template_directory_uri().'/assets/js/bootstrap.js', 
            array(), 
            '1.0.0', 
            false 
        );

        //this line is to add jquery
        wp_enqueue_script('jquery');

        $footer_bg = get_theme_mod('drachma_footer_bg', 'light');
        $cssFile = $footer_bg.'.css';
        wp_enqueue_style(
            'drachma',
            get_template_directory_uri().'/assets/css/'.$cssFile,
            array(),
            '1.0.0',
            'all'
        );
    }

    //this line is the hook
    add_action('wp_enqueue_scripts','drachma_assets');
?>