<?php

    function drachma_sidebar_widgets(){
        register_sidebar(array(
            'id' => 'primary-sidebar',
            'name' => 'Primary Sidebar',
            'description' => 'Sidebar for blog posts page',
            'before_widget' => '<section id="%1$s" class="sidebar-widget %2$s">',
            'after_widget' => '</section>',
            'before_title' => '<h5>',
            'after_title' => '</h5>'
        ));

        register_sidebar(array(
            'id' => 'ad-sidebar',
            'name' => 'Advert Sidebar',
            'description' => 'Sidebar for advertisments in website',
            'before_widget' => '<section id="%1$s" class="sidebar-widget %2$s">',
            'after_widget' => '</section>',
            'before_title' => '<h5>',
            'after_title' => '</h5>'
        ));

        $footer_widget_count = get_theme_mod("drachma_footer_widgets", "3");

        for ($i = 0; $i < $footer_widget_count; $i++){
            register_sidebar(array(
                'id' => 'footer-sidebar-'.($i+1),
                'name' => 'Footer Into Section '.($i+1),
                'description' => 'Information sections within the footer',
                'before_widget' => '<section id="%1$s" class="footer-widget %2$s">',
                'after_widget' => '</section>',
                'before_title' => '<h5>',
                'after_title' => '</h5>'
            ));
        }

    }

    add_action('widgets_init', 'drachma_sidebar_widgets');
?>