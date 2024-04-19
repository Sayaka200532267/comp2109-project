<!doctype html>
<html lang="<?php language_attributes(); ?>">
<head>
  <meta charset="<?php bloginfo('charset'); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <?php wp_head(); ?>
<!-- add css -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  <link rel="stylesheet" href="<?php echo esc_url( home_url('wp-content/themes/Project/assets/css/custom-styles.css')); ?>">
 </head>
<body <?php body_class(); ?>>
<header class="default-header">
  <div>
    <!-- set up the logo -->
    <a href="<?php echo esc_url( home_url() );?>">
      <img src="<?php echo esc_url( home_url( 'wp-content/uploads/2024/04/Kittys-Corner-Market.png' ) ); ?>" alt="header logo">
    </a>
  </div>
  <nav>
    <?php
    // set up the navigation menu
    wp_nav_menu( array(
      'menu'           => 'main',
      'theme_location' => '',
      'depth'          => 2,
      'fallback_cb'    => false
    ));
    ?>
  </nav>
</header>