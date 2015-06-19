<?php
function featured_image_fullpost() 
{
	// display Featured Image if the post has a Post Thumbnail assigned to it
	// do not link the Featured Image to the Post URL
	if ( has_post_thumbnail() )
	{
		$featured_image = '<div class="featuredimage">'.the_post_thumbnail('wrdsb-full-width').'</div>';
  	}
  	echo $featured_image;
  	return $featured_image;
}

function featured_image_newsstream() 
{
	// display Featured Image if the post has a Post Thumbnail assigned to it
	// link the Featured Image to the Post URL
	if ( has_post_thumbnail()) 
	{
		// link Post Thumbnail to Post
		// $post is from functions.php
		$featured_image  = '<a href="'.get_permalink($post->ID).'">'.the_post_thumbnail('wrdsb-full-width').'</a>';
  	}
  	echo $featured_image;
	return $featured_image;
}

function display_cats_tags() 
{
	$number_of_cats = count(get_the_category());
	$number_of_tags = count(get_the_tags());

	if ($number_of_cats > 0 ) 
	{
		$display_cats = 1;
	}

	if ($number_of_tags > 0 ) 
	{
		$display_tags = 1;
	}

	if (!isset($display_cats) && isset($display_tags)) 
	{
		$cats_n_tags = '<div class="clearfix"></div>';
		$cats_n_tags .= '<p class="categories gray-dark small">Tags: ';
		$cats_n_tags .= the_tags('',' &bull; ','');
		$cats_n_tags .= '</p>';
	}
	elseif (isset($display_cats) && !isset($display_tags)) 
	{
		$cats_n_tags = '<div class="clearfix"></div>';
		$cats_n_tags .= '<p class="categories gray-dark small">Categories: ';
		$cats_n_tags .= the_category(' &bull; ');
		$cats_n_tags .= '</p>';
	} 
	elseif (isset($display_cats) && isset($display_tags)) 
	{
		$cats_n_tags = '<div class="clearfix"></div>';
		$cats_n_tags .= '<p class="categories gray-dark small">Categories: ';
		$cats_n_tags .= the_category(' &bull; ');
		$cats_n_tags .= ' Tags: ';
		$cats_n_tags .= the_tags('',' &bull; ','');
		$cats_n_tags .= '</p>';
	}
	
	echo $cats_n_tags;
	return $cats_n_tags;
}
