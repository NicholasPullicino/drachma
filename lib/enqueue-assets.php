

<?php
    //created a function called drachmaWebsite_assets and created wp_enqueue_style to enqueue a style sheet in it 
    function drachmaWebsite_assets(){
        wp_enqueue_style(
            //a unique name that will be displayed in html
            'drachmaWebsite-stylesheet', 

            //fetches the active template's rootfolder
            get_template_directory_uri().'/assets/css/drachmaWebsite_style.css',
            array(),

            //version - can be overridden here
            '1.0.2',

            //this stylesheet will be used in all media modes (printing, digital, and more)
            'all'
        );

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

        //decleration of CSS File
        wp_enqueue_style(
            'drachmaWebsite-bootstrap-stylesheet',
            get_template_directory_uri(). '/assets/css/bootstrap.css',
            array(),
            '1.0.0',
            'all'
        );

        //decleration of JS File
        wp_enqueue_script(
            'drachmaWebsite-bootstrap-scripts',
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
    add_action('wp_enqueue_scripts', 'drachmaWebsite_assets');
?>