<?php
?>

<!-- LOAD FILES DEPENDING ON THE PAGES -->
 <!-- from page.php -->
<!-- PAGE TEMPLATES -->
<?php
    if ( is_page( 'home' ) ) :
        require locate_template( 'views/pages/home-page.php' );
    elseif ( is_page( 'sample-page' ) ) :
        require locate_template( 'views/pages/sample-page.php' );
    elseif ( is_page( 'recipe' ) ) :
        require locate_template( 'views/pages/recipe-page.php' );
    elseif ( is_page( 'development' ) ) :
        require locate_template( 'views/pages/development-page.php' );
    elseif ( is_page( 'web-design' ) ) :
        require locate_template( 'views/pages/web-design-page.php' );
    elseif ( is_page( 'contact-me' ) ) :
        require locate_template( 'views/pages/contact-me-page.php' );
    endif;
?>

