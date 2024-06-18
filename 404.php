<?php get_header(); ?>

<main id="mainContent" class="main-content">
    <!-- Start Hero Area -->
    <section class="section breadcrumb-area pt-100 pb-80" data-bg-img="assets/images/slider/01.jpg">
        <div class="container t-center">
            <div class="row">
                <div class="col-md-10 col-md-offset-1 col-xs-12 text-center">
                    <div class="section-top-title">
                        <h1 class="t-uppercase font-45">404</h1>
                        <ol class="breadcrumb">
                            <li><a href="index.html"><i class="fa fa-home mr-10"></i>Home</a></li>
                            <li class="active">404</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Hero Area -->

    <!-- Start 404 Area  -->
    <section class="section error-404-area">
        <div class="container">
            <div class="row">
                <div class="col-md-7 t-center t-md-left pt-60">
                    <div class="not-found-content">
                        <h1 class="mb-20">404</h1>
                        <h2 class="t-uppercase mb-30">Oops! Page Not Found</h2>
                        <p class="color-mid mb-15">Oopps! We can’t seems to find the page you are looking for.</p>
                        <p class="color-mid mb-15">It may be temporarily unavailable, moved or no longer exist.</p>
                        <p class="color-mid mb-40">Check the URL you entered for any mistakes and try again.</p>
                        <a href="index.html" class="btn btn-lg">Back To Home</a>
                    </div>
                </div>
                <div class="col-md-5 pt-40">
                    <img src="<?php echo THEME_PATH;?>assets/images/404.jpg" alt="">
                </div>
            </div>
        </div>
    </section>
    <!-- End 404 Area  -->


</main>

<?php get_footer(); ?>

