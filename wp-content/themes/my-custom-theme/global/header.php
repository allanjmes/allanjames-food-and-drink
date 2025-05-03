<header class="bg-custom-yellow m-3" style="border: 2px; border-radius: 10px;">
    <!-- LARGE DEVICE NAV -->
    <div class="mx-4 d-none d-lg-flex">
        <nav class="col-4 d-flex justify-content-start align-items-center gap-3">
            <a href="<?php echo site_url(); ?>">Home</a>
            <a href="<?php echo site_url() . '/recipe'; ?>">Recipe</a>
            <a href="<?php echo site_url() . '/recipe-category'; ?>">Category</a>
            <a href="<?php echo site_url() . '/store'; ?>">StoreAPI</a>
        </nav>
        <div class="col-4 d-flex justify-content-center align-items-center mb-2">
            <a href="<?php echo site_url(); ?>">
                <h1 class="display-3 fw-bold">Logo</h1>
            </a>
        </div>
        <nav class="col-4 d-flex justify-content-end align-items-center gap-3">
            <a href="<?php echo site_url() . '/web-design'; ?>">WebDesign</a>
            <a href="<?php echo site_url() . '/development'; ?>">Development</a>
            <a href="<?php echo site_url() . '/contact-me'; ?>">Contact</a>
            <a type="button" class="btn-outline-primary" target="_blank" href="https://github.com/allanjmes/food-and-drink">Code</a>
        </nav>
    </div>
    <!-- MOBILE NAV -->
    <div class="d-lg-none d-flex justify-content-between align-items-center p-2">
        <div class="d-flex align-items-start">
            <a href="<?php echo site_url(); ?>">
                <h1 class="display-3 fw-bold">Logo</h1>
            </a>
        </div>
        <button 
            class="btn-outline-primary" 
            type="button" 
            data-bs-toggle="offcanvas" 
            data-bs-target="#staticBackdrop" 
            aria-controls="staticBackdrop"
        >
            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="#3b1c19" class="bi bi-three-dots" viewBox="0 0 16 16">
                <path d="M3 9.5a1.5 1.5 0 1 1 0-3 1.5 1.5 0 0 1 0 3zm5 0a1.5 1.5 0 1 1 0-3 1.5 1.5 0 0 1 0 3zm5 0a1.5 1.5 0 1 1 0-3 1.5 1.5 0 0 1 0 3z"/>
            </svg>
        </button>
    </div>
    <!-- MOBILE SIDEBAR CONTENT -->
    <div class="bg-secondary offcanvas offcanvas-start" data-bs-backdrop="static" tabindex="-1" id="staticBackdrop" aria-labelledby="staticBackdropLabel">
        <div class="p-2">
            <div class="d-flex justify-content-end align-items-center">
                <button type="button" class="btn-close btn-close-red" data-bs-dismiss="offcanvas" aria-label="Close"></button>
            </div>
            <div class="d-flex flex-column gap-3 p-3">
                <a href="<?php echo site_url(); ?>">Home</a>
                <a href="<?php echo site_url() . '/recipe'; ?>">Recipe</a>
                <a href="<?php echo site_url() . '/recipe-category'; ?>">Category</a>
                <a href="<?php echo site_url() . '/store'; ?>">StoreAPI</a>
                <a href="<?php echo site_url() . '/web-design'; ?>">WebDesign</a>
                <a href="<?php echo site_url() . '/development'; ?>">Development</a>
                <a href="<?php echo site_url() . '/contact-me'; ?>">Contact</a>
                <a target="_blank" href="https://github.com/allanjmes/food-and-drink">View Code</a>
            </div>
        </div>
    </div>
</header>