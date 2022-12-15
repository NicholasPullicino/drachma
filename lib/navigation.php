<?php 

function custom_register_menu(){
    register_nav_menus(array(
        'main-menu' => 'Main Menu',
        'footer-menu' => 'Footer Menu'
    ));
}

add_action('init', 'custom_register_menu');

?>