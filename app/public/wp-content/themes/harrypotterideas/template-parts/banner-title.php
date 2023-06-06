<?php
/**
 * Title banner Harry Potter Ideas
 *
 * @package HarryPotterIdeas
 * @since Harry Potter Ideas 1.0
 */

$blog_info = get_bloginfo('name');
$description = get_bloginfo('description', 'display');
?>

<!--Title Banner-->
<section class="title-banner">
    <div class="container">
        <div class="row">
            <div class="col-md-10 offset-md-1 col-sm-12 offset-sm-0 overflow-hidden text-center">
                <?php
                if (is_page()) {
                    the_title('<h1 class="page-title">', '</h1>');
                } elseif (is_single()) {
                    ?>
                    <p class="tag-line sub-title"><?php echo get_the_date('M d, Y'); ?></p>
                    <?php
                    the_title('<h1 class="page-title">', '</h1>');
                } elseif (!is_front_page() && is_home()) {
                    $b2w_blog_title = get_the_title(get_option('page_for_posts', true));
                    ?>
                    <h1 class="page-title"><?php echo esc_html($b2w_blog_title); ?></h1>
                    <?php
                } elseif (is_home()) {
                    if ($description) {
                        ?>
                        <h2 class="tag-line sub-title"><?php echo esc_html($description); ?></h2>
                        <?php
                    }
                    ?>
                    <h1><?php esc_html_e('Harry Potter Ideas', 'harrypotterideas'); ?></h1>
                    <?php
                } elseif (is_archive()) {
                    the_archive_title('<h1 class="page-title">', '</h1>');
                } elseif (is_404()) {
                    ?>
                    <h1><?php esc_html_e("Couldn't Be Found", 'harrypotterideas'); ?></h1>
                    <?php
                } elseif (is_search()) {
                    $search_title = sprintf('%s %s', __('Search results for: ', 'harrypotterideas'), get_search_query());
                    ?>
                    <h1 class="page-title"><?php echo esc_html($search_title); ?></h1>
                    <?php
                }
                ?>
            </div>
        </div>
    </div>
</section>

<!--Subscribe Bar-->
<section class="subscribe-bar">
    <div class="container">
        <div class="row flex-vertical-center">
            <div class="col-sm-6">
                <p><?php echo wp_kses_post((get_theme_mod('subscribe_text', '<p><strong>Stay up to date with the latest magic posts!</strong> Enter your email - you can unsubscribe anytime!</p>'))) ?></p>
            </div>
            <div class="col-sm-6">
                <?php
                $b2w_form_html = get_theme_mod('subscribe_form', '<form class="" action="index.html" method="post"><div class="row"><div class="col-sm-6"><input type="text" name="" value=""></div> <div class="col-sm-6"><button type="button" name="button" class="btn btn-invert">Subscribe!</button></div></div></form>');

                echo $b2w_form_html;
                ?>
            </div>
        </div>
    </div>
</section>
