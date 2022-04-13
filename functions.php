<?php
add_action('wp_enqueue_scripts', 'tutsplus_parent_styles');
functino tutsplus_parent_styles() {

    wp_enqueue_style('parent-style', get_template_directory_uri.'/style.css');

}

/* Custom script with no dependencies, enqueued in the header */
add_action('wp_enqueue_scripts', 'tutsplus_enqueue_custom_js');
function tutsplus_enqueue_custom_js() {
    wp_enqueue_script('custom', get_stylesheet_directory_uri().'/scripts/filesaver.js');
}
?>