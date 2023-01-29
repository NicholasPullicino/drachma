<!-- another version of sidebar.php -->

<div class="col-4" style="background-color:red;">
    <aside>

        <!-- this loop is to check whether the primary sidebar exists or not  -->
        <?php
        if(is_active_sidebar('ad-sidebar')){
            dynamic_sidebar('ad-sidebar');
        }
        else{
            echo '<p>No Sidebars Found</p>';
        }
        ?>
    </aside>
</div>