<?php

/**
 * Harry Potter Themple for display page
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
            <div class="col-lg-12 col-md-8 offset-md-1 overflow-hidden">

                <?php
                    if (have_posts()) {
                    while (have_posts()) {
                    the_post();

                    if (has_post_thumbnail()) {

                        the_post_thumbnail(
                            'large',
                            array(
                                'class' => 'img-fluid',
                            )
                            );
                        }
                     }
                    }
                ?>

                <div class="col-lg-12 col-md-8 offset-md-1  overflow-hidden">
                    <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
                    <h4 class="post-title"><?php the_title(); ?></h4>
                    <?php
                    the_content();
                    ?>
                    </article>
                </div>
            </div>

        </div>
    </div>

    <?php
    get_footer();
    ?>
