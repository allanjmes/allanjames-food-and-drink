<?php
function tcd_display_cocktail_cards() {
    // $cache_key = 'thecocktaildb_all_cocktails';
    // $cocktails = get_transient($cache_key);

    // if (!$cocktails || $cocktails) {
        $response = wp_remote_get('https://www.thecocktaildb.com/api/json/v1/1/filter.php?c=Cocktail');
        if (is_wp_error($response)) return '<p>Error fetching cocktails.</p>';
        $body = wp_remote_retrieve_body($response);
        $data = json_decode($body, true);
        $cocktails = $data['drinks'];
        // set_transient($cache_key, $cocktails, 60 * 10); // Cache for 10 minutes
    // }

    // if (!$cocktails) return '<p>No cocktails found.</p>';

    $output = '<div class="tcd-cocktail-grid" style="display:flex; flex-wrap:wrap; gap:20px;">';

    foreach ($cocktails as $cocktail) {
        $output .= '<div class="tcd-cocktail-card" style="border:1px solid #ccc; width:200px; padding:10px; text-align:center;">';
        $output .= '<a href="' . esc_url(site_url('/cocktails/' . $cocktail['idDrink'])) . '" style="text-decoration:none; color:inherit;">';
        $output .= '<img src="' . esc_url($cocktail['strDrinkThumb']) . '" style="height:150px; object-fit:cover;"><br>';
        $output .= '<h4>' . esc_html($cocktail['strDrink']) . '</h4>';
        $output .= '</a>';
        $output .= '</div>';
    }

    $output .= '</div>';

    return $output;
}
add_shortcode('thecocktaildb_cocktail_cards', 'tcd_display_cocktail_cards');
