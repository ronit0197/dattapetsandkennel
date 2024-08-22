<?php

    include "redirection.php";
    include "../database/connection.php";

    $dogId = $_GET["id"];

    $sql = "SELECT * FROM `dogs` WHERE id='$dogId'";
    $result = mysqli_query($conn, $sql);
    $display = mysqli_fetch_array($result);

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <?php include "./components/links.php" ?>
</head>

<body>

    <?php include "./components/navbar.php" ?>


    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-10 ms-auto overflow-hidden p-4" id="admin-content">
                <h1><i class="fa-solid fa-dog me-2"></i></h1>
                <form id="UpdateDog" method="POST" class="w-100 mx-auto mt-5 border border-1 border-secondary rounded p-3" enctype="multipart/form-data">
                    <div class="row">
                        <div class="col-6">
                            <div class="form-floating mb-3">
                                <input type="text" value="<?php echo $display["breed"]; ?>" name="name" class="form-control shadow-none" id="floatingInput" placeholder="name@example.com" required>
                                <input type="hidden" name="id" value="<?php echo $dogId; ?>">
                                <label for="floatingInput">Dog breed</label>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="form-floating mb-3">
                                <input type="text" value="<?php echo $display["origin"]; ?>" name="origin" class="form-control shadow-none" id="floatingInput" placeholder="name@example.com">
                                <label for="floatingInput">Dog origin</label>
                            </div>
                        </div>
                        <div class="col-6">
                            <select name="sex" class="form-select form-select shadow-none" aria-label="Small select example" required>
                                <option selected value="<?php echo $display["sex"]; ?>"><?php echo $display["sex"]; ?></option>
                                <option value="male">Male</option>
                                <option value="female">Female</option>
                            </select>
                        </div>
                        <div class="col-6">
                            <div class="input-group mb-3">
                                <input type="text" value="<?php echo $display["waight"]; ?>" name="weight" class="form-control shadow-none" aria-label="Amount (to the nearest dollar)" placeholder="Weight" required>
                                <span class="input-group-text">kg</span>
                            </div>
                        </div>
                        <div class="col-6">
                            <label for="price" class="form-label">Price</label>
                            <div class="input-group mb-3">
                                <span class="input-group-text"><i class="bi bi-currency-rupee"></i></span>
                                <input type="text" value="<?php echo $display["price"]; ?>" name="price" class="form-control shadow-none" aria-label="Amount (to the nearest dollar)" required>
                            </div>
                        </div>
                        <div class="col-6">
                            <label for="price" class="form-label">Discount</label>
                            <div class="input-group mb-3">
                                <input type="text" value="<?php echo $display["discount"]; ?>" name="discount" class="form-control shadow-none" aria-label="Amount (to the nearest dollar)">
                                <span class="input-group-text">%</span>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="form-floating mb-3">
                                <input type="text" value="<?php echo $display["color"]; ?>" name="color" class="form-control shadow-none" id="floatingInput" placeholder="name@example.com" required>
                                <label for="floatingInput">Dog color</label>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="form-floating mb-3">
                                <input type="text" value="<?php echo $display["quantity"]; ?>" name="quantity" class="form-control shadow-none" id="floatingInput" placeholder="name@example.com" required>
                                <label for="floatingInput">Quantity</label>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="form-floating">
                                <textarea name="description" class="form-control shadow-none" placeholder="Leave a comment here" id="floatingTextarea2" style="height: 100px" required><?php echo $display["description"]; ?></textarea>
                                <label for="floatingTextarea2">Short description</label>
                            </div>
                        </div>
                        <div class="col-12 mt-3">
                            <div class="row">
                                <div class="col-lg-9">
                                    <div class="mb-3">
                                        <label for="formFile" class="form-label">Choose dog photo</label>
                                        <input name="dogImageFile" class="form-control shadow-none" type="file" id="formFile">
                                    </div>
                                    <p class="mt-3 form-indicator text-danger d-none"><i class="bi bi-exclamation-triangle me-2"></i>Please select a proper image</p>
                                </div>
                                <div class="col-lg-3 border border-1 p-1 rounded">
                                    <p class="text-dark mb-2">Old Picture</p>
                                    <img src="../<?php echo $display["image"]; ?>" alt="IMG" class="w-100">
                                    <input type="hidden" name="oldImage" value="<?php echo $display["image"]; ?>">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="submit-btn text-center mt-3">
                        <button type="submit" class="btn btn-warning w-50 update-btn">Update<i class="bi bi-cloud-arrow-up ms-2"></i></button>
                        <button class="btn btn-secondary w-50 loading-btn d-none mx-auto" type="button" disabled>
                            <span class="spinner-border spinner-border-sm" aria-hidden="true"></span>
                            <span role="status ms-1">Updating...</span>
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>


    <?php include "./components/scripts.php" ?>
</body>

    <script>
        $(document).ready(()=>{

            $("#UpdateDog").submit((e)=>{

                e.preventDefault()
                
                let formData = new FormData($("#UpdateDog")[0])

                $.ajax({
                    url: "./ajax/edit_dog.php",
                    method: "POST",
                    data: formData,
                    contentType: false,
                    processData: false,
                    success: function(data) {

                        if(data == "updated successfully") {
                            $(".form-indicator").removeClass("d-flex")
                            $(".form-indicator").addClass("d-none")

                            $(".update-btn").addClass("d-none")
                            $(".loading-btn").removeClass("d-none")
                            $(".loading-btn").addClass("d-block")
                            setTimeout(() => {
                                window.location = "dogs.php"
                            }, 2000);

                        }if(data == "invalid file"){
                            $(".form-indicator").removeClass("d-none")
                            $(".form-indicator").addClass("d-flex")
                        }
                    }
                })

            })
        })
    </script>

</html>