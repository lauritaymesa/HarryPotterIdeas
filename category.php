<?php
/**
 * Harry Potter Ideas archive template file
 * 
 * @link http://developer.wordpress.org/themes/template-hierarchy
 *  
 * @package HarryPotterIdeas
 * @since Harry Potter Ideas 1.0
 */

get_header();
get_template_part('template-parts/banner', 'title');
?>

<div class="content-area">
    <div class="container">
        <div class="row">
            <div class="col-lg-12  overflow-hidden">

                <?php
                if (have_posts()) {
                    while (have_posts()) {
                        the_post();
                        get_template_part('template-parts/content-excerpt-category');
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

  

