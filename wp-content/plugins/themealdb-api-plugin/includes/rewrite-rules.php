<?php
function tmd_add_rewrite_rules() {
    add_rewrite_rule('^meals/([0-9]+)/?$', 'index.php?tmd_meal_id=$matches[1]', 'top');
}
add_action('init', 'tmd_add_rewrite_rules');

function tmd_add_query_vars($vars) {
    $vars[] = 'tmd_meal_id';
    return $vars;
}
add_filter('query_vars', 'tmd_add_query_vars');

function tmd_template_redirect() {
    $meal_id = get_query_var('tmd_meal_id');
    if ($meal_id) {
        tmd_render_single_meal_page($meal_id);
        exit;
    }
}
add_action('template_redirect', 'tmd_template_redirect');
