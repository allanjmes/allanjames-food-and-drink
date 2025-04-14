<?php
    if ( is_page( 'home' ) ) :
        require locate_template( 'views/pages/home.php' );
    elseif ( is_page( 'sample-page' ) ) :
        require locate_template( 'views/pages/sample-page.php' );
    endif;
?>