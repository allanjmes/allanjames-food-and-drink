<h1>hello from single-recipe-category</h1>

<?php
$term = get_queried_object();

if ($term && !is_wp_error($term)) {
    $term_slug = $term->slug;
    echo '<h2>Current Term Slug: ' . esc_html($term_slug) . '</h2>';
}

?>
<h1>Recipes in "<?php echo esc_html($term->name); ?>"</h1>

<?php
$term = get_queried_object();

$args = [
    'post_type' => 'recipe',
    'posts_per_page' => -1,
    'tax_query' => [
        [
            'taxonomy' => 'recipe_category',
            'field'    => 'slug',
            'terms'    => $term->slug,
        ],
    ],
];

$recipe_query = new WP_Query($args);

if ($recipe_query->have_posts()) :
    echo '<ul>';
    while ($recipe_query->have_posts()) : $recipe_query->the_post(); ?>
        <li><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></li>
    <?php endwhile;
    echo '</ul>';
    wp_reset_postdata();
else :
    echo '<p>No recipes found in this category.</p>';
endif;
?>
?>

