<!-- set up the page -->
<?php
// get the contents of the header
  get_header();
?>

  <section class="general-masthead">
    <!-- get the contents -->
    <h1><?php the_title(); ?></h1>
  </section>
  <section>
    <?php the_content(); ?>
  </section>

<?php
// get the contents of the footer
  get_footer();
?>