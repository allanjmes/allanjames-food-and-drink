<header class="bg-secondary">
    <div class="d-flex justify-content-between p-3">
        <img
            src="<?php echo get_template_directory_uri(); ?>/assets/nav/food-and-drink-logo.png"
            style="max-height: 80px; height: auto; width: auto;"
            alt="Site Logo"
            class="ml-3">
        <nav class="d-flex justify-content-center align-items-center gap-3">
            <ul class="nav">
                <?php
                $args = [
                    'post_type' => 'page',
                    'post_status' => 'publish'
                ];

                $query = new WP_Query($args);
                $current_id = get_queried_object_id(); // Get the current page ID

                while ($query->have_posts()) {
                    $query->the_post();
                    $slug = get_post_field('post_name', get_post());
                    $active_class = (get_the_ID() === $current_id) ? 'active' : '';

                        echo '<li class="nav-item">';
                        echo '<a class="nav-link ' . $active_class . '" href="' . esc_url( home_url() ) . "/" . $slug . '">';
                        echo esc_html(get_the_title());
                        echo '</a></li>';
                }

                wp_reset_postdata();
                ?>
            </ul>
        </nav>
    </div>
</header>