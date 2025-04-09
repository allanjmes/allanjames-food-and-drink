<?php
function my_custom_theme_setup() {
    add_theme_support('title-tag');
    register_nav_menus(
        array(
            'primary' => __('Primary Menu', 'my-custom-theme'),
        )
    );
}
add_action('after_setup_theme', 'my_custom_theme_setup');

function my_custom_theme_styles() {
    wp_enqueue_style('my-custom-style', get_stylesheet_uri());
}
add_action('wp_enqueue_scripts', 'my_custom_theme_styles');

function is_vite_running($host = 'localhost', $port = 5173) {
    $connection = @fsockopen($host, $port);
    if (is_resource($connection)) {
        fclose($connection);
        return true;
    }
    return false;
}