<?php 

    require_once('lib/enqueue-assets.php');

    function drachma_maintenancemode(){
        if (!current_user_can('edit_posts')){
            wp_die('<h1>Maintenance!</h1>
            <p>Please note that the site is currently
            down for maintenance</p>');
        }
    }

    add_action('get_header','drachma_maintenancemode');
?>