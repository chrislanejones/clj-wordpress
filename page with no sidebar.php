<?php
    /*
     Template Name: page with no sidebar
    */
?>

<?php get_template_part('includes/header'); ?>

<div class="container">
  <div class="row">
<div class="pageheight">


    <div class="col-xs-12 col-sm-11">
      <div id="content" role="main">
        <?php get_template_part('includes/loops/content', 'page'); ?>
      </div><!-- /#content -->
    </div>
</div><!-- /.page height container fix-->


  </div><!-- /.row -->
</div><!-- /.container -->

<?php get_template_part('includes/footer'); ?>
