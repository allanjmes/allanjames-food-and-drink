<?php get_header(); ?>

<!-- LOAD FILES DEPENDING ON ARCHIVE TYPE -->
<?php
    if (is_post_type_archive('recipe')) :
        require get_template_directory() . '/views/pages/recipe-page.php';
    elseif (is_tax('recipe_category')) :
        require get_template_directory() . '/views/pages/single-recipe-category-page.php';
    else:
        echo 'No Content from archive.php';
    endif;
?>

<?php get_footer(); ?>