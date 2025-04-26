<?php get_header(); ?>

<!-- LOAD FILES DEPENDING ON POST TYPE -->
<?php
    if (get_post_type() === 'recipe') :
        require_once get_template_directory() . '/views/pages/single-recipe.php';
    elseif (is_tax('recipe_category')) :
        require_once get_template_directory() . '/views/pages/single-recipe-category-page.php';
    else:
        echo 'No Content from single.php';
    endif;
?>

<?php get_footer(); ?>