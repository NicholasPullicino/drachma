<?php $footer_bg = get_theme_mod('testtheme_footer_bg', 'light'); ?>

<footer class="mt-4 p-4">
    <div class="container-fluid footer-".<?php $footer_bg ?>>
        <div class="row">
            <?php 
                $footer_widget_count = get_theme_mod("testtheme_footer_widgets", "3");                   
                for ($i = 0; $i < $footer_widget_count; $i++){
                    echo "<div class='col'>";
                    if (is_active_sidebar('footer_sidebar-'.($i+1))){
                        dynamic_sidebar('footer_sidebar-'.($i+1));
                    }
                    echo "</div>";
                }             
            ?>
        </div>
    </div>
    <div class="container">
        <div class="row">   
            <div class="col-12">
                <p id="footerText">Created by Nicholas Pullicino</p>
            </div>
        </div>
    </div>
</footer>
</body>
</html>
</html>