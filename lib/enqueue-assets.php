

<?php
// <!-- Hloqna function custom_assets u hloqna function ohra fija jisima wp_enqueue_style to enqueue a style sheet in it -->
    function custom_assets(){
        wp_enqueue_style(
            // this is a unique name li se jider fl html
            'custom-stylesheet', 

            // iggib r rootfolder tal active template taghna
            get_template_directory_uri().'/assets/css/custom_style.css',
            array(),

            // You can override the version by changing this
            '1.0.2',

            // this stylesheet will be used in all medai modes (printing, digital, more)
            'all'
        );

        // dan id decleration tas css file tal light mode theme for the header
        wp_enqueue_style(

            'head-stylesheet', 
            get_template_directory_uri().'/assets/css/light-mode.css',
            array(),

            '1.0.3',

            'all'
        );


        wp_enqueue_style(

            'foot-stylesheet', 
            get_template_directory_uri().'/assets/css/dark-mode.css',
            array(),

            '1.0.3',

            'all'
        );

        // to link bootstrap.css 
        wp_enqueue_style(
            'custom-bootstrap-stylesheet',
            get_template_directory_uri(). '/assets/css/bootstrap.css',
            array(),
            '1.0.0',
            'all'
        );

        // to link bootstrap.js
        wp_enqueue_script(
            'custom-bootstrap-scripts',
            get_template_directory_uri().'/assets/js/bootstrap.js',
            array(),
            '1.0.0',
            false
        );

        // this line is to add jquery
        wp_enqueue_script('jquery');

    }

    // add_action means to add an action to something
    // below is the hook
    add_action('wp_enqueue_scripts', 'custom_assets');
?>