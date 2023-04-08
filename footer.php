<!-- All the wesite's footers -->

  <!-- get theme mod from customizer -->
  <?php $footer_bg = get_theme_mod('drachmaWebsite_footer_bg', 'light'); ?>

<footer class="footer-<?php echo $footer_bg; ?>">

<?php /*wp_nav_menu(array(
        'theme_location' => 'footer-menu'
      ));*/ ?> 
</div>

      <div class="div2">

     
  <?php 
      $footer_widget_count = get_theme_mod("drachmaWebsite_footer_widgets", "3");
      
      for($i = 0; $i < $footer_widget_count; $i++){
        
        echo "<div class='col'";

          if (is_active_sidebar('footer-sidebar-'.($i+1))){
            dynamic_sidebar('footer-sidebar-'.($i+1));
          }

        echo "</div>";
      }
  ?>

</footer>
</body>
</html>


