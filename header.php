<!DOCTYPE html>
<html <?php language_attributes(); ?> > 
  <head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title><?php bloginfo('name'); ?></title>

    <!-- Bootstrap core CSS -->
    <link href="<?php bloginfo('template_url'); ?>/css/bootstrap.css" rel="stylesheet">
    <link href="<?php bloginfo('template_url'); ?>/css/font-awesome.css" rel="stylesheet">
    <link href="<?php bloginfo('stylesheet_url'); ?>" rel="stylesheet">
    <?php wp_head(); ?>
  </head>

  <body <?php body_class(); ?>>

    <nav class="navbar">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
	  <?php if(has_custom_logo()) : ?>
	    <?php the_custom_logo(); ?>
	  <?php else : ?>
	    <h1><?php bloginfo('name'); ?></h1>
	  <?php endif; ?>
        </div>
	 <?php wp_nav_menu(array(
		   'theme_location' => 'primary',
		   'depth'	=> 2,
		   'container'  => false,
		   'menu_class'	=> 'nav nav-pills pull-right',
		   'fallback'	=> 'wp_bootstrap_navwalker::fallback',
		   'walker'	=> new wp_bootstrap_navwalker() 
		));
	 ?>
      </div>
    </nav>

