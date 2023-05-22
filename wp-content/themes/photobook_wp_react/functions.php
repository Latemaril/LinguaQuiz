<?php
/**
 * photobook functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package photobook
 */
//function register_my_session()
//{
//    if( !session_id() )
//    {
//        session_start();
//    }
//}
//
//add_action('init', 'register_my_session');
//


if ( ! defined( '_S_VERSION' ) ) {
    // Replace the version number of the theme on each release.
    define( '_S_VERSION', '1.0.0' );
}


/**
 * RedPixel func
 */

require_once __DIR__ . '/vendor/autoload.php';

/**
 * Head script init
 */

function add_js_to_head() {
    echo '<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>';
    // For DragAndDrop work
    // For JSX work
    echo '<script src="https://unpkg.com/babel-standalone@6.26.0/babel.min.js"></script>';
    echo '<script src="https://accounts.google.com/gsi/client"  async defer></script>';
}
// Add hook for admin <head></head>
add_action( 'admin_head', 'add_js_to_head' );
// Add hook for front-end <head></head>
add_action( 'wp_head', 'add_js_to_head' );

/**
 * Page script init
 */

function add_jsx_script_init() {
    wp_register_script('react-script',get_template_directory_uri() . '/assets/js/react-script.js');
    add_filter("script_loader_tag", "add_module_to_my_script", 10, 3);
    function add_module_to_my_script($tag, $handle, $src)
    {
        if ("react-script" === $handle) {
            $tag = '<script type="text/babel" src="' . esc_url($src) . '"></script>';
        }
        return $tag;
    }
    wp_enqueue_script('react-script');
}


/**
 * Styles init
 */



/**
 * Implement the Custom Header feature.
 */
require get_template_directory() . '/inc/custom-header.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Functions which enhance the theme by hooking into WordPress.
 */
require get_template_directory() . '/inc/template-functions.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';

/**
 * Load Jetpack compatibility file.
 */
if ( defined( 'JETPACK__VERSION' ) ) {
    require get_template_directory() . '/inc/jetpack.php';
}


