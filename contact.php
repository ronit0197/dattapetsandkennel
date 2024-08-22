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
            <h1 class="text-white">Contact Us</h1>
            <h5 class="text-light">Datta Pets and Kennel is a one-stop shop for all your pet needs</h5>
        </div>
    </div>
    
    <div class="container my-4">
        <div class="row">
            <div class="col-lg-6 mb-lg-0 mb-md-0 mb-4">
                <div class="bg-white shadow rounded p-3">
                    <iframe class="w-100" src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d14726.762325501786!2d88.4093308!3d22.6653223!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39f89f9c616bbe85%3A0x4f87c96fcfe1f86!2sDatta%20Pets%20And%20Kennel%2FPet%20store%20in%20North%20Dumdum%2C%20West%20Bengal!5e0!3m2!1sen!2sin!4v1718110097142!5m2!1sen!2sin" height="450" loading="lazy"></iframe>
                </div>
                <div class="bg-white shadow rounded p-3 mt-2">
                    <p class="mt-3 mb-3"><i class="bi bi-geo-alt"></i>
                        Ground Floor, Kali Temple Road Nimta, near by Balak Sangaj Club, Birati, North Dumdum, West Bengal 700051
                    </p>
                    <h5 class="mb-3">Contacts</h5>
                    <a href="tel:9564853228" class="text-dark text-decoration-none"><i class="bi bi-telephone"></i>&nbsp;&nbsp;+91 9564853228</a><br>
                    <a href="mailto:hotelcalifornia@gmail.com" class="text-dark text-decoration-none"><i class="bi bi-envelope-at"></i>&nbsp;&nbsp;hotelcalifornia@gmail.com</a>
                    <h5 class="mb-3 mt-3">Socialmedia Links</h5>
                    <a href="#" class="text-dark text-decoration-none"><i class="bi bi-facebook"></i>&nbsp;&nbsp;Facebook</a><br>
                    <a href="#" class="text-dark text-decoration-none"><i class="bi bi-instagram"></i>&nbsp;&nbsp;Instagram</a><br>
                    <a href="#" class="text-dark text-decoration-none"><i class="bi bi-twitter"></i>&nbsp;&nbsp;Twitter</a>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="bg-white shadow rounded p-3">
                    <form>
                        <div class="mb-2">
                            <label class="form-label">Name</label>
                            <input type="text" class="form-control shadow-none">
                        </div>
                        <div class="mb-2">
                            <label class="form-label">Phone No</label>
                            <input type="text" class="form-control shadow-none">
                        </div>
                        <div class="mb-2">
                            <label class="form-label">Email</label>
                            <input type="email" class="form-control shadow-none">
                        </div>
                        <div class="mb-2">
                            <label class="form-label">Query</label>
                            <textarea class="form-control shadow-none" rows="4"></textarea>
                        </div>
                        <div class="mt-4 text-center">
                            <button class="btn btn-success border-0 w-50 shadow-none">Submit Query</button>
                        </div>
                    </form>
                </div>
                <div class="d-flex align-items-center justify-content-center p-4">
                    <img src="images/backgrounds/helping.png" width="300px">
                </div>
            </div>
        </div>
    </div>

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