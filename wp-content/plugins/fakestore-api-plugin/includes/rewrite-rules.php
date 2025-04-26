<?php

function fsapi_add_rewrite_rules() {
    add_rewrite_rule('^product/([0-9]+)/?$', 'index.php?fsapi_product_id=$matches[1]', 'top');
}
add_action('init', 'fsapi_add_rewrite_rules');

function fsapi_add_query_vars($vars) {
    $vars[] = 'fsapi_product_id';
    return $vars;
}
add_filter('query_vars', 'fsapi_add_query_vars');

function fsapi_template_redirect() {
    $product_id = get_query_var('fsapi_product_id');
    if ($product_id) {
        fsapi_render_single_product_page($product_id);
        exit;
    }
}
add_action('template_redirect', 'fsapi_template_redirect');

?>