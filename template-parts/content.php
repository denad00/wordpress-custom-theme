<?php ?>
<article <?php post_class(); ?>>

  <div class="entry-title-category-wrapper">
    <h2 class="entry-title">
      <?php if (is_single()):
          the_title();
      else: ?>
      <a href="<?php the_permalink(); ?>">
        <?php the_title();?>
      </a>
      <?php endif; ?>
    </h2>

    <div class="entry-category">
      <?php the_category( ' • ' ); ?>
    </div>
  </div>
    
    <div class="entry-tumbnail">
      <?php the_post_thumbnail(); ?>
    </div>

  <div class="entry-content">
    <?php
      if (!is_single()):
        the_excerpt(  );
    ?>
      <div class="read-more">
        <a href="<?php the_permalink();?>">
          [ read more ]
        </a>
      </div>
    <?php
      else:
        the_content();
      endif;
    ?>
  </div>


</article>