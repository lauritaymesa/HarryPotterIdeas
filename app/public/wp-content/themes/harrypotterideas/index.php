<?php

/**
 * Harry Potter Ideas main templete file
 * 
 * @link http://developer.wordpress.org/themes/template-hierarchy
 *  
 * @package HarryPotterIdeas
 * @since Harry Potter Ideas 1.0
 */

  get_header();
  get_template_part('template-parts/banner', 'title');
?>

  
  <!--Post-->
  <div class="content-area">
    <div class="container">
      <div class="row">
        <div class="col-md-8 offset-md-2 overflow-hidden">

<?php

if (have_posts()) {
    while (have_posts()) {
        the_post();
        get_template_part('template-parts/content', 'excerpt');
    }

    b2w_pagination();


} else {
    get_template_part('template-parts/content', 'none');
}
?>



         
        </div>
      </div>

    </div>
  </div>

  <?php get_footer(); ?>