<?php
/**
 * Template Name: Custom Post-Type cat goodies Layout
 * Template Post Type: cat goodies
 */
get_header();
?>
  <section>
  <div>
    <h1><?php the_title(); ?></h1>
  </div>
  <!-- set up the product page -->
</section>
<section class="row single-post-row-one" style="margin-bottom: 170px; bottom: 0;">
  <div class="col-sm-12 col-md-8 col-lg-8 post-content">
    <!-- get the post-content -->
    <p><?php echo get_the_content(); ?></p>
    <!-- get the date -->
    <p><?php echo get_the_date(); ?></p>
    <!-- get the tag -->
    <p><?php the_tags(); ?></p>
      <!-- get the post category -->
    <p>Category: <?php echo the_category(',', '', get_the_ID()); ?></p>
  </div>
  <aside class="post-list col-sm-12 col-md-4 col-lg-4 row related-posts">
    <?php
    // set up the related posts
    $the_query = new WP_Query(array('post_type' => 'cat_goodies', 'post_per_page' => 3, 'order' => 'desc'));
    while ($the_query -> have_posts()) : $the_query -> the_post();
      ?>

    <?php
    endwhile;
    wp_reset_postdata();
    ?>
  </aside>
</section>
<?php
get_footer();
?>
