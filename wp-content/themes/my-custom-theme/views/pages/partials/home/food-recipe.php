<section class="bg-primary p-5">
    <div class="my-lg-5">
        <div class="py-5">
            <h1 class="display-1 fw-extrabold text-center text-secondary">Food Recipe</h1>
        </div>
        <div class="glide py-5" id="food-recipe-carousel">
            <div class="glide__track" data-glide-el="track">
                <ul class="glide__slides">
                    <?php
                        $args = [
                            'post_type' => 'recipe',
                            'post_status' => 'publish'
                        ];
            
                        $query = new WP_Query($args);

                        while ($query->have_posts()) :
                            $query->the_post();
                            $image_id = get_post_meta(get_the_ID(), 'featured_image', true);
                            $image = wp_get_attachment_image_url($image_id, 'full');
                            ?>
                                <li class="glide__slide">
                                    <a href="<?php the_permalink(); ?>" >
                                        <img
                                            src="<?php echo $image; ?>"
                                            height="200px"
                                            width="100%"
                                            alt=""
                                        >
                                        <h3 class="py-5 text-center text-secondary fw-bold"><?php echo get_the_title(); ?></h3>
                                    </a>
                                </li>
                            <?php
                        endwhile;
                        wp_reset_postdata();
                    ?>
                </ul>
            </div>
        </div>
    </div>
</section>