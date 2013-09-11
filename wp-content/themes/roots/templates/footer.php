<footer class="footer" id="bootstrap-footer" role="contentinfo">
  <div class="container">
    <div class="crow"></div>
    <?php dynamic_sidebar('sidebar-footer'); ?>
    <p>&copy; <?php echo date('Y'); ?> <?php bloginfo('name'); ?></p>
  </div>
</footer>

<?php wp_footer(); ?>
