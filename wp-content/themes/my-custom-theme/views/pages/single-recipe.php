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
        class="display-1 text-accent fw-extrabold"
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

<section class="bg-secondary py-5">
    <div class="container">
        <h1 class="font-playfair display-4 text-primary">Ingredients:</h1>
        <br>
        <span class="text-primary"><?php echo $ingredients; ?></span>
    </div>
</section>

<section class="bg-primary py-5">
    <div class="container">
        <h1 class="font-playfair display-4 text-secondary">How to make:</h1>
        <br>
        <span class="text-secondary"><?php echo $how_to_make; ?></span>
    </div>
</section>

<?php
    if (!empty($serving)) {
        ?>
        <section class="bg-primary py-5">
            <div class="container">
                <h1 class="font-playfair display-4 text-secondary">Serving:</h1>
                <br>
                <p class="text-secondary"><?php echo $serving; ?></p>
            </div>
        </section>
        <?php
    }
?>

<section class="bg-custom-blue py-3">
    <div class="infinite-sticker text-custom-dark-blue">
        <ul>
            <li>
                <span></span>
                <h1>TASTE GOOD</h1>
            </li>
            <li>
                <span></span>
                <h1>NATURE FRESH</h1>
            </li>
            <li>
                <span></span>
                <h1>HEALTHY SNACKS</h1>
            </li>
            <li>
                <span></span>
                <h1>RICH ANTIOXIDENT</h1>
            </li>
            <li>
                <span></span>
                <h1>NO PRESERVATIVES</h1>
            </li>
            <li>
                <span></span>
                <h1>HEALTHY FOOD</h1>
            </li>
            <li>
                <span></span>
                <h1>NO ADDITIVES</h1>
            </li>
            <li>
                <span></span>
                <h1>PURELY NATURAL</h1>
            </li>
        </ul>
        <ul aria-hidden="true">
            <li>
                <span></span>
                <h1>TASTE GOOD</h1>
            </li>
            <li>
                <span></span>
                <h1>NATURE FRESH</h1>
            </li>
            <li>
                <span></span>
                <h1>HEALTHY SNACKS</h1>
            </li>
            <li>
                <span></span>
                <h1>RICH ANTIOXIDENT</h1>
            </li>
            <li>
                <span></span>
                <h1>NO PRESERVATIVES</h1>
            </li>
            <li>
                <span></span>
                <h1>HEALTHY FOOD</h1>
            </li>
            <li>
                <span></span>
                <h1>NO ADDITIVES</h1>
            </li>
            <li>
                <span></span>
                <h1>PURELY NATURAL</h1>
            </li>
        </ul>
    </div>
</section>

<section class="" style="background-image: url('<?php echo get_template_directory_uri(); ?>/assets/home/green-background-banner.webp'); background-size: cover; background-repeat: no-repeat; background-position: center; height: 600px;">
    <div class="d-flex flex-column justify-content-center align-items-center h-100 gap-5">
        <h1 class="d-none display-lg-block display-2 fw-bold text-custom-green text-center w-75">
            Prebiotic protein platter support digestion, and energy with fiber-rich foods
        </h1>
        <h1 class="display-lg-none display-3 fw-bold text-custom-green text-center w-75" aria-hidden="true">
            Prebiotic protein platter support digestion, and energy with fiber-rich foods
        </h1>
        <div class="d-flex flex-column flex-md-row justify-content-between align-items-center gap-3 gap-md-5">
            <button class="btn-custom-yellow" style="width: 250px">
                <h1 class="fw-bold">
                    Explore
                </h1>
            </button>
            <button class="btn-accent text-secondary" style="width: 250px">
                <h1 class="fw-bold">
                    Order now
                </h1>
            </button>
        </div>
    </div>
</section>

