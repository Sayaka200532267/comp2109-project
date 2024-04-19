<?php
/**
 * Template Name: Main Template
 * Template Post Type: page
 */
get_header();
?>
  <main>
    <!-- create a hero image -->
  <h1><?php echo wp_kses_post(get_field('main_heading')); ?></h1>
  <section class="masthead" style="background-image: url('<?php echo wp_kses_post(get_field('hero_image')); ?>')">
  <!-- set a row below the hero image -->
    </section>
        <h3><?php echo wp_kses_post(get_field('row_one_title')); ?></h3>
    <section class="shop-body">
  <?php
  // display the products
    do_action('woocommerce_before_shop_loop');
    echo do_shortcode ('[products limit="4" columns="2"]');
    do_action('woocommerce_after_shop_loop');
  ?>
</section>
  </main>
<?php
get_footer();
?>