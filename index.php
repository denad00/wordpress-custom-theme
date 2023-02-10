<?php 

get_header(); 
?>

<div class="archive-search-title-wrapper">
  <?php 
    if (is_archive ()):
  ?>
  <?php
      the_archive_title("<h2>", "</h2>"); 
    elseif (is_search()): ?>
      <h2>Search Results for:
        <?php the_search_query(); ?>
      </h2>
    <?php endif;
  ?>
    </div>

<?php
if ( have_posts() ) :
  while ( have_posts() ) :
    the_post();
    get_template_part('template-parts/content');
  endwhile;
  else :
    get_template_part('template-parts/content-none.php');
endif;  

get_footer();