<?php

    $dog_id = $_GET["id"];

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <?php include "./components/links.php" ?>
</head>

<body onload="preloader()">

    <?php include "./components/navbar.php" ?>

    <div class="preloader"></div>

    <div class="container bg-light mx-auto m-4 mb-5 p-5 row rounded shadow-sm">
        <h5 class="mb-4 h-font">Dog details...</h5>
        <input type="hidden" id="dog_id" value="<?php echo $dog_id; ?>">
        <div class="col-lg-5">
            <img src="" class="image w-100" alt="details_image">
        </div>
        <div class="col-lg-7 mt-lg-0 mt-md-3 mt-3">
            <h1 class="h-font dog_name"></h1>
            <h6 class="text-secondary mb-3">Origin - <span class="origin">United Kingdom</span></h6>
            <p class="details">
                
            </p>
            <div class="d-flex mb-4 short-details">
                <p class="text-muted me-3">Gender - <span class="sex"></span></p><p class="text-muted me-3">Weight - <span class="weight"></span>kg</p><p class="text-muted">Color - <span class="color"></span></p>
            </div>
            <div class="d-flex align-items-center">
                <p class="h-font" style="font-size: 30px;"><i class="bi bi-currency-rupee"></i><span class="newprice"></span> /-</p>
                <p class="text-decoration-line-through text-secondary ms-3" style="font-size: 20px;"><i class="bi bi-currency-rupee"></i><span class="oldprice"></span></p>
            </div>
            <div class="availability">
                <div class="d-flex align-items-center p-0 instock">
                    <div class="bg-success p-2 rounded"></div><p class="text-success ms-2 mt-3">Instock - Quantity Available( <span class="quantity"></span> )</p>
                </div>
                <div class="d-flex align-items-center p-0 outofstock">
                    <div class="bg-danger p-2 rounded"></div><p class="text-danger ms-2 mt-3">Out of stock</p>
                </div>
            </div>
            <div class="mt-4 w-100">
                <a href="tel:9836176084" class="btn btn-success w-100 instock">Order Now</a>
                <button class="btn btn-secondary w-100 outofstock">Notify Me</button>
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
</body>

    <script>



        $(document).ready(()=>{
            let dog_id = $("#dog_id").val();

            $.ajax({
                url: "./ajax/get_dog_details.php",
                method: "POST",
                data: {id: dog_id},
                success: function(response){

                    let data = jQuery.parseJSON(response);
                    $(".image").attr('src', data.image);
                    $(".dog_name").text(data.breed);
                    $(".origin").text(data.origin);
                    $(".details").text(data.description);
                    $(".sex").text(data.sex);
                    $(".weight").text(data.weight);
                    $(".color").text(data.color);
                    $(".oldprice").text(data.oldprice);
                    $(".newprice").text(data.newprice);
                    
                    if(data.status == "available"){
                        $(".outofstock").addClass("d-none");
                        $(".quantity").text(data.quantity < 10 ? "0"+data.quantity : data.quantity);
                    }else{
                        $(".instock").addClass("d-none");
                    }
                }
            })
        })

    </script>

</html>