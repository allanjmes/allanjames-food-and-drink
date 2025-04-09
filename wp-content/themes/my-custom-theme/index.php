<?php get_header(); ?>

<div class="container">
    <h1>Welcome to My Custom Theme</h1>
    <p>This is a custom WordPress theme integrated with Vite.</p>

    <h3 class="">main page</h3>

    <a href="<?php echo site_url() . '/shop' ?>">Shop</a>

    <div class="card" style="width: 18rem;" data-tilt data-tilt-scale="1.1">
        <img class="card-img-top" src="..." alt="Card image cap">
        <div class="card-body">
            <h5 class="card-title">Card title</h5>
            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
            <a href="#" class="btn btn-primary">Go somewhere</a>
        </div>
    </div>
</div>

<?php get_footer(); ?>