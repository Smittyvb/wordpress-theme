<?php get_header();

wrdsb_sidebar_start();

// Start the Loop.
while ( have_posts() ) : the_post();

  // Include the post format-specific content template.
  get_template_part( 'content', get_post_format() );

  // If comments are open or we have at least one comment, load up the comment template.
  if ( comments_open() || get_comments_number() ) {
    comments_template();
  }
endwhile;

wrdsb_sidebar_end();

get_footer(); ?>
