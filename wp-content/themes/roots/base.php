<?php get_template_part('templates/head'); ?>
<body <?php body_class(); ?>>

  <!--[if lt IE 7]><div class="alert"><?php _e('You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.', 'roots'); ?></div><![endif]-->

  <?php
    do_action('get_header');
    // Use Bootstrap's navbar if enabled in config.php
    if (current_theme_supports('bootstrap-top-navbar')) {
      get_template_part('templates/header-top-navbar');
    } else {
      get_template_part('templates/header');
    }
  ?>

  <div class="container" id="bootstrap-container" role="document">
    <div class="row">
      <div class="<?php echo roots_main_class(); ?>" id="content" role="main">
        <?php include roots_template_path(); ?>
      </div><!-- /.main -->
      <?php if (roots_display_sidebar()) : ?>
      <aside class="<?php echo roots_sidebar_class(); ?>" id="sidebar" role="complementary">
        <?php include roots_sidebar_path(); ?>
      </aside><!-- /.sidebar -->
      <?php endif; ?>
    </div><!-- /.content -->
  </div><!-- /.wrap -->

  <div style="display:none;" class="nav_up" id="nav_up" title="nahoru">
    <i class="icon-chevron-up"></i>
  </div>
  <div style="display:none;" class="nav_comments" id="nav_comments" title="komentáře">
    <i class="icon-comments"></i>
  </div>
  <div style="display:none;" class="nav_down" id="nav_down" title="dolů">
    <i class="icon-chevron-down"></i>
  </div>

  <?php get_template_part('templates/footer'); ?>

</body>
</html>
