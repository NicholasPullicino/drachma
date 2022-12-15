<?php

    function drachma_assets(){

        wp_enqueue_style(
            'drachma',
            get_template_directory_uri().'/assets/css/style.css',
            array(),
            '1.0.0',
            'all'
        );

        

        wp_enqueue_style(
            'drachma-bootstrap-stylesheet',
            get_template_directory_uri().'/assets/css/bootstrap.css',
            array(),
            '1.0.0',
            'all'
        );

        wp_enqueue_script( 
            'drachma-bootstrap-scripts', 
            get_template_directory_uri().'/assets/js/bootstrap.js', 
            array(), 
            '1.0.0', 
            false 
        );

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

    add_action('wp_enqueue_scripts','drachma_assets');
?>