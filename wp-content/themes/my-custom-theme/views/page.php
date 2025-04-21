<!-- LOAD FILES DEPENDING ON THE PAGES -->

<?php
    if ( is_page( 'home' ) ) :
        require locate_template( 'views/pages/home.php' );
    elseif ( is_page( 'sample-page' ) ) :
        require locate_template( 'views/pages/sample-page.php' );
    // elseif ( is_page( 'recipe' ) ) :
    //     require locate_template( 'views/pages/recipe.php' );
    endif;
?>