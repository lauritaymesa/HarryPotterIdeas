
<?php
/**
 * The header file Harry Potter Ideas  
 * 
 * @link http://developer.wordpress.org/theme/basics/templete-file/#template-partials
 * 
 * @package HarryPotterIdeas
 * @since Harry Potter Ideas 1.0
 */
?>

<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
  <meta charset="UTF-8">
  <title>Harry Potter Ideas</title>
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <?php wp_head(); ?>
 
</head>

<body <?php body_class(); ?>>

  <div id="top-navigation">
    <div class="container">
      <div class="row justify-content-end">
        <div class="col-md-6">

          <?php 

          wp_nav_menu(
            array('theme_location' => 'primary', // as registered in functions.php
            'depth' => 3, // as we set up in our CSS
            'container' => 'nav', // html wrapper of the menu 
            'container_class' => 'main-menu', // wrapper class
            'menu_class' => 'top-menu d-flex flex-row navigation top-menu justify-content-end list-unstyled', // classes of the menu ul tag
            'fallback_cb' => false // if primary menu is not created, then show nothing
            )
          );
          ?>





          <button type="button" class="navbar-open">
            <i class="mobile-nav-toggler flaticon flaticon-menu"></i>
          </button>

        </div>
      </div>
      <!--mobile menu-->
      <div class="mobile-menu">
        <div class="menu-backdrop"></div>
        <div class="close-btn">
          <i class="flaticon flaticon-close"></i>
        </div>
        <nav class="menu-box">
          <ul class="navigation clearfix"></ul>
        </nav>
      </div>

    </div>
  </div>
</body>

</html>