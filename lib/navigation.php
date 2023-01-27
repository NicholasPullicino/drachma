
<?php
// <!-- din amilna custom menu ghax wordpress itik menu by default (hassarnieh minn wordpress site stess) - navigation menu, ajjatnielu fil header.php, u nistew najjtulu fil footer.php al menu tal footer -->

// this function register the menus, all the functions have to be na,es with custom at the beginning, have a hook and tajjtila fil functions.php halli wordpress jfittixa
    function custom_register_menus(){
        register_nav_menus(array(
            'main-menu' => 'Main Menu',
            'footer-menu' => 'Footer Menu'
        ));
    }

    //this is the hook biex taqbad l function - trid tamila ma kull function
    add_action('init', 'custom_register_menus');

?>