<?php
/**
 * Plugin Name: LinguaQuiz test
 */
function my_function_admin_bar(){ return false; }
add_filter( 'show_admin_bar' , 'my_function_admin_bar');

function media_init() {
    wp_enqueue_style('main.css', get_template_directory_uri() . '/assets/css/styles_output/styles/main.css');
}
add_action('wp_enqueue_scripts','media_init');

function drives_include() {

    wp_register_script('drives1',get_template_directory_uri() . '/assets/js/quiz_redirect.js');

    wp_enqueue_script('drives1');
}
add_action('wp_enqueue_scripts','drives_include');

/**
 * Customizer additions.
 */

