<?php
/**
 * Harry Potter Themple for 404 Not Found Page
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
            <div class="col-lg-12 col-md-8 offset-md-0 overflow-hidden">
                <div class="image-404  text-center">
                    <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/404.jpg" alt="404" class="img-fluid">
                </div>

                <h3 class="text-center"><?php esc_html_e('Sorry, this page can\'t be found', 'harrypotterideas'); ?></h3>

                <div class="button-box text-center">
                    <a href="<?php echo esc_url(home_url('/')); ?>" class="btn btn-primary">
                        <?php esc_html_e('Back to Home', 'harrypotterideas'); ?>
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>

<?php
get_footer();
?>
