<?php
/**
 * Standard Excerpt category Harry Potter Ideas  
 * 
 *  
 * @package HarryPotterIdeas
 * @since Harry Potter Ideas 1.0
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
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
                    <div class="meta">
                        <span><?php echo get_the_date('M d, Y'); ?></span>
                    </div>
                    <h2><a href="<?php the_permalink(); ?>" class="category-page"><?php the_title(); ?></a></h2>
                    <p class="excerpt">
                        <?php echo force_balance_tags(get_the_excerpt()); ?>
                    </p>
                    <a href="<?php the_permalink(); ?>" class="read-more-category-page"><?php esc_html_e('Read the full post &rarr;', 'harrypotterideas'); ?></a>
                </div>
            </div>
        </div>
    </div>
</article>
