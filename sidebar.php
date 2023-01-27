<div class="col-4">
    <!-- aside bex l browser ikun jaf li din at the side placed -->
    <aside>

        <!-- din l function biex tara primary sidebar tezistix halli jekk le itik error mux jikkrexja -->
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