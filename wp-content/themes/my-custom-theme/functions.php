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

function my_custom_theme_scripts() {
    if (is_vite_running()) {
        // Inject Vite HMR client for hot reloads
        add_action('wp_footer', function () {
            // Vite HMR Client
            echo '<script type="module" src="http://localhost:5173/@vite/client"></script>';
            // Vite main script
            echo '<script type="module" src="http://localhost:5173/js/index.js"></script>';
        });
    } else {
        // Production build
        wp_enqueue_script(
            'theme-js',
            get_template_directory_uri() . '/dist/bundle.js',
            [],
            filemtime(get_template_directory() . '/dist/bundle.js'),
            true
        );

        // Enqueue built CSS
        $css_file = get_template_directory() . '/dist/bundle.css';
        if (file_exists($css_file)) {
            wp_enqueue_style(
                'theme-css',
                get_template_directory_uri() . '/dist/bundle.css',
                [],
                filemtime($css_file)
            );
        }
    }
}
add_action('wp_enqueue_scripts', 'my_custom_theme_scripts');