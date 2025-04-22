<section class="bg-tertiary py-5">
    <div class="my-lg-5">
        <div class="container text-center mb-5">
            <h1 class="">Recipes</h1>
            <p class="mt-5">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Esse aspernatur iste, minus eaque nam odio incidunt quibusdam provident cupiditate, possimus ex optio. Explicabo, adipisci aperiam nobis, voluptate reiciendis fuga illo pariatur dolorum quae eligendi aliquam, enim sit. Sit quos error suscipit vel consequuntur magnam. Neque, autem soluta iste nostrum amet ea assumenda in! Ad sequi voluptates iste totam eos facilis illum, accusantium nulla, consequuntur doloribus eum, eius fugiat fugit ipsam repellat? Sapiente est nisi eligendi ad id voluptates saepe soluta pariatur. Temporibus architecto, quia, vero qui ex ad nesciunt, praesentium accusantium ducimus facere earum magnam odit corporis maxime nobis molestias?</p>
        </div>
    
        <div class="container py-5">
            <div class="row gap-2 gap-md-0">
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
                            <div class="col-12 col-md-6 col-lg-3 mb-4">
                                <a href="<?php the_permalink(); ?>" >
                                    <div class="card h-100">
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
                                        <div class="card-body h-100 d-flex flex-column justify-content-between">
                                            <h5 class="card-title text-primary"><?php echo get_the_title(); ?></h5>
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
    </div>
</section>

<section class="bg-custom-blue py-3">
    <div class="infinite-sticker text-custom-dark-blue">
        <ul>
            <li>
                <span></span>
                <h1 class="fw-bold">TASTE GOOD</h1>
            </li>
            <li>
                <span></span>
                <h1 class="fw-bold">NATURE FRESH</h1>
            </li>
            <li>
                <span></span>
                <h1 class="fw-bold">HEALTHY SNACKS</h1>
            </li>
            <li>
                <span></span>
                <h1 class="fw-bold">RICH ANTIOXIDENT</h1>
            </li>
            <li>
                <span></span>
                <h1 class="fw-bold">NO PRESERVATIVES</h1>
            </li>
            <li>
                <span></span>
                <h1 class="fw-bold">HEALTHY FOOD</h1>
            </li>
            <li>
                <span></span>
                <h1 class="fw-bold">NO ADDITIVES</h1>
            </li>
            <li>
                <span></span>
                <h1 class="fw-bold">PURELY NATURAL</h1>
            </li>
        </ul>
        <ul aria-hidden="true">
            <li>
                <span></span>
                <h1 class="fw-bold">TASTE GOOD</h1>
            </li>
            <li>
                <span></span>
                <h1 class="fw-bold">NATURE FRESH</h1>
            </li>
            <li>
                <span></span>
                <h1 class="fw-bold">HEALTHY SNACKS</h1>
            </li>
            <li>
                <span></span>
                <h1 class="fw-bold">RICH ANTIOXIDENT</h1>
            </li>
            <li>
                <span></span>
                <h1 class="fw-bold">NO PRESERVATIVES</h1>
            </li>
            <li>
                <span></span>
                <h1 class="fw-bold">HEALTHY FOOD</h1>
            </li>
            <li>
                <span></span>
                <h1 class="fw-bold">NO ADDITIVES</h1>
            </li>
            <li>
                <span></span>
                <h1 class="fw-bold">PURELY NATURAL</h1>
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
                <h1 class="fw-bold">TASTE GOOD</h1>
            </li>
            <li>
                <span></span>
                <h1 class="fw-bold">NATURE FRESH</h1>
            </li>
            <li>
                <span></span>
                <h1 class="fw-bold">HEALTHY SNACKS</h1>
            </li>
            <li>
                <span></span>
                <h1 class="fw-bold">RICH ANTIOXIDENT</h1>
            </li>
            <li>
                <span></span>
                <h1 class="fw-bold">NO PRESERVATIVES</h1>
            </li>
            <li>
                <span></span>
                <h1 class="fw-bold">HEALTHY FOOD</h1>
            </li>
            <li>
                <span></span>
                <h1 class="fw-bold">NO ADDITIVES</h1>
            </li>
            <li>
                <span></span>
                <h1 class="fw-bold">PURELY NATURAL</h1>
            </li>
        </ul>
        <ul aria-hidden="true">
            <li>
                <span></span>
                <h1 class="fw-bold">TASTE GOOD</h1>
            </li>
            <li>
                <span></span>
                <h1 class="fw-bold">NATURE FRESH</h1>
            </li>
            <li>
                <span></span>
                <h1 class="fw-bold">HEALTHY SNACKS</h1>
            </li>
            <li>
                <span></span>
                <h1 class="fw-bold">RICH ANTIOXIDENT</h1>
            </li>
            <li>
                <span></span>
                <h1 class="fw-bold">NO PRESERVATIVES</h1>
            </li>
            <li>
                <span></span>
                <h1 class="fw-bold">HEALTHY FOOD</h1>
            </li>
            <li>
                <span></span>
                <h1 class="fw-bold">NO ADDITIVES</h1>
            </li>
            <li>
                <span></span>
                <h1 class="fw-bold">PURELY NATURAL</h1>
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