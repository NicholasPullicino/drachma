<div class="col-4">
    <aside>

        <!-- this loop is to check whether the primary sidebar exists or not  -->
        <?php
        if(is_active_sidebar('primary-sidebar')){
            dynamic_sidebar('primary-sidebar');
        }
        else{
            echo '<p>No Sidebars Found</p>';
        }
        ?>
    </aside>
</div>