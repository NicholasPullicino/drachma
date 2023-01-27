
<?php
// <!-- this file is for widgets, itig tidher fil wordpress -->
    function custom_sidebar_widgets(){
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


        //din habba lammount a widgets ta kemm jista jazel l user fil customize
        $footer_widget_count = get_theme_mod("custom_footer_widgets", "3");

        //dan for loop with counter biex jekk l user jazel to use 2 widgets only instead for 3, neholqu 3 biss
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


    add_action('widgets_init', 'custom_sidebar_widgets');
?>