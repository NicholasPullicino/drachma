
<?php
    //Widgets
    function drachmaWebsite_sidebar_widgets(){
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
            'description' => 'Sidebar for Advertisement Websites',
            'before_widget' => '<section id="%1$s" class="sidebar-widget %2$s">',
            'after_widget' => '</section>',
            'before_title' => '<h5>',
            'after_title' => '</h5>'
        ));


        //amount of widgets the user can choose from wordpress website in customize
        $footer_widget_count = get_theme_mod("drachmaWebsite_footer_widgets", "3");

        //loop with counter - the amount of widgets are created depending on the user's input
        for ($i = 0; $i < $footer_widget_count; $i++){

            register_sidebar(array(
                'id' => 'footer-sidebar-'.($i+1),
                'name' => 'Footer Info Section '.($i+1),
                'description' => 'Information sections within the footer',
                'before_widget' => '<section id="%1$s" class="footer-widget %2$s">',
                'after_widget' => '</section>',
                'before_title' => '<h5>',
                'after_title' => '</h5>'
            ));
        }

    }

    //hook
    add_action('widgets_init', 'drachmaWebsite_sidebar_widgets');
?>