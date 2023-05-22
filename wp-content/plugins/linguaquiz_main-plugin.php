<?php
/**
 * Plugin Name: LinguaQuiz test
 */
function my_function_admin_bar(){ return false; }
add_filter( 'show_admin_bar' , 'my_function_admin_bar');

function media_init() {
    wp_enqueue_style('reset.css', get_template_directory_uri() . '/assets/css/reset.css');
    wp_enqueue_style('main.css', get_template_directory_uri() . '/assets/css/main.css');
    wp_enqueue_style('announcement.css', get_template_directory_uri() . '/assets/css/announcement.css');
    wp_enqueue_style('basic_information.css', get_template_directory_uri() . '/assets/css/basic_information.css');
    wp_enqueue_style('header.css', get_template_directory_uri() . '/assets/css/header.css');
    wp_enqueue_style('footer.css', get_template_directory_uri() . '/assets/css/footer.css');
    wp_enqueue_style('trial_quiz.css', get_template_directory_uri() . '/assets/css/trial_quiz.css');
    wp_enqueue_style('quiz_page.css', get_template_directory_uri() . '/assets/css/quiz_page.css');

}
add_action('wp_enqueue_scripts','media_init');

function drives_include() {


}
add_action('wp_enqueue_scripts','drives_include');

/**
 * Customizer additions.
 */

