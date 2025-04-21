<?php
    $image_id = get_post_meta(get_the_ID(), 'featured_image', true);
    $featured_image = wp_get_attachment_image_url($image_id, 'full');
    $image_id_banner = get_post_meta(get_the_ID(), 'featured_banner', true);
    $featured_banner = wp_get_attachment_image_url($image_id_banner, 'full');
    $prep_time = get_post_meta(get_the_ID(), 'preparation_time', true);
    $cooking_time = get_post_meta(get_the_ID(), 'cooking_time', true);
    $total_cook_time = get_post_meta(get_the_ID(), 'total_time', true);
    $ingredients = get_post_meta(get_the_ID(), 'ingredients', true);
    $how_to_make = get_post_meta(get_the_ID(), 'how_to_make', true);
    $serving = get_post_meta(get_the_ID(), 'serving_suggestion', true);
?>

<section class="" style="max-height: 500px; overflow: hidden; display: block; position: relative;">
    <?php
        if ( !empty($featured_banner) ) {
            ?>
                <img
                    src="<?php echo $featured_banner; ?>"
                    alt="Banner"
                    width="100%"
                    height="100%"
                    class="thumbnail"
                >
        <?php
        } else {
            ?>
                <img
                    src="<?php echo site_url() . '/wp-content/uploads/2025/04/food-recipe-veggie-banner.webp'; ?>"
                    alt="Banner"
                    width="100%"
                    height="100%"
                    class="thumbnail"
                >
            <?php
        }
    ?>
    <h1
        style="
        position: absolute;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
        z-index: 99;
        text-align: center;
        text-shadow: 5px 5px 3px #000;
        "
        class="display-1 text-primary fw-extrabold"
    >
        <?php echo get_the_title(); ?>
    </h1>
</section>

<section class="bg-tertiary py-5">
    <div class="container">
        <div class="row">
            <div class="col-12 col-md-6 d-flex flex-column justify-content-center align-items-center">
                <div class="d-flex flex-column justify-content-between mb-5">
                    <div class="d-flex justify-content-center align-items-center">
                        <img
                            src="<?php echo get_template_directory_uri(); ?>/assets/recipe/prep-food.svg"
                            height="150px"
                            width="auto"
                            alt=""
                        >
                    </div>
                    <div class="d-flex justify-content-center align-items-center">
                        <div>
                            <h4>Prep time: <?php echo $prep_time; ?> minutes</h4>
                            <h4>Cooking time: <?php echo $cooking_time; ?> minutes</h4>
                            <h4>Total time: <?php echo $total_cook_time; ?> minutes</h4>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-6">
                <div class="d-flex justify-content-center align-items-center">
                    <img
                        src="<?php echo $featured_image; ?>"
                        height="350px"
                        width="auto"
                        data-tilt
                        alt=""
                    >
                </div>
            </div>
        </div>
    </div>
</section>

<section class="bg-tertiary py-5">
    <div class="container">
        <h1 class="font-playfair display-4 text-secondary">Ingredients:</h1>
        <br>
        <span class="text-secondary"><?php echo $ingredients; ?></span>
    </div>
</section>

<section class="bg-primary py-5">
    <div class="container">
        <h1 class="font-playfair display-4 text-tertiary">How to make:</h1>
        <br>
        <span class=""><?php echo $how_to_make; ?></span>
    </div>
</section>

<?php
    if (!empty($serving)) {
        ?>
        <section class="bg-primary py-5">
            <div class="container">
                <h1 class="font-playfair display-4 text-tertiary">Serving:</h1>
                <br>
                <p class="ps-5"><?php echo $serving; ?></p>
            </div>
        </section>
        <?php
    }
?>