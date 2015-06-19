<?php
/*
Template Name: No Sidebars
*/
?>
<?php get_header(); ?>

<div class="container">
  <div class="row">
    <div class="col-sm-12">
      <?php 
        // check if the post has a Post Thumbnail assigned to it.
        featured_image_fullpost();

        // Start the Loop.
        while ( have_posts() ) : the_post();

          // Include the page content template.
          get_template_part( 'content-templates/content', 'page' );

          // If comments are open or we have at least one comment, load up the comment template.
          if ( comments_open() || get_comments_number() ) {
            comments_template();
          }
        endwhile;
      ?>
    </div>
  </div>
</div>

<?php get_footer(); ?>
