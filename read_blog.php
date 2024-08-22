<?php

    include "./database/connection.php";

    $blog_id = $_GET['id'];

    $sql = "SELECT * FROM `blogs` WHERE id='$blog_id'";
    $result = mysqli_query($conn, $sql);
    $display = mysqli_fetch_array($result);

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

    <div class="container bg-light p-5 my-5">
        <div class="row">
            <div class="col-lg-4">
                <h1><?php echo $display['blog_title'] ?></h1>
                <h5 class="mt-4"><strong>Topic - </strong><?php echo $display['blog_topic'] ?></h5>
            </div>
            <div class="col-lg-8">
                <?php echo $display['blog'] ?>
            </div>
        </div>
    </div>

    <?php include "./components/footer.php" ?>

    <?php include "./components/scripts.php" ?>

    <script src="./js/preloader.js"></script>
</body>

</html>