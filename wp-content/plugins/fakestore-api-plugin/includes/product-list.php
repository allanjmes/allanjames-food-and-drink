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

    <section class="bg-tertiary py-5">
        <div class="my-lg-5">
            <div class="container text-center mb-5">
                <h1 class="fw-bold">Store from FakeStore API</h1>
                <p class="mt-5">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Esse aspernatur iste, minus eaque nam odio incidunt quibusdam provident cupiditate, possimus ex optio. Explicabo, adipisci aperiam nobis, voluptate reiciendis fuga illo pariatur dolorum quae eligendi aliquam, enim sit. Sit quos error suscipit vel consequuntur magnam. Neque, autem soluta iste nostrum amet ea assumenda in! Ad sequi voluptates iste totam eos facilis illum, accusantium nulla, consequuntur doloribus eum, eius fugiat fugit ipsam repellat? Sapiente est nisi eligendi ad id voluptates saepe soluta pariatur. Temporibus architecto, quia, vero qui ex ad nesciunt, praesentium accusantium ducimus facere earum magnam odit corporis maxime nobis molestias?</p>
            </div>
            
            <?php if ($products) : ?>
                <div class="container py-5">
                    <div class="row gap-2 gap-md-0">
                        <?php foreach ($products as $product) { ?>
                            <div class="col-12 col-md-6 col-lg-3 mb-4" id="hover-img">
                                <a href="<?php echo site_url('/product/' . $product['id']); ?>">
                                    <div class="card h-100">
                                        <div class="h-100 p-5" style="">
                                            <img
                                                src="<?php echo esc_url($product['image']); ?>"
                                                class="card-img-top"
                                                width="auto"
                                                height="300px"
                                                style="overflow: hidden;"
                                                alt="..."
                                            >
                                        </div>
                                        <div class="card-body h-100 d-flex flex-column justify-content-between">
                                            <h5 class="card-title text-primary"><?php echo esc_html($product['title']); ?></h5>
                                            <p class="card-text text-black pb-3">$<?php echo esc_html($product['price']); ?></p>
                                            <a href="<?php echo site_url('/product/' . $product['id']); ?>" class="btn-primary text-white">View</a>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        <?php } ?>
                    </div>
                </div>
            <?php elseif (!$products) : ?>
                <div class="container">
                    <h3>No Products Found.</h3>
                </div>
            <?php endif; ?>

        </div>
    </section>

    <?php
}
add_shortcode('fakestore_product_cards', 'fsapi_display_products_cards');

?>