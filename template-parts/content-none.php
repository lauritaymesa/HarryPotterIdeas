<?php
/**
 * standard Excerpt Harry Potter Ideas When no content is available
 * 
 *  
 * @package HarryPotterIdeas
 * @since Harry Potter Ideas 1.0
 */

 if ( is_home() && current_user_can( 'publish_posts' ) ) {

   printf(
 		'<p>' . wp_kses(
 			/* translators: 1: link to WP admin new post page. */
 			__( 'Ready to publish your first post? <a href="%1$s">Get started here</a>.', 'harrypoterideas' ),
 			array(
 				'a' => array(
 					'href' => array(),
 				),
 			)
 		) . '</p>',
 		esc_url( admin_url( 'post-new.php' ) )
 	);

 } elseif ( is_search() ) {
?>

<div class="search-results-none">
  <h2><?php esc_html_e( 'Not Found', 'harrypoterideas' ); ?></h2>
  <p><?php esc_html_e( 'The content you are looking for is no longer available.', 'harrypoterideas' ); ?></p>
</div>

<?php
  get_search_form();

 } else {
?>

<div class="search-results-none">
  <h2><?php esc_html_e( 'Not Found', 'harrypoterideas' ); ?></h2>
  <p><?php esc_html_e( 'The content you are looking for is no longer available.', 'harrypoterideas' ); ?></p>
</div>

<?php
  get_search_form();
}
?>


<!-- <article class="post my-5">
    <div class="meta">
        <span>Sep 12, 2021</span>
    </div>
    <h2><a href="#">Blog Post Title</a></h2>
    <p class="excerpt">
        Lorem Ipsum es simplemente el texto de relleno de las imprentas y archivos de texto. Lorem Ipsum ha sido el texto de relleno estándar de las industrias desde el año 1500, cuando un impresor (N. del T. persona que se dedica a la imprenta) desconocido usó una galería de textos y los mezcló de tal manera que logró hacer un libro de textos especimen
    </p>
    <a href="#" class="read-more">Read the full post &rarr;</a>
</article> -->
