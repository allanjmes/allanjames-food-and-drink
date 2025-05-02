<?php
    $term = get_queried_object();
?>

<section class="bg-tertiary py-5">
    <div class="my-lg-5">
        <div class="container text-center mb-5">
            <h1 class="fw-bold"><?php echo esc_html($term->name); ?></h1>
            <p class="mt-5">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Esse aspernatur iste, minus eaque nam odio incidunt quibusdam provident cupiditate, possimus ex optio. Explicabo, adipisci aperiam nobis, voluptate reiciendis fuga illo pariatur dolorum quae eligendi aliquam, enim sit. Sit quos error suscipit vel consequuntur magnam. Neque, autem soluta iste nostrum amet ea assumenda in! Ad sequi voluptates iste totam eos facilis illum, accusantium nulla, consequuntur doloribus eum, eius fugiat fugit ipsam repellat? Sapiente est nisi eligendi ad id voluptates saepe soluta pariatur. Temporibus architecto, quia, vero qui ex ad nesciunt, praesentium accusantium ducimus facere earum magnam odit corporis maxime nobis molestias?</p>
        </div>
    
        <div class="container py-5">
            <div class="row gap-2 gap-md-0">
                <?php

                $args = [
                    'post_type' => 'recipe',
                    'posts_per_page' => -1,
                    'tax_query' => [
                        [
                            'taxonomy' => 'recipe_category',
                            'field'    => 'slug',
                            'terms'    => $term->slug,
                        ],
                    ],
                ];

                $recipe_query = new WP_Query($args);

                if ($recipe_query->have_posts()) :
                    while ($recipe_query->have_posts()) :
                        $recipe_query->the_post();
                        $image_id = get_post_meta(get_the_ID(), 'featured_image', true);
                        $image = wp_get_attachment_image_url($image_id, 'full');
                        ?>
                            <div class="col-12 col-md-6 col-lg-3 mb-4" id="hover-img">
                                <a href="<?php the_permalink(); ?>" >
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
                                            <h5 class="card-title text-primary"><?php echo get_the_title(); ?></h5>
                                            <p class="card-text text-black pb-3">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Amet aperiam fugit accusantium corporis ullam tempore fugiat ea praesentium assumenda tenetur?</p>
                                            <a href="<?php the_permalink(); ?>" class="btn-primary text-white">Learn More</a>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        <?php
                    endwhile;
                    wp_reset_postdata();
                else :
                    echo '<p>No recipes found in this category.</p>';
                endif;
                ?>
            </div>
        </div>
    </div>
</section>