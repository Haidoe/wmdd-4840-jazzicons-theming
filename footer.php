<?php ?>    
    </div>

    <footer class="site-footer">
      <?php
        wp_nav_menu(array(
          "theme_location" => "footer_menu",
          "container"      => "nav",
          "container_class"=> "menu-main",
          "container_id"   => "menu-main-in-footer",
          "menu_class"     => "menu-list"
        ));
      ?>
      <p>All content &copy; 2023 JazzIcons</p>
    </footer>
  </div>

  <?php wp_footer(); ?>
</body>

</html>