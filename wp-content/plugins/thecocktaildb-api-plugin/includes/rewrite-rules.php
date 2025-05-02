<?php
function tcd_add_rewrite_rules() {
    add_rewrite_rule('^cocktails/([0-9]+)/?$', 'index.php?tcd_cocktail_id=$matches[1]', 'top');
}
add_action('init', 'tcd_add_rewrite_rules');

function tcd_add_query_vars($vars) {
    $vars[] = 'tcd_cocktail_id';
    return $vars;
}
add_filter('query_vars', 'tcd_add_query_vars');

function tcd_template_redirect() {
    $cocktail_id = get_query_var('tcd_cocktail_id');
    if ($cocktail_id) {
        tcd_render_single_cocktail_page($cocktail_id);
        exit;
    }
}
add_action('template_redirect', 'tcd_template_redirect');
