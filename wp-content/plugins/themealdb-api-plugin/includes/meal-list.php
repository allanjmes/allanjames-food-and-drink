<?php
function tmd_display_meal_cards() {
    $cache_key = 'themealdb_all_meals';
    $meals = get_transient($cache_key);

    if (!$meals || $meals) {
        $response = wp_remote_get('https://www.themealdb.com/api/json/v1/1/search.php?s=');
        if (is_wp_error($response)) return '<p>Error fetching meals.</p>';
        $body = wp_remote_retrieve_body($response);
        $data = json_decode($body, true);
        $meals = $data['meals'];
        set_transient($cache_key, $meals, 60 * 10); // Cache for 10 minutes
    }

    if (!$meals) return '<p>No meals found.</p>';

    $output = '<div class="tmd-meal-grid" style="display:flex; flex-wrap:wrap; gap:20px;">';

    foreach ($meals as $meal) {
        $output .= '<div class="tmd-meal-card" style="border:1px solid #ccc; width:200px; padding:10px; text-align:center;">';
        $output .= '<a href="' . esc_url(site_url('/meals/' . $meal['idMeal'])) . '" style="text-decoration:none; color:inherit;">';
        $output .= '<img src="' . esc_url($meal['strMealThumb']) . '" style="height:150px; object-fit:cover;"><br>';
        $output .= '<h4>' . esc_html($meal['strMeal']) . '</h4>';
        $output .= '</a>';
        $output .= '</div>';
    }

    $output .= '</div>';

    return $output;
}
add_shortcode('themealdb_meal_cards', 'tmd_display_meal_cards');
