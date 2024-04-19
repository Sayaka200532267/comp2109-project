<?php
  get_header();
// connect the page with the shop page
  $shopFeaturedImg = wp_get_attachment_image_src( get_post_thumbnail_id( wc_get_page_id( 'shop' ) ), 'full' );
?>
    <h1 style="text-align: center">Shop</h1>
    <!-- display featured image -->
<section class="shop-masthead" style="background: url('<?php echo $shopFeaturedImg[0]; ?>'); background-size: 1000px auto; background-repeat: no-repeat; background-position: center;">

  </section>
</div>
</section>
<section class="shop-body">
  <!-- display the products -->
  <?php
    do_action('woocommerce_before_shop_loop');
    echo do_shortcode ('[products limit="6" columns="2"]');
    do_action('woocommerce_after_shop_loop');
  ?>
</section>
<?php
  get_footer();
?>