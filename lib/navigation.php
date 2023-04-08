
<?php
//this is our custom menu

//this functions registers the menus
function drachmaWebsite_register_menus(){
        register_nav_menus(array(
            'main-menu' => 'Main Menu',
            'footer-menu' => 'Footer Menu'
        ));
    }

    //hook
    add_action('init', 'drachmaWebsite_register_menus');

?>