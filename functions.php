<?php 

    //for wordpress to find custom files - require_once to search only once
    require_once('lib/enqueue-assets.php');
    require_once('lib/navigation.php');
    require_once('lib/sidebars.php');
    require_once('lib/customize.php');

    //maintenance message - if the user does not access for a page, or is not logged in, this message is displayed
    function drachma_maintenancemode(){
        if (!current_user_can('edit_posts')){
            wp_die('<h1>Maintenance!</h1>
            <p>Please note that the site is currently
            down for maintenance</p>');
        }
    }

    add_action('get_header','drachma_maintenancemode');
?>