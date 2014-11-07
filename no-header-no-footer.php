<?php
/*
Template Name: No Header/Footer
*/
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <?php if (is_front_page()) { ?> 
    <title><?php bloginfo('name'); ?></title>
  <?php } else { ?>
    <title><?php wp_title(''); ?> (<?php bloginfo('name'); ?>)</title>
  <?php } ?>

  <style type="text/css">
  body {
    font-family: "Helvetica Neue", Helvetica, Arial, sans-serif;
    font-size: 14px;
    line-height: 1.42857143;
    color: #333;
    background-color: #fff;
    margin: 0;
  }
.container {
  width:870px;
  margin:0 auto;
  padding:15px;
}
.row {
  display:block;
}
h1 {
  display:none;
}
  </style>
</head>
<body>
<div class="container">
  <div class="row">
    <div class="col-sm-12">
      
      <?php
        // Start the Loop.
        while ( have_posts() ) : the_post();

          // Include the page content template.
          get_template_part( 'content', 'page' );

          // If comments are open or we have at least one comment, load up the comment template.
          
        endwhile;
      ?>
    </div>
  </div>
</div>
</body>
</html>
