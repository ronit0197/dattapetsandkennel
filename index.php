<?php

    include "./database/connection.php";

    $sql = "SELECT * FROM `blogs`";
    $result = mysqli_query($conn, $sql);

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <?php include "./components/links.php" ?>
</head>

<body onload="preloader()">

    <?php include "./components/navbar.php" ?>

    <div class="preloader"></div>

    <!-- Slider -->
    <div class="container-fluid p-0 my-0">
        <div class="swiper mySwiper">
            <div class="swiper-wrapper banner-swiper">

            </div>
            <div class="swiper-pagination"></div>
        </div>
    </div>

    <!-- Devider start -->
    <div class="container-fluid p-4 d-flex justify-content-center align-items-center">
        <h5 class="devider-text me-3">Our Collection</h5>
        <span class="devider"></span>
    </div>
    <!-- Devider end-->

    <!-- Dog Grid start -->
    <div class="container-fluid m-auto row mb-4" id="itemsContainer">

    </div>
        <div class="container-fluid text-center p-5">
            <button class="btn btn-outline-secondary load-more" id="loadMore">Load more</button>
        </div>
    <!-- Dog Grid end -->

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

    <!-- Devider start -->
    <div class="container-fluid p-4 d-flex justify-content-center align-items-center">
        <h5 class="devider-text me-3">Blogs</h5>
        <span class="devider"></span>
    </div>
    <!-- Devider end-->

    <!-- Blogs start -->
    <!-- quick Blogs -->
    <div class="container-fluid w-75 mt-lg-5 mt-md-5 mt-3 mb-lg-5">
        <!-- First row (Doctor) -->
        <div class="row mb-lg-5 mb-md-5 mb-4">
            <div class="col-lg-2 col-md-4 col-5 shadow-sm p-4 rounded mini-blog">
                <h2 class="text-light mb-3">Blogs</h2>
                <p class="mt-2" style="font-size: 12px;">
                    Follow our blogs for pet care related information.
                </p>
                <a href="" class="nav-link">Read all blogs...</a>
            </div>
            <div class="col-lg-10 col-md-8 col-7">
                <div class="swiper quick-links-swiper">
                    <div class="swiper-wrapper">
                        <?php
                            while($display = mysqli_fetch_array($result)){
                                if (strlen($display["blog"]) > 100){
                                    $stringCut = substr($display["blog"], 0, 100);
                                }else{
                                    $stringCut = $display["blog"];
                                }
                                ?>
                                    <div class="swiper-slide card front-quick-card">
                                        <div class="card-body text-start w-100">
                                            <h5 class="card-title"><?php echo $display['blog_title'] ?></h5>
                                            <p class="text-dark" style="font-size: 12px;">
                                                <?php echo $stringCut; ?>
                                            </p>
                                            <a href="./read_blog.php?id=<?php echo $display['id'] ?>" class="nav-link" style="font-size: 13px;">Read more...</a>
                                        </div>
                                    </div>
                                <?php
                            }
                        ?>

                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Blogs end -->

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

    <script src="./js/preloader.js"></script>
    
</body>

    <script>

        function getSlider(){

            $.ajax({
                url: "./ajax/get_slides.php",
                method: "POST",
                success: function(data){
                    $(".banner-swiper").html("")
                    $(".banner-swiper").append(data)
                }
            })
        }

        $(document).ready(()=>{

            getSlider()

            let offset = 0;
            const limit = 12;

            function loadMoreItems() {
                $.ajax({
                    url: './ajax/get_dogs.php',
                    type: 'POST',
                    data: {
                        offset: offset,
                        limit: limit
                    },
                    success: function(response) {

                        if(response == "No more items to load"){
                            $('#loadMore').hide()
                        }else{

                            $('#itemsContainer').append(response);
                            offset += limit;
                        }

                    },
                    error: function() {
                        alert('Error loading items.');
                    }
                });
            }

            // Load initial items
            loadMoreItems();

            // Load more items on button click
            $('#loadMore').click(function() {
                loadMoreItems();
            });

        })
    </script>

</html>