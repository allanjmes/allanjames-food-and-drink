<?php get_header(); ?>

<!-- LOAD FILES DEPENDING ON ARCHIVE TYPE -->
<?php
    if (is_post_type_archive('recipe')) :
        require_once get_template_directory() . '/views/pages/recipe-page.php';
    else:
        echo 'No Content from archive.php';
    endif;
?>

<?php get_footer(); ?>