<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Online pet store - Datta pets and kennel</title>
    <link rel="shortcut icon" href="./assests/favicon.ico" type="image/x-icon">

    <!-- Bootstrap CDN -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <!-- Swiper js CDN -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.css" />
    <!-- Custom CSS -->
    <link rel="stylesheet" href="./css/style.css">
</head>

<body onload="preloader()">

    <?php include "./components/navbar.php" ?>

    <div class="preloader"></div>

    <div class="container-fluid header p-0">
        <img src="./images/backgrounds/cover.jpg" alt="">
        <div class="header-cover">
            <h1 class="text-white">About Us</h1>
            <h5 class="text-light">Datta Pets and Kennel is a one-stop shop for all your pet needs</h5>
        </div>
    </div>

    <!-- Hero section start -->
    <div class="container-fluid row my-4 mx-0">
        <div class="col-lg-6 col-md-12 col-12 hero-left p-0">
            <img src="./images/backgrounds/big-grid.jpg" alt="Grid-img">
            <div class="hero-cover p-5">
                <h4 class="text-light border-start border-light ps-2 mb-5">Get Healthy Puppies at</h4>
                <h1 class="text-white hero-text">Datta Pets & Kennel</h1>
                <p class="text-light hero-des my-4">
                    Lorem ipsum dolor sit, amet consectetur adipisicing elit. Exercitationem velit tempore aspernatur
                    sequi repellat eius necessitatibus eligendi. Dolorem quo debitis accusantium et amet aspernatur
                    expedita provident illum! Qui, nam eos.
                </p>
                <a href="tel:9836176084" class="btn btn-outline-light"><i class="bi bi-telephone me-3"></i>Call Us
                    now</a>
            </div>
        </div>
        <div class="col-lg-6 col-md-12 col-12 hero-right p-0">
            <div class="row">
                <div class="col-6 bg-warning p-2">
                    <img src="./images/backgrounds/grid1.jpg" alt="Grid-img">
                </div>
                <div class="col-6 bg-primary p-2">
                    <img src="./images/backgrounds/grid2.jpg" alt="Grid-img">
                </div>
                <div class="col-6 bg-dark p-2">
                    <img src="./images/backgrounds/grid3.jpg" alt="Grid-img">
                </div>
                <div class="col-6 bg-danger p-2">
                    <img src="./images/backgrounds/grid4.jpg" alt="Grid-img">
                </div>
            </div>
        </div>
    </div>
    <!-- Hero section end -->

    <!-- Testimonials -->
    <div class="container-fluid my-5">
        <div class="container sec-heading text-center text-dark my-5">
            <h1 class="h-font my-3">Reviews</h1>
            <h6 class="text-secondary">See what our happy clients saying.</h6>
        </div>

        <div class="container">
            <div class="swiper TestimonialSwiper p-4">
                <div class="swiper-wrapper mb-5">

                    <div class="swiper-slide border border-dark p-4">
                        <div class="testimonial-card">
                            <div class="profile mb-3">
                                <h6 class="text-dark">Random Profile</h6>
                            </div>
                            <p class="text-dark" style="font-size: 12px;">
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolorem nemo eaque veniam
                                iure.
                                Accusantium et eum reprehenderit nostrum iusto corporis animi ducimus quibusdam quis
                                distinctio.
                                Veniam quis exercitationem non ducimus!
                            </p>
                            <div class="rating" style="font-size: 14px;">
                                <i class="bi bi-star-fill text-warning"></i>
                                <i class="bi bi-star-fill text-warning"></i>
                                <i class="bi bi-star-fill text-warning"></i>
                                <i class="bi bi-star-fill text-warning"></i>
                                <i class="bi bi-star-fill text-warning"></i>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide border border-dark p-4">
                        <div class="testimonial-card">
                            <div class="profile mb-3">
                                <h6 class="text-dark">Random Profile</h6>
                            </div>
                            <p class="text-dark" style="font-size: 12px;">
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolorem nemo eaque veniam
                                iure.
                                Accusantium et eum reprehenderit nostrum iusto corporis animi ducimus quibusdam quis
                                distinctio.
                                Veniam quis exercitationem non ducimus!
                            </p>
                            <div class="rating" style="font-size: 14px;">
                                <i class="bi bi-star-fill text-warning"></i>
                                <i class="bi bi-star-fill text-warning"></i>
                                <i class="bi bi-star-fill text-warning"></i>
                                <i class="bi bi-star-fill text-warning"></i>
                                <i class="bi bi-star-fill text-warning"></i>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide border border-dark p-4">
                        <div class="testimonial-card">
                            <div class="profile mb-3">
                                <h6 class="text-dark">Random Profile</h6>
                            </div>
                            <p class="text-dark" style="font-size: 12px;">
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolorem nemo eaque veniam
                                iure.
                                Accusantium et eum reprehenderit nostrum iusto corporis animi ducimus quibusdam quis
                                distinctio.
                                Veniam quis exercitationem non ducimus!
                            </p>
                            <div class="rating" style="font-size: 14px;">
                                <i class="bi bi-star-fill text-warning"></i>
                                <i class="bi bi-star-fill text-warning"></i>
                                <i class="bi bi-star-fill text-warning"></i>
                                <i class="bi bi-star-fill text-warning"></i>
                                <i class="bi bi-star-fill text-warning"></i>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide border border-dark p-4">
                        <div class="testimonial-card">
                            <div class="profile mb-3">
                                <h6 class="text-dark">Random Profile</h6>
                            </div>
                            <p class="text-dark" style="font-size: 12px;">
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolorem nemo eaque veniam
                                iure.
                                Accusantium et eum reprehenderit nostrum iusto corporis animi ducimus quibusdam quis
                                distinctio.
                                Veniam quis exercitationem non ducimus!
                            </p>
                            <div class="rating" style="font-size: 14px;">
                                <i class="bi bi-star-fill text-warning"></i>
                                <i class="bi bi-star-fill text-warning"></i>
                                <i class="bi bi-star-fill text-warning"></i>
                                <i class="bi bi-star-fill text-warning"></i>
                                <i class="bi bi-star-fill text-warning"></i>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide border border-dark p-4">
                        <div class="testimonial-card">
                            <div class="profile mb-3">
                                <h6 class="text-dark">Random Profile</h6>
                            </div>
                            <p class="text-dark" style="font-size: 12px;">
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolorem nemo eaque veniam
                                iure.
                                Accusantium et eum reprehenderit nostrum iusto corporis animi ducimus quibusdam quis
                                distinctio.
                                Veniam quis exercitationem non ducimus!
                            </p>
                            <div class="rating" style="font-size: 14px;">
                                <i class="bi bi-star-fill text-warning"></i>
                                <i class="bi bi-star-fill text-warning"></i>
                                <i class="bi bi-star-fill text-warning"></i>
                                <i class="bi bi-star-fill text-warning"></i>
                                <i class="bi bi-star-fill text-warning"></i>
                            </div>
                        </div>
                    </div>

                </div>
                <div class="swiper-pagination"></div>
            </div>
        </div>
    </div>

    <?php include "./components/footer.php" ?>

    <?php include "./components/scripts.php" ?>

    <!-- Swiper js script CDN -->
    <script src="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.js"></script>
    <!-- Custom script -->
    <script src="./js/slider.js"></script>

    <script src="./js/preloader.js"></script>
</body>

</html>