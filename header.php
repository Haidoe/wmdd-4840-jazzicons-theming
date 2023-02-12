<?php ?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
  <div class="page" id="page">
    <header class="site-header">
      <div class="site-info">
        <h1 class="site-title">
          <?php if( is_home() ):?>
            <?php bloginfo("name"); ?>
          <?php else: ?>
            <a href="<?php echo home_url(); ?>">
              <?php bloginfo("name"); ?>
            </a>
          <?php endif; ?>
        </h1>

        <div class="site-description">
          <?php bloginfo("description") ?>
        </div>
      </div>

      <div class="site-header-addons">
        <?php
          wp_nav_menu(array(
            "theme_location" => "main_menu",
            "container"      => "nav",
            "container_class"=> "menu-main",
            "container_id"   => "menu-main",
            "menu_class"     => "menu-list"
          ));
        ?>

        <?php get_search_form(); ?>
      </div>
    </header>

    <div class="site-content">