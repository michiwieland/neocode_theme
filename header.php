<!DOCTYPE html>
<html <?php language_attributes(); ?>>
  <head>
      <meta charset="<?php bloginfo( 'charset' ); ?>">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <meta name="author" content="NEOCODE">
      <meta name="description" content="Offizielle Homepage von Michael Wieland">

      <link rel="shortcut icon" type="image/x-icon" href="<?php echo get_template_directory_uri(); ?>/img/faivicon.ico">

      <?php wp_head(); ?>
  </head>
  <body>
      <header>
        <nav>
          <?php wp_nav_menu( array( 'theme_location' => 'header-menu' ) ); ?>
        </nav>
      </header>