<section class="bg-custom-green py-3">
    <div class="infinite-sticker text-custom-dark-green">
        <ul>
            <li>
                <span></span>
                <h1>TASTE GOOD</h1>
            </li>
            <li>
                <span></span>
                <h1>NATURE FRESH</h1>
            </li>
            <li>
                <span></span>
                <h1>HEALTHY SNACKS</h1>
            </li>
            <li>
                <span></span>
                <h1>RICH ANTIOXIDENT</h1>
            </li>
            <li>
                <span></span>
                <h1>NO PRESERVATIVES</h1>
            </li>
            <li>
                <span></span>
                <h1>HEALTHY FOOD</h1>
            </li>
            <li>
                <span></span>
                <h1>NO ADDITIVES</h1>
            </li>
            <li>
                <span></span>
                <h1>PURELY NATURAL</h1>
            </li>
        </ul>
        <ul aria-hidden="true">
            <li>
                <span></span>
                <h1>TASTE GOOD</h1>
            </li>
            <li>
                <span></span>
                <h1>NATURE FRESH</h1>
            </li>
            <li>
                <span></span>
                <h1>HEALTHY SNACKS</h1>
            </li>
            <li>
                <span></span>
                <h1>RICH ANTIOXIDENT</h1>
            </li>
            <li>
                <span></span>
                <h1>NO PRESERVATIVES</h1>
            </li>
            <li>
                <span></span>
                <h1>HEALTHY FOOD</h1>
            </li>
            <li>
                <span></span>
                <h1>NO ADDITIVES</h1>
            </li>
            <li>
                <span></span>
                <h1>PURELY NATURAL</h1>
            </li>
        </ul>
    </div>
</section>

<section class="py-5 my-lg-5" style="">
    <div class="d-flex flex-column justify-content-center align-items-center">
        <div>
            <h1 class="display-3 fw-bold text-center">OUR CUSTOMER <span class="text-accent">LOVES US</span></h1>
        </div>
        <div class="d-flex justify-content-center align-items-center">
            <div class="py-5 row justify-content-center gap-3 gap-lg-5">
                <div class="card col-12 col-md-6 col-lg-4 bg-custom-blue" id="card-custom">
                    <div class="card-body p-3 p-md-5 text-center">
                        <h3 class="fw-extrabold">
                            " I NEVER KNEW I COULD EAT HEALTHY MEALS UNTIL I FOUND THIS. IT'S BEEN AN ENLIGHTENING JOURNEY "
                        </h3>
                        <hr>
                        <h4 class="fw-bold">- POLINA MORROW</h4>
                    </div>
                </div>
                <div class="card col-12 col-md-6 col-lg-4 bg-custom-pink" id="card-custom">
                    <div class="card-body p-3 p-md-5 text-center">
                        <h3 class="fw-extrabold">
                            " I NEVER KNEW I COULD EAT HEALTHY MEALS UNTIL I FOUND THIS. IT'S BEEN AN ENLIGHTENING JOURNEY "
                        </h3>
                        <hr>
                        <h4 class="fw-bold">- POLINA MORROW</h4>
                    </div>
                </div>
                <div class="card col-12 col-md-6 col-lg-4 bg-custom-green" id="card-custom">
                    <div class="card-body p-3 p-md-5 text-center">
                        <h3 class="fw-extrabold">
                            " I NEVER KNEW I COULD EAT HEALTHY MEALS UNTIL I FOUND THIS. IT'S BEEN AN ENLIGHTENING JOURNEY "
                        </h3>
                        <hr>
                        <h4 class="fw-bold">- POLINA MORROW</h4>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="bg-custom-yellow py-5" style="">
    <div class="my-lg-5 d-flex flex-column justify-content-center align-items-center h-100 gap-5">
        <h1 class="display-2 fw-bold text-center w-75">
            Meet the high nutrition plates.
        </h1>
        <p style="width: 30%" class="d-none d-lg-block text-center fw-bold">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Omnis esse maxime laboriosam eveniet pariatur obcaecati?</p>
        <p style="width: 75%" class="d-lg-none text-center fw-bold" aria-hidden="true">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Omnis esse maxime laboriosam eveniet pariatur obcaecati?</p>
        <div class="d-flex flex-column flex-md-row justify-content-between align-items-center gap-3 gap-md-5">
            <button class="btn-accent text-secondary" style="width: 250px">
                <h1 class="fw-bold">
                    Explore
                </h1>
            </button>
            <button class="btn-secondary" style="width: 250px">
                <h1 class="fw-bold">
                    Order now
                </h1>
            </button>
        </div>
    </div>
</section>