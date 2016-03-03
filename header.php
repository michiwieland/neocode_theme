<!DOCTYPE html>
<html <?php language_attributes(); ?>>
  <head>
      <meta charset="<?php bloginfo( 'charset' ); ?>">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
       <meta name="author" content="NEOCODE">
      <meta name="description" content="Offizielle Homepage von Michael Wieland">

      <link rel="shortcut icon" type="image/x-icon" href="<?php echo get_template_directory_uri(); ?>/img/faivicon.ico">

      <!--[if lt IE 9]>
       <script src="//cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.min.js"></script>
       <![endif]-->

      <?php wp_head(); ?>
  </head>
  <body>
      <header>
          <a href="<?php echo home_url(); ?>">
              <img id="logo" src="<?php echo get_template_directory_uri(); ?>/img/logo.png" alt="Logo <?php bloginfo('name'); ?>">
          </a>
         <h1><?php bloginfo('name'); ?></h1>
        <nav>
          <?php wp_nav_menu( array( 'theme_location' => 'header-menu' ) ); ?>
        </nav>
      </header>
