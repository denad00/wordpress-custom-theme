<?php ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<header class="site-header">

  <h1 class="site-title">

    <?php if (!is_home()): ?>
      <a href="<?php echo home_url(); ?>">
      <?php bloginfo('name'); ?>
      </a>
    <?php 
      else:
        bloginfo('name');
  endif; ?>
  
  </h1>

  <nav class="buttons">
    <button class="btn-main">
      <i class="fa-solid fa-burger"></i>
      <span class="screen-readers-text">Main Menu</span>
    </button>
    <button class="btn-social">
      <i class="fa-solid fa-square-share-nodes"></i>
      <span class="screen-readers-text">Social Menu</span>
    </button>
    <button class="btn-search">
      <i class="fa-solid fa-magnifying-glass"></i>
      <span class="screen-readers-text">Search</span>
    </button>
  </nav>


  <div class="menus-search-container">
    <?php 
      wp_nav_menu(array(
        'theme_location'      =>      'main-menu',
        'container'           =>      'div',
        'container_class'     =>      'main-menu'
      ));

      wp_nav_menu(array(
        'theme_location'      =>      'main-social',
        'container'           =>      'div',
        'container_class'     =>      'main-social'
      ))
    ?>

    <?php get_search_form(); ?>
  </div>

</header>
<div id="primary" class="content-area">
  <main id="main" class="site-main">