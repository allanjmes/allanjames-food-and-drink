<section class="bg-tertiary py-5">
    <div class="my-lg-5">
        <div class="container text-center mb-5">
            <h1 class="fw-bold">Food Categories</h1>
            <p class="mt-5">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Esse aspernatur iste, minus eaque nam odio incidunt quibusdam provident cupiditate, possimus ex optio. Explicabo, adipisci aperiam nobis, voluptate reiciendis fuga illo pariatur dolorum quae eligendi aliquam, enim sit. Sit quos error suscipit vel consequuntur magnam. Neque, autem soluta iste nostrum amet ea assumenda in! Ad sequi voluptates iste totam eos facilis illum, accusantium nulla, consequuntur doloribus eum, eius fugiat fugit ipsam repellat? Sapiente est nisi eligendi ad id voluptates saepe soluta pariatur. Temporibus architecto, quia, vero qui ex ad nesciunt, praesentium accusantium ducimus facere earum magnam odit corporis maxime nobis molestias?</p>
        </div>
    
        <div class="container py-5">
            <div class="row gap-2 gap-md-0">

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
                        <div class="col-12 col-md-6 col-lg-3 mb-4" id="hover-img">
                            <a href="<?php echo site_url() . '/recipe-category/' . $slug; ?>">
                                <div class="card h-100">
                                    <div class="h-100" style="display: block; overflow: hidden;">
                                        <img
                                            src="<?php echo $image; ?>"
                                            class="card-img-top"
                                            
                                            width="auto"
                                            height="250px"
                                            style="overflow: hidden;"
                                            alt="..."
                                        >
                                    </div>
                                    <div class="card-body h-100 d-flex flex-column justify-content-between">
                                        <h5 class="card-title text-primary"><?php echo $term->name; ?></h5>
                                        <p class="card-text text-black pb-3">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Amet aperiam fugit accusantium corporis ullam tempore fugiat ea praesentium assumenda tenetur?</p>
                                        <a href="<?php echo site_url() . '/recipe-category/' . $slug; ?>" class="btn-primary text-white">Learn More</a>
                                    </div>
                                </div>
                            </a>
                        </div>
                    <?php
                }
            } else {
                echo 'No categories found.';
            }

            wp_reset_postdata(); ?>

            </div>
        </div>

    </div>
</section>