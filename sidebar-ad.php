<!-- another version of sidebar.php -->

<div class="col-4" style="background-color:red;">
    <!-- aside bex l browser ikun jaf li din at the side placed -->
    <aside>

        <!-- din l function biex tara primary sidebar tezistix halli jekk le itik error mux jikkrexja -->
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