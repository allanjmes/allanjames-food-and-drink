<?php
function tmd_render_single_meal_page($meal_id) {
    $response = wp_remote_get('https://www.themealdb.com/api/json/v1/1/lookup.php?i=' . intval($meal_id));
    if (is_wp_error($response)) {
        wp_die('Error fetching meal details.');
    }

    $body = wp_remote_retrieve_body($response);
    $data = json_decode($body, true);
    $meal = $data['meals'][0];

    if (!$meal) {
        wp_die('Meal not found.');
    }

    get_header();

    echo '<div class="tmd-meal-detail" style="max-width:600px; margin:auto;">';
    echo '<h2>' . esc_html($meal['strMeal']) . '</h2>';
    echo '<img src="' . esc_url($meal['strMealThumb']) . '" style="width:100%; height:auto;">';
    echo '<p><strong>Category:</strong> ' . esc_html($meal['strCategory']) . '</p>';
    echo '<p><strong>Area:</strong> ' . esc_html($meal['strArea']) . '</p>';
    echo '<h3>Instructions</h3>';
    echo '<p>' . nl2br(esc_html($meal['strInstructions'])) . '</p>';

    // Display ingredients and measurements
    echo '<h3>Ingredients</h3>';
    echo '<ul>';
    for ($i = 1; $i <= 20; $i++) {
        $ingredient = $meal["strIngredient{$i}"];
        $measure = $meal["strMeasure{$i}"];
        if ($ingredient && $ingredient !== '') {
            echo '<li>' . esc_html($ingredient . ' - ' . $measure) . '</li>';
        }
    }
    echo '</ul>';

    echo '</div>';

    get_footer();
}
