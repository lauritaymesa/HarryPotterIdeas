<?php

/**
 * Harry Potter Ideas main template file
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
                        ?>

                        <div class="container">
                            <div class="row align-items-center">
                                <div class="col-lg-6">
                                    <?php if (has_post_thumbnail()) { ?>
                                        <div class="image-container d-flex justify-content-center align-items-center">
                                            <?php the_post_thumbnail('large', array('class' => 'img-fluid mx-auto d-block')); ?>
                                        </div>
                                    <?php } ?>
                                </div>
                                <div class="col-lg-6">
                                    <div class="post-content">
                                        <?php get_template_part('template-parts/content', 'excerpt'); ?>
                                    </div>
                                </div>
                            </div>
                        </div>

                <?php
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



