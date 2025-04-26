<?php

function fsapi_render_single_product_page($id) {
    $response = wp_remote_get("https://fakestoreapi.com/products/$id");
    if (is_wp_error($response)) {
        wp_die('Error fetching product');
    }

    $product = json_decode(wp_remote_retrieve_body($response), true);

    if (empty($product)) {
        wp_die('Product not found');
    }

    get_header();
    echo '<div class="fsapi-single-product" style="max-width:800px; margin:40px auto;">';
    echo '<h2>' . esc_html($product['title']) . '</h2>';
    echo '<img src="' . esc_url($product['image']) . '" style="max-height:300px; object-fit:contain;"><br>';
    echo '<p><strong>Price:</strong> $' . esc_html($product['price']) . '</p>';
    echo '<p><strong>Category:</strong> ' . esc_html($product['category']) . '</p>';
    echo '<p>' . esc_html($product['description']) . '</p>';
    echo '</div>';
    get_footer();
}


?>