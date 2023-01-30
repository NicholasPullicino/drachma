<!-- All the wesite's footers -->


  <!-- get theme mod from customizer -->
  <?php $footer_bg = get_theme_mod('custom_footer_bg', 'light'); ?>

<footer class="footer-<?php echo $footer_bg; ?>">

<?php wp_nav_menu(array(
        'theme_location' => 'footer-menu'
      )); ?>
</div>

  <!-- <div class="footer_container">
    <div class="fields">
      <h5>Biography</h5>
      <br>
      <p>Early Start</p>
      <p>Personal Life</p>
      <p>Family</p>
      <p>Education and Occupation</p>
      <p>Important Life Events</p>
      <p>Areas of Achievements</p>
      <p>Impact and Significance</p>
    </div>

    <div class="fields">
      <h5>Achievements</h5>
      <br>
      <p>Summary</p>
      <p>Local School</p>
      <p>Broad School</p>
      <p>Private School</p>
      <p>Teaching</p>
      <p>Certificates</p>
    </div>

    <div class="fields">
      <h5>Works</h5>
      <br>
      <p>Work Experience</p>
      <p>Past Work</p>
      <p>Present Work</p>
      <p>Future Plans</p>
    </div>

    <div class="fields">
      <h5>About</h5>
      <br>
      <p>Personal Life</p>
      <p>Education and Occupation</p>
      <p>Important Life Events</p>
      <p>Areas of Achievements</p>
      <p>Impact and Significance</p>
    </div>
  </div> -->


  <!-- awnekk fil php ajjatna footer bg biex il user ikun jista ibiddel bejn dark u light mode -->
  
  <!-- <div class="footer_container2">
    <div class="div1">
    <h5>Seek Truth, Sexual, and Spirit Integration</h5>
    </br>
    </div> -->
<!-- 
      to display the amount of widgets the user inputted  -->
      <div class="div2">

     
  <?php 
      $footer_widget_count = get_theme_mod("custom_footer_widgets", "3");
      
      for($i = 0; $i < $footer_widget_count; $i++){
        
        echo "<div class='col'";

          if (is_active_sidebar('footer-sidebar-'.($i+1))){
            dynamic_sidebar('footer-sidebar-'.($i+1));
          }

        echo "</div>";
      }
  ?>
  <!-- </div>
      </div> -->

</footer>
</body>
</html>


