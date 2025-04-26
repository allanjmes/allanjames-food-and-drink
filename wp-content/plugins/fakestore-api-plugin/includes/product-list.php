<?php

function fsapi_display_products_cards() {
    $cache_key = 'fakestore_all_products';
    $products = get_transient($cache_key);

    if (!$products) {
        $response = wp_remote_get('https://fakestoreapi.com/products');
        if (is_wp_error($response)) return '<p>Error fetching products.</p>';
        $body = wp_remote_retrieve_body($response);
        $products = json_decode($body, true);
        set_transient($cache_key, $products, 60 * 10); // 10-minute cache
    }
    ?>

    <div class="fsapi-product-grid" style="display:flex; flex-wrap:wrap; gap:20px;">

    <?php
    foreach ($products as $product) {
        ?>
        <div class="fsapi-product-card" style="border:1px solid #ccc; width:200px; padding:10px; text-align:center;">
            <a href="<?php echo site_url('/product/' . $product['id']); ?>" style="text-decoration:none; color:inherit;">
            <img src="<?php echo esc_url($product['image']); ?>" style="height:150px; object-fit:contain;"><br>
            <h4><?php echo esc_html($product['title']); ?></h4>
            <strong>$<?php echo esc_html($product['price']); ?></strong>
            </a>
        </div>
        <?php
    }
    ?>

    </div>

    <?php
}
add_shortcode('fakestore_product_cards', 'fsapi_display_products_cards');

?>