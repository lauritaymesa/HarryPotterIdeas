<?php
/*
Enqueue scripts and styles
*/

if (!function_exists('b2w_theme_setup')) {
    function b2w_theme_setup() {
        // Código para configurar el tema
        load_theme_textdomain('harrypotterideas', get_template_directory() . '/languages');
        add_theme_support('title-tag');
        add_theme_support('post-thumbnails');
        add_theme_support('html5', array(
            'comment-list',
            'comment-form',
            'search-form',
            'gallery',
            'caption'
        ));
        add_theme_support('customize-selective-refresh-widgets');
        add_theme_support('responsive-embeds');

        register_nav_menus(array(
            'primary' => esc_html__('Primary Menu', 'harrypotterideas')
        ));
    }
}
add_action('after_setup_theme', 'b2w_theme_setup');


function b2w_assets(){

    // Equeue CSS Files

    wp_enqueue_style( 'google-font', 'https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap',  array(), '1.0', 'all' );

    wp_enqueue_style( 'bootstrap', get_theme_file_uri('assets/css/bootstrap.min.css'),  array(), 'v5.3.0-alpha3', 'all' );

    wp_enqueue_style( 'flaticon', get_theme_file_uri('assets/font/flaticon.css'),  array(), false, 'all' );

    // Main CSS Files

    wp_enqueue_style('harrypotterideas', get_stylesheet_uri(), array('bootstrap'), false, 'all');

    // Equeue js Files


    wp_enqueue_script( 'bootstrap', get_theme_file_uri( 'assets/js/bootstrap.min.js' ), array(), 'v5.3.0-alpha3', true );

    wp_enqueue_script( 'harrypotterideas-js', get_theme_file_uri( 'assets/js/main-script.js' ), array( 'jquery', 'jquery-ui-core', 'jquery-ui-selectmenu' ), false, true );

    if( is_singular() && comments_open() && get_option ('thread_comments')) {

        wp_enqueue_script('comment-reply');
    }
}

add_action( 'wp_enqueue_scripts','b2w_assets');

//Read more

function b2w_excerpt_readmore( $more ) {
    return '...';
}

add_filter( 'excerpt_more', 'b2w_excerpt_readmore' );

// Costume Paginations

function b2w_pagination() {
    global $wp_query;
    $links = paginate_links(
        array( 
            'current' => max(1, get_query_var('paged')),
            'total' => $wp_query->max_num_pages,
            'type' => 'list',
            'prev_text' => '&larr;',
            'next_text' => '&rarr;'
        )
    );

    $links = '<nav class="b2w_pagination">' . $links;
    $links .= '</nav>';
    echo wp_kses_post($links);
}

// page transitions



?>




