<?php
// Add function for navigation menus
function cat_goodies_setup() {
  register_nav_menus( array(
    'header' => 'Header menu',
    'footer' => 'Footer menu'
  ) );
}
add_action( 'after_setup_theme', 'cat_goodies_setup' );

// Add function to enqueue styles and scripts
function cat_goodies_init(){
  $args = array(
    'label' => 'Cat Goodies',
    'public' => true,
    'show_ui' => true,
    'capability_type' => 'post',
    'taxonomies'  => array( 'category'),
    'hierarchical' => 'false', 
    'query_var' => true,
    'menu_icon' => 'dashicons-smiley',
    'supports' => array(
      'title',
      'editor',
      'excerpt', 
      'comments',
      'thumbnail',
      'author',
      'post-formats',
      'page-attributes',
    )
  );
  register_post_type('catGoodies', $args);
}
add_action('init', 'cat_goodies_init');

// Adding a shortcode to display custom post type content
function cat_goodies_shortcode(){
  $query = new WP_Query(array('post_type' => 'catGoodies', 'posts_per_page' => 8, 'order' => 'asc'));
  while ($query -> have_posts()) : $query->the_post(); ?>
    <div class="col-sm-12 col-md-6 col-lg-4">
      <div class="image-container">
        <a href="<?php the_permalink(); ?>"><?php the_post_thumbnail(); ?></a>
      </div>
      <div class="catGoodies-content">
        <h4><?php the_title(); ?></h4>
        <?php the_excerpt(); ?>
        <p><a href="<?php the_permalink(); ?>">Learn More</a></p>
      </div>
    </div>
    <?php
  endwhile;
  wp_reset_postdata();
}
// Adding a shortcode for the custom post type catGoodies
add_shortcode('cat', 'cat_goodies_shortcode');

// Changing the excerpt length
add_filter( 'excerpt_length', function($length) {
  return 25;
}, PHP_INT_MAX );

// Adding support for WooCommerce
function cat_goodies_add_woocommerce_support() {
  add_theme_support( 'woocommerce' );
}
add_action( 'after_setup_theme', 'cat_goodies_add_woocommerce_support' );

// Enqueueing WooCommerce cart fragments script
function enqueue_wc_cart_fragments() {
  wp_enqueue_script( 'wc-cart-fragments' );
}
add_action( 'wp_enqueue_scripts', 'enqueue_wc_cart_fragments' );

?>
