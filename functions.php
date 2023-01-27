
<?php
// <!-- custom_maintenancemode is a cutom function, we write custom before to make sure that wordpress does not have the same function name -->
// <!-- current_user_can() is to see if the user can edit post or not for example if the user is logged out he cannot edit any posts -->
// <!-- wp_die kills an execution and displays a message-->
// <!-- biex taqbad function trid tuza hook, for every function -->

// require_once tfisser ifittixa darba u daqsekk, kma jsibiex daqsekk
// din ukoll biex issib l custom files
// 
    require_once('lib/enqueue-assets.php');
    require_once('lib/navigation.php');
    require_once('lib/sidebars.php');
    require_once('lib/customize.php');

// jekk l user mandux access ghal haga, ezempju ma jistax jeditja posts jew jaccessa s site ax mhux logged in, se jider maintenance message
function custom_maintenancemode(){
    if(!current_user_can('edit_posts')){
        wp_die('<h1> Maintenance!</h1><p> Please not that the site is undergoing maintenance</p>');
    }
}
    add_action ('get_header', 'custom_maintenancemode');


?>