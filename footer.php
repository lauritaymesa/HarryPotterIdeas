
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
<html lang="en" dir="ltr">
  
<footer>
  <?php if (get_theme_mod('footer_calltoaction_visibility')){ ?>

    <div class="footer-calltoaction text-center">
      <div class="container">
        <div class="row">
          <div class="col-md-8 offset-md-2 overflow-hidden">
            <p class="sub-title"><?php echo wp_kses_post(get_theme_mod('footer_subtitle','Join now!'));?></p>
            <h2><?php echo wp_kses_post(get_theme_mod('footer_calltoaction_h2','Trendy Harry Potter Ideas'));?></h2>
            <p><?php echo wp_kses_post(get_theme_mod('footer_calltoaction_p','Stay up to date with the last magic post'));?></p>
            <a href="<?php echo wp_kses_post(get_theme_mod('url_footer_calltoaction_btn','#'));?>" class="btn btn-primary"><?php echo wp_kses_post(get_theme_mod('footer_calltoaction_btn','Subscribe!'));?></a>
          </div>
        </div>
      </div>
    </div>
    <div class="copyright text-center">
      <p><?php echo wp_kses_post(get_theme_mod('footer_copyright','Copyright Harry Potter ideas Fan Blog'));?></p>
    </div>

    <? } ?>

  </footer>

  <?php wp_footer(); ?>
 

</body>

</html>