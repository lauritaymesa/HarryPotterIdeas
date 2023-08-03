<?php
/**
 * standard Excerpt Harry Potter Ideas  
 * 
 *  
 * @package HarryPotterIdeas
 * @since Harry Potter Ideas 1.0
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
    <div class="meta">
        <span><?php echo get_the_date('M d, Y'); ?></span>
    </div>
    <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
    <p class="excerpt">
        <?php echo force_balance_tags(get_the_excerpt()); ?>
    </p>
    <a href="<?php the_permalink(); ?>" class="read-more"><?php esc_html_e('Read the full post &rarr;', 'harrypotterideas'); ?></a>
</article>

