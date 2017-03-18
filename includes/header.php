<!DOCTYPE html>
<html class="no-js">
<head>
	<title><?php wp_title('•', true, 'right'); bloginfo('name'); ?></title>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
  	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

<!--[if lt IE 8]>
<div class="alert alert-warning">
	You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.
</div>
<![endif]-->


<nav class="navbar navbar-default navbar-fixed-bottom">
  <!-- /.container <div class="container"> /.container -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="<?php echo home_url('/'); ?>"><i class="fa fa-lg fa-fw fa-linux"></i> Welcome</a>
    </div>
    <div class="collapse navbar-collapse" id="navbar">
      <?php
            wp_nav_menu( array(
                'theme_location'    => 'navbar-left',
                'depth'             => 2,
                'menu_class'        => 'nav navbar-nav',
                'fallback_cb'       => 'wp_bootstrap_navwalker::fallback',
                'walker'            => new wp_bootstrap_navwalker())
            );
        ?>
        <?php get_template_part('includes/navbar-search'); ?>
        <?php
            wp_nav_menu( array(
                'theme_location'    => 'navbar-right',
                'depth'             => 2,
                'menu_class'        => 'nav navbar-nav navbar-right',
                'fallback_cb'       => 'wp_bootstrap_navwalker::fallback',
                'walker'            => new wp_bootstrap_navwalker())
            );
        ?>
    </div><!-- /.navbar-collapse -->
  <!-- /.container </div> /.container -->
</nav>

<!--Header -->


<div class="container color">
	<div class="row">
		<div class="col-xs-12">
			<div id="photo-header" class="text-center">
				<!-- PHOTO (AVATAR) -->

				<div id="photo">
					<a href="<?php echo home_url('/'); ?>"><img src="/wp-content/uploads/2017/01/cljimage.jpg" alt="Chris Lane Jones Avatar" title="Chris Lane Jones"></a>

				</div>
				<div id="text-header">
					<h1><?php bloginfo('name'); ?></h1> <h2><?php bloginfo('description'); ?></h2>
					<hr class="line">
				</div>
			</div>
		</div>
	</div>
