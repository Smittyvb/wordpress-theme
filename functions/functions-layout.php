<?php

function is_wrdsb_left_sidebar()
{
  // set variables to false
  $has_left = FALSE;

  // is there a left sidebar?
  if (is_active_sidebar('sidebar-left') || has_nav_menu('left')) 
  {
    $has_left = TRUE;
  }

  // if not the front page, there IS a left sidebar
  if (!is_front_page()) {
    $has_left = TRUE;
  }
  return $has_left;
}

function is_wrdsb_right_sidebar()
{
  // set variables to false
  $has_right = FALSE;
  
  // is there a right sidebar?
  if (is_active_sidebar('sidebar-right') || has_nav_menu('right')) 
  {
    $has_right = TRUE;
  }
  return $has_right;
}

function wrdsb_sidebar_start ()
{
  // get the deets on the sidebar sitch
  $has_left = is_wrdsb_left_sidebar();
  $had_right = is_wrdsb_right_sidebar();

  // start the content area off
  echo '<div class="container">
  <div class="row">';

  /*** 
  
  let's display those sidebars! 
  
  ***/

  // both sidebars
  if (($has_left === TRUE) and ($has_right === TRUE)):
    echo '<div class="col-sm-3 col-md-2 col-lg-2">';
    // if it's the front page, no automated menu
    if (!is_front_page()) 
    {
      get_sidebar('lmenu');
    }
    get_sidebar('left');
    echo '</div>';
    
  // left sidebar only
  elseif (($has_left === TRUE) and ($has_right === FALSE)):
    echo '<div class="col-sm-3 col-lg-3">';
    // if it's the front page, no automated menu
    if (!is_front_page()) 
    {
      get_sidebar('lmenu');
    }
      get_sidebar('left');
      echo '</div>';
  
  # Just right sidebar
    # Nothing to do
  # No sidebars
    # Nothing to do
  endif;

  /*** 
  
  Let's display the content now
  
  ***/

  // with both sidebars
  if (($has_left === TRUE) and ($has_right === TRUE)):
    echo '<div class="col-sm-6 col-md-8 col-lg-8">';

  // left sidebar only
  elseif (($has_left === TRUE) and ($has_right === FALSE)):
    echo '<div class="col-sm-9 col-lg-9">';

  // right sidebar only
  elseif (($has_left === FALSE) and ($has_right === TRUE)):
    echo '<div class="col-sm-8">';

  // no sidebars
  elseif (($has_left === FALSE) and ($has_right === FALSE)):
    echo '<div class="col-sm-12 col-lg-12">';
  endif;
}

function wrdsb_sidebar_end() 
{
  // get the deets on the sidebar sitch
  $has_left = is_wrdsb_left_sidebar();
  $had_right = is_wrdsb_right_sidebar();

  // close the content area
  echo '</div> <!-- end content area -->';

  /*** 
  
  let's display those sidebars! 
  
  ***/

  // both sidebars
  // left has already displayed, here is the right column
  if (($has_left === TRUE) and ($has_right === TRUE)):
    echo '<div class="col-sm-3 col-md-2 col-lg-2">';
    if (!is_front_page()) {
      get_sidebar('rmenu');
    }
    get_sidebar('right');
    echo '</div>';

  // left sidebar only
    # Nothing to do

  // right sidebar only
  elseif (($has_left === FALSE) and ($has_right === TRUE)):
    echo '<div class="col-sm-4">';
    // is there an automated menu?
    if (!is_front_page()) {
      get_sidebar('rmenu');
    }
    get_sidebar('right');
    echo '</div>';

  // no sidebars at all
      # Nothing to do
  
  endif;

  // that's all folks, let's close everything up
  echo '</div>
</div>';
}
