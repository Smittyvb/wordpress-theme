<?php
/**
 * The default template for displaying content
 *
 * Used for both single and index/archive/search.
 *
 * @package WordPress
 * @subpackage WRDSB
 * @since WRDSB 1.0
 */
?>

<?php //Featured Image
// check if the full news item
if (is_single()) :
	featured_image_fullpost();
// else if part of news stream
else :
	featured_image_newsstream();
endif;
?>

<?php if (is_single()) :
  the_title( '<h3>', '</h3>' );
else :
  the_title( '<h3><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h3>' );
endif; ?>

<?php if ('post' == get_post_type()) { ?>
  <p class="postdate gray-dark small">Posted <?php echo get_the_date(); ?></p>
<?php } ?>

<?php 
if ( has_excerpt ()) {
	the_excerpt();
	echo '<p class="readmore"><a href="'. get_permalink($post->ID) . '"><strong>Read more about</strong> <cite>'. get_the_title($post->ID) .'</cite> &#187;</a></p>';
} else {
	the_excerpt();
}
	display_cats_tags();
