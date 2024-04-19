<?php
/**
 * Template Name: Single Post Template
 * Template Post Type: post, cat goodies
 */
get_header();
// get the featured image
$featuredImg = wp_get_attachment_image_src(get_post_thumbnail_id($post->ID), 'full');
?>
  <div>
    <!-- get the title -->
    <h1><?php the_title(); ?></h1>
  </div>
</section>
<section>
  <div class="col-sm-12 col-md-8 col-lg-8 post-content">
    <!-- get the content -->
    <?php echo get_the_content(); ?>
    <!-- get the date -->
    <p><?php echo get_the_date(); ?></p>
    <!-- get the tags -->
    <p><?php the_tags(); ?></p>
    <!-- get the the category -->
    <p><?php echo the_category(',', '', get_the_ID()); ?></p>
  </div>
  <aside>
    <?php
    // set up the related posts
    $the_query = new WP_Query( 'posts_per_page=3' );
  
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
