<?php
function featured_image_fullpost() 
{
	// display Featured Image if the post has a Post Thumbnail assigned to it
	// do not link the Featured Image to the Post URL
	if ( has_post_thumbnail() )
	{
		global $post;
		$featured_image = '<div class="featuredimage">';
		$featured_image .= get_the_post_thumbnail($thumbnail->ID,'wrdsb-full-width');
		$featured_image .= '</div>';
		echo $featured_image;
	}
}

function featured_image_newsstream() 
{
	// display Featured Image if the post has a Post Thumbnail assigned to it
	// link the Featured Image to the Post URL
	if ( has_post_thumbnail()) 
	{
		// link Post Thumbnail to Post
		global $post;
		$featured_image = '<div class="featuredimage"><a href="'.get_permalink($post->ID).'">';
		$featured_image .= get_the_post_thumbnail($thumbnail->ID,'wrdsb-full-width');
		$featured_image .= '</a></div>';
		echo $featured_image;
  	}
}

function display_cats_tags() 
{
	global $post;
	$number_of_cats = count(get_the_category());
	$number_of_tags = count(get_the_tags());
	$posttags = get_the_tags();
	if ($posttags) {
		foreach($posttags as $tag) {
			$allthetags = $tag->name . ' '; 
		}
	}

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
		$cats_n_tags .= $allthetags;
		$cats_n_tags .= '</p>';
		echo $cats_n_tags;
	}
	elseif (isset($display_cats) && !isset($display_tags)) 
	{
		$cats_n_tags = '<div class="clearfix"></div>';
		$cats_n_tags .= '<p class="categories gray-dark small">Categories: ';
		$cats_n_tags .= get_the_category_list(' &bull; ');
		$cats_n_tags .= '</p>';
		echo $cats_n_tags;
	} 
	elseif (isset($display_cats) && isset($display_tags)) 
	{
		$cats_n_tags = '<div class="clearfix"></div>';
		$cats_n_tags .= '<p class="categories gray-dark small">Categories: ';
		$cats_n_tags .= get_the_category_list(' &bull; ');
		$cats_n_tags .= ' Tags: ';
		$cats_n_tags .= $allthetags;
		$cats_n_tags .= '</p>';
		echo $cats_n_tags;
	}
}
