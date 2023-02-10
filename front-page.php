<?php 

get_header(); 

?>

<div class="section">
<?php
// Super Series Loop
$super_query = new WP_Query(array(
  'category_name'     =>    'super-series',
  'posts_per_page'    =>    3,
  'orderby'           =>    'rand',
));

if ( $super_query->have_posts() ) :
  while ( $super_query->have_posts() ) :
    $super_query->the_post();
    get_template_part('template-parts/content');
  endwhile;
  else :
    get_template_part('template-parts/content-none.php');
endif;  

?>
</div>

<div class="section">
<?php

// Distortion Loop
$distortion_query = new WP_Query(array(
  'category_name'     =>    'distortion',
  'posts_per_page'    =>    2,
));

if ( $distortion_query->have_posts() ) :
  while ( $distortion_query->have_posts() ) :
    $distortion_query->the_post();
    get_template_part('template-parts/content');
  endwhile;
  else :
    get_template_part('template-parts/content-none.php');
endif;  

?>
</div>

<div class="section">
<?php
// Modulation Loop
$modulation_query = new WP_Query(array(
  'category_name'     =>    'modulation',
  'posts_per_page'    =>    3,
  'orderby'           =>    'rand',
));

if ( $modulation_query->have_posts() ) :
  while ( $modulation_query->have_posts() ) :
    $modulation_query->the_post();
    get_template_part('template-parts/content');
  endwhile;
  else :
    get_template_part('template-parts/content-none.php');
endif;  

?>
</div>
<?php


get_footer();