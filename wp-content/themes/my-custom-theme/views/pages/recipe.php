<section class="bg-tertiary">
    <div class="container text-center py-5">
        <h1 class="">Recipes</h1>
        <p class="">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Esse aspernatur iste, minus eaque nam odio incidunt quibusdam provident cupiditate, possimus ex optio. Explicabo, adipisci aperiam nobis, voluptate reiciendis fuga illo pariatur dolorum quae eligendi aliquam, enim sit. Sit quos error suscipit vel consequuntur magnam. Neque, autem soluta iste nostrum amet ea assumenda in! Ad sequi voluptates iste totam eos facilis illum, accusantium nulla, consequuntur doloribus eum, eius fugiat fugit ipsam repellat? Sapiente est nisi eligendi ad id voluptates saepe soluta pariatur. Temporibus architecto, quia, vero qui ex ad nesciunt, praesentium accusantium ducimus facere earum magnam odit corporis maxime nobis molestias?</p>
    </div>

    <div class="container py-5">
        <div class="row">
            <?php
                $post_type = 'recipe';
    
                $args = [
                    'post_type' => 'recipe',
                    'post_status' => 'publish'
                ];
    
                $query = new WP_Query($args);
    
                while ($query->have_posts()) {
                    $query->the_post();
                    $slug = get_post_field('post_name', get_post());
                    $image_id = get_post_meta(get_the_ID(), 'featured_image', true);
                    $image = wp_get_attachment_image_url($image_id, 'full');
                    ?>
                        <div class="col-12 col-md-4 col-lg-3">
                            <a href="<?php the_permalink(); ?>" >
                                <div class="card">
                                    <div class="h-100" style="display: block; overflow: hidden;">
                                        <img
                                            src="<?php echo $image; ?>"
                                            class="card-img-top"
                                            id="hover-img"
                                            width="auto"
                                            height="250px"
                                            style="overflow: hidden;"
                                            alt="..."
                                        >
                                    </div>
                                    <div class="card-body">
                                        <h5 class="card-title text-secondary"><?php echo get_the_title(); ?></h5>
                                        <p class="card-text text-black pb-3">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Amet aperiam fugit accusantium corporis ullam tempore fugiat ea praesentium assumenda tenetur?</p>
                                        <a href="<?php the_permalink(); ?>" class="btn btn-primary text-white">Learn More</a>
                                    </div>
                                </div>
                            </a>
                        </div>
                    <?php
                }
    
                wp_reset_postdata();
            ?>
        </div>
    </div>
</section>