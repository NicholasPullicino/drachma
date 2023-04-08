
<?php
// <!-- drachmaWebsite_maintenancemode is a cutom function, we write custom before to make sure that wordpress does not have the same function name -->
// <!-- current_user_can() is to see if the user can edit post or not for example if the user is logged out he cannot edit any posts -->
// <!-- wp_die kills an execution and displays a message-->

    //for wordpress to find custom files - require_once to search only once
    require_once('lib/enqueue-assets.php');
    require_once('lib/navigation.php');
    require_once('lib/sidebars.php');
    require_once('lib/customize.php');

    //maintenance message - if the user does not access for a page, or is not logged in, this message is displayed
    function drachmaWebsite_maintenancemode(){
    if(!current_user_can('edit_posts')){
        wp_die('<h1> Maintenance!</h1><p> Please not that the site is undergoing maintenance</p>');
    }
}
    add_action ('get_header', 'drachmaWebsite_maintenancemode');


?>