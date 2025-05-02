<?php
function tcd_render_single_cocktail_page($cocktail_id) {
    $response = wp_remote_get('https://www.thecocktaildb.com/api/json/v1/1/lookup.php?i=' . intval($cocktail_id));
    if (is_wp_error($response)) {
        wp_die('Error fetching cocktail details.');
    }

    $body = wp_remote_retrieve_body($response);
    $data = json_decode($body, true);
    $cocktail = $data['drinks'][0];

    if (!$cocktail) {
        wp_die('Cocktail not found.');
    }

    get_header();

    echo '<div class="tcd-cocktail-detail" style="max-width:600px; margin:auto;">';
    echo '<h2>' . esc_html($cocktail['strDrink']) . '</h2>';
    echo '<img src="' . esc_url($cocktail['strDrinkThumb']) . '" style="width:100%; height:auto;">';
    echo '<p><strong>Category:</strong> ' . esc_html($cocktail['strCategory']) . '</p>';
    echo '<p><strong>Alcoholic:</strong> ' . esc_html($cocktail['strAlcoholic']) . '</p>';
    echo '<p><strong>Glass:</strong> ' . esc_html($cocktail['strGlass']) . '</p>';
    echo '<h3>Instructions</h3>';
    echo '<p>' . nl2br(esc_html($cocktail['strInstructions'])) . '</p>';

    // Display ingredients and measurements
    echo '<h3>Ingredients</h3>';
    echo '<ul>';
    for ($i = 1; $i <= 15; $i++) {
        $ingredient = $cocktail["strIngredient{$i}"];
        $measure = $cocktail["strMeasure{$i}"];
        if ($ingredient && $ingredient !== '') {
            echo '<li>' . esc_html($ingredient . ' - ' . $measure) . '</li>';
        }
    }
    echo '</ul>';

    echo '</div>';

    get_footer();
}
