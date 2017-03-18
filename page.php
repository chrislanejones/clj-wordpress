<?php
    /*
     Template Name: Page with sidebar
    */
?>
<?php get_template_part('includes/header'); ?>

<div class="container">
  <div class="row">
<div class="pageheight">

    <div class="col-xs-12 col-sm-8">
      <div id="content" role="main">
        <?php get_template_part('includes/loops/content', 'page'); ?>
      </div><!-- /#content -->
    </div>
</div><!-- /.page height container fix-->
    <div class="col-xs-6 col-sm-4" id="sidebar" role="navigation">
      <?php get_template_part('includes/sidebar'); ?>
    </div>

  </div><!-- /.row -->
</div><!-- /.container -->

<?php get_template_part('includes/footer'); ?>
