<?php

    include "./database/connection.php";
    $galary_sql = "SELECT * FROM `galary_images`";
    $galary_result  = mysqli_query($conn, $galary_sql);

    $video_sql = "SELECT * FROM `videos`";
    $video_result  = mysqli_query($conn, $video_sql);

    $link_sql = "SELECT * FROM `you_tube_links`";
    $link_result  = mysqli_query($conn, $link_sql);
?>
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

    <!-- Custom CSS -->
    <link rel="stylesheet" href="./css/style.css">
</head>

<body onload="preloader()">

    <!-- Navbar -->
    <?php include "./components/navbar.php" ?>

    <div class="preloader"></div>

    <div class="container-fluid header p-0">
        <img src="./images/backgrounds/cover.jpg" alt="">
        <div class="header-cover">
            <h1 class="text-white">Galary</h1>
            <h5 class="text-light">Find our photos and videos here</h5>
        </div>
    </div>

    <!-- Galary Grid -->
    <div class="container-fluid row my-5">
        <?php
            while($display_image = mysqli_fetch_array($galary_result)){
                ?>
                    <div class="col-lg-2 mb-3 d-flex justify-content-center">
                        <div class="galary-card shadow">
                            <img class="galary-image" src="./<?php echo $display_image['image'] ?>" alt="">
                        </div>
                    </div>
                <?php
            }
        ?>
    </div>

    <!-- Devider start -->
    <div class="container-fluid p-4 d-flex justify-content-center align-items-center">
        <h5 class="devider-text me-3">Videos</h5>
        <span class="devider"></span>
    </div>
    <!-- Devider end-->

    <!-- Video Grid -->
    <div class="container-fluid row my-5">
        <?php
            while($display_videos = mysqli_fetch_array($video_result)){
                ?>
                    <div class="col-lg-3 mb-3 d-flex justify-content-center">
                        <div class="">
                            <video width="320" height="240" controls>
                                <source src="./<?php echo $display_videos['video'] ?>" type="video/mp4">
                                <source src="./<?php echo $display_videos['video'] ?>" type="video/ogg">
                                Your browser does not support the video tag.
                            </video>
                        </div>
                    </div>
                <?php
            }
        ?>
        <?php
            while($display_links = mysqli_fetch_array($link_result)){
                ?>
                    <div class="col-lg-3 mb-3 d-flex justify-content-center">
                        <div class="">
                            <?php echo $display_links["links"]  ?>
                        </div>
                    </div>
                <?php
            }
        ?>
    </div>


    <!-- Galary modal -->
    <div class="big-galary-image">
        <img src="../images/pets/Golden Retriver/puppy-sitting-carpet.jpg" alt="big-image">
        <i class="bi bi-x-circle big-galary-close text-white"></i>
    </div>


    <?php include "./components/footer.php" ?>

    <?php include "./components/scripts.php" ?>

    <!-- Custom script -->
    <script src="./js/galary-system.js"></script>

    <script src="./js/preloader.js"></script>
</body>

</html>