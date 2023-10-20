<?php
function enqueue_styles() {
    wp_enqueue_style('style', get_template_directory_uri() .'/style.css', array(), '1.0', 'all');
}

function enqueue_script() {
    wp_enqueue_script('index', get_template_directory_uri() . '/index.js', array('jquery'), '1.0', true);
}

function redirect_404() {
    global $wp_query;

    if ($wp_query->is_404) {
        include(get_template_directory() . '/404.php');
        exit;
    }
}
add_action('wp_enqueue_scripts', 'enqueue_styles');
add_action('wp_enqueue_scripts', 'enqueue_script');
add_action('template_redirect', 'redirect_404');
?>
