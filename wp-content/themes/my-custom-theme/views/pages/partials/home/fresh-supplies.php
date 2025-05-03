<section class="my-5 py-lg-5">
    <div class="container h-100">
        <div class="row h-100 align-items-center">
            <div class="col-12 col-md-6 col-lg-8 mb-4 mb-md-0">
                <h1 class="display-3 fw-bold text-center text-md-start">FRESH SUPPLIES <span class="text-custom-green">ASSURE</span> SUPERIOR MEALS</h1>
            </div>
            <div class="col-12 col-md-6 col-lg-4">
                <p class="text-center text-md-start"><strong>Offers essential nutrients</strong> from 30 major ingredients, including avocado, sesame, capcicum, vegetables, and fruits.</p>
            </div>
        </div>
    </div>
    <div class="glide my-5 pt-5" id="food-recipe-carousel-2">
        <div class="glide__track" data-glide-el="track">
            <ul class="glide__slides">
                <?php
                    $terms = get_terms([
                        'taxonomy' => 'recipe_category', // Name of the taxonomy
                        'orderby'  => 'name',            // Sort terms alphabetically
                        'hide_empty' => false            // Show all terms even if they don't have posts
                    ]);
        
                    if (!empty($terms) && !is_wp_error($terms)) {
                        foreach ($terms as $term) {
                            $slug = $term->slug;
                            $term_pod = pods('recipe_category', $term->term_id);
                            $image_id = $term_pod->field('category_featured_image.ID'); // Get attachment ID
                            $image = wp_get_attachment_image_url($image_id, 'full');
                            ?>
                                <li class="glide__slide mx-3">
                                    <a href="<?php echo site_url() . '/recipe-category/' . $slug; ?>">
                                        <img
                                            src="<?php echo $image; ?>"
                                            height="200px"
                                            width="100%"
                                            alt=""
                                        >
                                        <h3 class="py-5 text-center text-primary fw-bold"><?php echo $term->name; ?></h3>
                                    </a>
                                </li>
                            <?php
                        }
                    }
                    wp_reset_postdata();
                ?>
            </ul>
        </div>
    </div>
</section>