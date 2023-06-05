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

    $current_page =  "https://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";


    if ($current_page == "https://".getenv('HTTP_HOST')."/"){
        wp_register_script('drives1',get_template_directory_uri() . '/assets/js/quiz_redirect.js');
        wp_register_script('drives4',get_template_directory_uri() . '/assets/js/archive_redirect.js');
        wp_enqueue_script('drives1');
        wp_enqueue_script('drives4');
    }

    if ($current_page == "https://".getenv('HTTP_HOST')."/trial_quiz/"){
        wp_register_script('drives3',get_template_directory_uri() . '/assets/js/quiz_logic.js');
        wp_enqueue_script('drives3');
    }

    if ($current_page == "https://".getenv('HTTP_HOST')."/archive/"){
        wp_register_script('drives2',get_template_directory_uri() . '/assets/js/main_redirect.js');
        wp_enqueue_script('drives2');
    }
}
add_action('wp_enqueue_scripts','drives_include');

/**
 * Customizer additions.
 */

