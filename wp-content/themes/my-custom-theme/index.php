<?php get_header(); ?>

<?php
    // if ( have_posts() ) {
    //     while ( have_posts() ) {
    //         the_post();
    //         get_template_part( 'pages' );
    //     }
    // }
?>

<h1>from index.php</h1>
<h1><?php echo get_post_type(); ?></h1>

<?php get_footer(); ?>