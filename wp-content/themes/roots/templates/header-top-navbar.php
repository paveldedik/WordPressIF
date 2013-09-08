<header class="navbar navbar-inverse navbar-fixed-top" id="bootstrap-navbar" role="banner">
  <div class="navbar-inner">
    <div class="container">
      <a class="logo" href="<?php echo home_url(); ?>/" title="<?php bloginfo('name'); ?>"></a>
      <nav class="nav-main nav-collapse collapse" role="navigation">
        <?php
          if (has_nav_menu('primary_navigation')) :
            wp_nav_menu(array('theme_location' => 'primary_navigation', 'menu_class' => 'nav'));
          endif;
        ?>
      </nav>
    </div>
  </div>
</header>
