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
    ?>

    <div class="fsapi-single-product" style="max-width:800px; margin:40px auto;">
        <h2><?php echo esc_html($product['title']); ?></h2>
        <img src="<?php echo esc_url($product['image']); ?>" style="max-height:300px; object-fit:contain;"><br>
        <p><strong>Price:</strong> $<?php echo esc_html($product['price']); ?></p>
        <p><strong>Category:</strong> <?php echo esc_html($product['category']); ?></p>
        <p><?php echo esc_html($product['description']); ?></p>
    </div>

    <?php
}

?>