<?php

function tmd_display_meal_cards() {
    $cache_key = 'themealdb_all_meals';
    $meals = get_transient($cache_key);

    if (!$meals) {
        $response = wp_remote_get('https://www.themealdb.com/api/json/v1/1/search.php?s=');
        if (is_wp_error($response)) return '<p>Error fetching meals.</p>';
        $body = wp_remote_retrieve_body($response);
        $data = json_decode($body, true);
        $meals = $data['meals'];
        set_transient($cache_key, $meals, 60 * 10); // Cache for 10 minutes
    }

    ?>

    <section class="bg-tertiary py-5">
        <div class="my-lg-5">
            <div class="container text-center mb-5">
                <h1 class="fw-bold">Store from TheMealDB API</h1>
                <p class="mt-5">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Esse aspernatur iste, minus eaque nam odio incidunt quibusdam provident cupiditate, possimus ex optio. Explicabo, adipisci aperiam nobis, voluptate reiciendis fuga illo pariatur dolorum quae eligendi aliquam, enim sit. Sit quos error suscipit vel consequuntur magnam. Neque, autem soluta iste nostrum amet ea assumenda in! Ad sequi voluptates iste totam eos facilis illum, accusantium nulla, consequuntur doloribus eum, eius fugiat fugit ipsam repellat? Sapiente est nisi eligendi ad id voluptates saepe soluta pariatur. Temporibus architecto, quia, vero qui ex ad nesciunt, praesentium accusantium ducimus facere earum magnam odit corporis maxime nobis molestias?</p>
            </div>
        
            <?php if ($meals) : ?>
                <div class="container py-5">
                    <div class="row gap-2 gap-md-0">
                        <?php foreach ($meals as $meal) { ?>
                            <div class="col-12 col-md-6 col-lg-3 mb-4" id="hover-img">
                                <a href="<?php echo site_url('/meals/' . $meal['idMeal']); ?>">
                                    <div class="card h-100">
                                        <div class="h-100" style="display: block; overflow: hidden;">
                                            <img
                                                src="<?php echo esc_url($meal['strMealThumb']); ?>"
                                                class="card-img-top"
                                                width="auto"
                                                height="300px"
                                                style="overflow: hidden;"
                                                alt="..."
                                            >
                                        </div>
                                        <div class="card-body h-100 d-flex flex-column justify-content-between">
                                            <h5 class="card-title text-primary"><?php echo esc_html($meal['strMeal']); ?></h5>
                                            <a href="<?php echo site_url('/meals/' . $meal['idMeal']); ?>" class="btn-primary text-white">View</a>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        <?php } ?>
                    </div>
                </div>
            <?php elseif (!$meals) : ?>
                <div class="container">
                    <h3>No Meals Found.</h3>
                </div>
            <?php endif; ?>
            
        </div>
    </section>

<?php }

add_shortcode('themealdb_meal_cards', 'tmd_display_meal_cards');

?>