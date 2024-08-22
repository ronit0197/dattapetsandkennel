<?php

    // Database connection
    include "./database/connection.php";

    if(isset($_GET["search"])){

        $search = $_GET["search"];

    }else{
        $search = " ";
    }

    $getBreed = "SELECT * FROM `dogs`";
    $breedResult = mysqli_query($conn, $getBreed);

    $getOrigin = "SELECT * FROM `dogs`";
    $originResult = mysqli_query($conn, $getOrigin);

    $getColor = "SELECT * FROM `dogs`";
    $colorResult = mysqli_query($conn, $getColor);

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <?php include "./components/links.php" ?>
</head>

<body onload="preloader()">

    <?php include "./components/navbar.php" ?>

    <div class="preloader"></div>

    <!-- Grab the search data -->
    <input type="hidden" id="search" value="<?php echo $search; ?>">

    <div class="container my-5 row mx-auto">
        <!-- <div class="col-lg-12 d-flex justify-content-end mb-4">
            <div class="d-flex align-items-center border border-1 border-secondary ps-2 w-25 rounded sort">
                <span class="fw-bold me-2">Sort:</span>
                <select class="form-select form-select-sm border-0 shadow-none" aria-label="Small select example">
                    <option value="1">Price high to low</option>
                    <option value="2">Price low to high</option>
                    <option value="3">New arrivals</option>
                </select>
            </div>
        </div> -->
        <div class="col-lg-4 bg-light p-3 mb-lg-0 mb-md-3 mb-3">
        <form action="search.php" method="GET" id="filter-form">
            <div class="accordion accordion-flush" id="accordionFlushExample">
                <div class="accordion-item">
                    <h2 class="accordion-header">
                    <button class="accordion-button collapsed shadow-none" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne">
                        Breed
                    </button>
                    </h2>
                    <div id="flush-collapseOne" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
                        <div class="accordion-body">
                            <?php
                                while ($displayBreed = mysqli_fetch_array($breedResult)) {
                                    $breeds[] = $displayBreed['breed'];
                                }

                                // Filter out duplicates
                                $uniqueBreeds = array_unique($breeds);

                                // Output the unique breeds
                                foreach ($uniqueBreeds as $breed) {
                                    ?>
                                    <li class="list-group-item">
                                        <input class="form-check-input me-1 radio" type="radio" name="search" value="<?php echo htmlspecialchars($breed); ?>">
                                        <label class="form-check-label" for="firstCheckbox"><?php echo htmlspecialchars($breed); ?></label>
                                    </li>
                                    <?php
                                }
                            ?>
                        </div>
                    </div>
                </div>
                <div class="accordion-item">
                    <h2 class="accordion-header">
                    <button class="accordion-button collapsed shadow-none" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseFour" aria-expanded="false" aria-controls="flush-collapseOne">
                        Origin
                    </button>
                    </h2>
                    <div id="flush-collapseFour" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
                        <div class="accordion-body">
                            <?php
                                while ($displayOrigin = mysqli_fetch_array($originResult)) {
                                    $origins[] = $displayOrigin['origin'];
                                }

                                // Filter out duplicates
                                $uniqueOrigins = array_unique($origins);

                                // Output the unique origins
                                foreach ($uniqueOrigins as $origin) {
                                    ?>
                                    <li class="list-group-item">
                                        <input class="form-check-input me-1 radio" type="radio" name="search" value="<?php echo htmlspecialchars($origin); ?>">
                                        <label class="form-check-label" for="firstCheckbox"><?php echo htmlspecialchars($origin); ?></label>
                                    </li>
                                    <?php
                                }
                            ?>
                        </div>
                    </div>
                </div>
                <div class="accordion-item">
                    <h2 class="accordion-header">
                    <button class="accordion-button collapsed shadow-none" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseTwo" aria-expanded="false" aria-controls="flush-collapseTwo">
                        Color
                    </button>
                    </h2>
                    <div id="flush-collapseTwo" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
                        <div class="accordion-body">
                            <?php
                                while ($displayColor = mysqli_fetch_array($colorResult)) {
                                    $colors[] = $displayColor['color'];
                                }

                                // Filter out duplicates
                                $uniqueColors = array_unique($colors);

                                // Output the unique colors
                                foreach ($uniqueColors as $color) {
                                    ?>
                                    <li class="list-group-item">
                                        <input class="form-check-input me-1 radio" type="radio" name="search" value="<?php echo htmlspecialchars($color); ?>">
                                        <label class="form-check-label" for="firstCheckbox"><?php echo htmlspecialchars($color); ?></label>
                                    </li>
                                    <?php
                                }
                            ?>
                        </div>
                    </div>
                </div>
                <div class="accordion-item">
                    <h2 class="accordion-header">
                    <button class="accordion-button collapsed shadow-none" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseThree" aria-expanded="false" aria-controls="flush-collapseThree">
                        Gender
                    </button>
                    </h2>
                    <div id="flush-collapseThree" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
                        <div class="accordion-body">
                            <li class="list-group-item">
                                <input class="form-check-input me-1" type="radio" name="search" value="male" class="radio">
                                <label class="form-check-label" for="firstCheckbox">Male</label>
                            </li>
                            <li class="list-group-item">
                                <input class="form-check-input me-1" type="radio" name="search" value="female" class="radio">
                                <label class="form-check-label" for="secondCheckbox">Female</label>
                            </li>
                        </div>
                    </div>
                </div>
                <!-- <div class="accordion-item">
                    <h2 class="accordion-header">
                    <button class="accordion-button collapsed shadow-none" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseFive" aria-expanded="false" aria-controls="flush-collapseThree">
                        Weight
                    </button>
                    </h2>
                    <div id="flush-collapseFive" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
                        <div class="accordion-body">
                            <li class="list-group-item">
                                <input class="form-check-input me-1" type="checkbox" value="" id="firstCheckbox">
                                <label class="form-check-label" for="firstCheckbox">First checkbox</label>
                            </li>
                            <li class="list-group-item">
                                <input class="form-check-input me-1" type="checkbox" value="" id="secondCheckbox">
                                <label class="form-check-label" for="secondCheckbox">Second checkbox</label>
                            </li>
                            <li class="list-group-item">
                                <input class="form-check-input me-1" type="checkbox" value="" id="thirdCheckbox">
                                <label class="form-check-label" for="thirdCheckbox">Third checkbox</label>
                            </li>
                        </div>
                    </div>
                </div> -->
            </div>
        </form>
        </div>
        <div class="col-lg-8 p-3">
            <div class="row" id="search_result">
                
            </div>
        </div>
    </div>

    <!-- <div class="container mx-auto row my-5">
        <h3 class="h-font mb-3">Recently Viewd</h3>
        <div class="col-lg-4 mb-lg-0 mb-md-3 mb-3">
            <div class="card shadow">
                <img src="./images/pets/Golden Retriver/puppy-sitting-carpet.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Golden Retriver</h5>
                    <p class="card-text">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Optio autem, dolore deserunt...
                    </p>
                    <div class="d-flex align-items-center">
                        <p><i class="bi bi-currency-rupee"></i>3000. <sup>54</sup></p>
                        <p class="text-decoration-line-through text-secondary ms-2" style="font-size: 11px;"><i
                                class="bi bi-currency-rupee"></i>5000. <sup>00</sup></p>
                    </div>
                    <div>
                        <p class="text-secondary" style="font-size: 12px;">Available - 20</p>
                    </div>
                    <div class="d-flex justify-content-between align-items-center">
                        <a href="#" class="nav-link">View more...</a>
                        <a href="tel:9836176084" class="btn btn-outline-dark">Order Now</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-4 mb-lg-0 mb-md-3 mb-3">
            <div class="card shadow">
                <img src="./images/pets/Golden Retriver/puppy-sitting-carpet.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Golden Retriver</h5>
                    <p class="card-text">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Optio autem, dolore deserunt...
                    </p>
                    <div class="d-flex align-items-center">
                        <p><i class="bi bi-currency-rupee"></i>3000. <sup>54</sup></p>
                        <p class="text-decoration-line-through text-secondary ms-2" style="font-size: 11px;"><i
                                class="bi bi-currency-rupee"></i>5000. <sup>00</sup></p>
                    </div>
                    <div>
                        <p class="text-secondary" style="font-size: 12px;">Available - 20</p>
                    </div>
                    <div class="d-flex justify-content-between align-items-center">
                        <a href="#" class="nav-link">View more...</a>
                        <a href="tel:9836176084" class="btn btn-outline-dark">Order Now</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-4 mb-lg-0 mb-md-3 mb-3">
            <div class="card shadow">
                <img src="./images/pets/Golden Retriver/puppy-sitting-carpet.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Golden Retriver</h5>
                    <p class="card-text">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Optio autem, dolore deserunt...
                    </p>
                    <div class="d-flex align-items-center">
                        <p><i class="bi bi-currency-rupee"></i>3000. <sup>54</sup></p>
                        <p class="text-decoration-line-through text-secondary ms-2" style="font-size: 11px;"><i
                                class="bi bi-currency-rupee"></i>5000. <sup>00</sup></p>
                    </div>
                    <div>
                        <p class="text-secondary" style="font-size: 12px;">Available - 20</p>
                    </div>
                    <div class="d-flex justify-content-between align-items-center">
                        <a href="#" class="nav-link">View more...</a>
                        <a href="tel:9836176084" class="btn btn-outline-dark">Order Now</a>
                    </div>
                </div>
            </div>
        </div>
    </div> -->


    <?php include "./components/footer.php" ?>

    <?php include "./components/scripts.php" ?>

    <script src="./js/preloader.js"></script>

    <script>
        document.addEventListener("DOMContentLoaded", function () {
            const radioButtons = document.querySelectorAll('input[name="search"]');
            radioButtons.forEach(radio => {
                radio.addEventListener('change', function () {
                    document.getElementById('filter-form').submit();
                    document.getElementById('filter-form').preventDefault()
                });
            });
        });
    </script>
    
</body>

    <script>

        function search_result(search){

            $.ajax({
                url: "./ajax/search.php",
                method: "GET",
                data: {search: search},
                success: function(response){
                    $("#search_result").append(response)
                }
            })

        }

        $(document).ready(()=>{

            let search = $("#search").val();
            search_result(search)
        });
    </script>

</html>