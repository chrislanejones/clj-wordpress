
<footer class="container site-footer">
	<div class="row">

    <?php dynamic_sidebar('footer-widget-area'); ?>
  </div>

  <div class="row">

    <div class="col-lg-12 site-sub-footer">

      <p>&copy; <?php echo date('Y'); ?> <a href="<?php echo home_url('/'); ?>"><?php bloginfo('name'); ?></a>. All rights reserved.</p>
    </div>
  </div>
</footer>

<?php wp_footer(); ?>
</body>
</html>
