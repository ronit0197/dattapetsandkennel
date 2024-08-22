<?php
    include "redirection.php";
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
                <div class="d-flex justify-content-between">
                    <h1><i class="fa-solid fa-dog me-2"></i></h1>
                </div>
                <div class="container-fluid mt-5">
                    <div class="row">
                        <div class="col-lg-8">
                            <button class="btn btn-success" data-bs-toggle="modal" data-bs-target="#exampleModal">Add dog +</button>
                        </div>
                        <div class="col-lg-4 mt-lg-0 mt-md-3 mt-3">
                            <input class="form-control me-2 shadow-none" id="searchText" type="search" placeholder="Search Dog Breed..."
                            onkeyup="searchFilter()" aria-label="Search">
                        </div>
                    </div>
                    <div class="container-fluid mt-4 p-0">
                        <table class="w-100 table table-hover" id="dataTable">
                            <thead>
                                <tr>
                                    <th scope="col" style="font-size: 13px;">ID</th>
                                    <th scope="col" style="font-size: 13px;">Breed</th>
                                    <th scope="col" style="font-size: 13px;">Picture</th>
                                    <th scope="col" style="font-size: 13px;">Gender</th>
                                    <th scope="col" style="font-size: 13px;">Price</th>
                                    <th scope="col" style="font-size: 13px;">Action</th>
                                </tr>
                            </thead>
                            <tbody id="dog-table">

                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Add dog modal -->
    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="exampleModalLabel">Add New Dog</h1>
                <button type="button" class="btn-close shadow-none" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
               <form id="addDog" method="POST" enctype="multipart/form-data">
                    <div class="row">
                        <div class="col-6">
                            <div class="form-floating mb-3">
                                <input type="text" name="name" class="form-control shadow-none" id="floatingInput" placeholder="name@example.com" required>
                                <label for="floatingInput">Dog breed</label>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="form-floating mb-3">
                                <input type="text" name="origin" class="form-control shadow-none" id="floatingInput" placeholder="name@example.com">
                                <label for="floatingInput">Dog origin</label>
                            </div>
                        </div>
                        <div class="col-6">
                            <select name="sex" class="form-select form-select shadow-none" aria-label="Small select example" required>
                                <option selected disabled>Select gender</option>
                                <option value="male">Male</option>
                                <option value="female">Female</option>
                            </select>
                        </div>
                        <div class="col-6">
                            <div class="input-group mb-3">
                                <input type="text" name="weight" class="form-control shadow-none" aria-label="Amount (to the nearest dollar)" placeholder="Weight" required>
                                <span class="input-group-text">kg</span>
                            </div>
                        </div>
                        <div class="col-6">
                            <label for="price" class="form-label">Price</label>
                            <div class="input-group mb-3">
                                <span class="input-group-text"><i class="bi bi-currency-rupee"></i></span>
                                <input type="text" name="price" class="form-control shadow-none" aria-label="Amount (to the nearest dollar)" required>
                            </div>
                        </div>
                        <div class="col-6">
                            <label for="price" class="form-label">Discount</label>
                            <div class="input-group mb-3">
                                <input type="text" name="discount" class="form-control shadow-none" aria-label="Amount (to the nearest dollar)">
                                <span class="input-group-text">%</span>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="form-floating mb-3">
                                <input type="text" name="color" class="form-control shadow-none" id="floatingInput" placeholder="name@example.com" required>
                                <label for="floatingInput">Dog color</label>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="form-floating mb-3">
                                <input type="text" name="quantity" class="form-control shadow-none" id="floatingInput" placeholder="name@example.com" required>
                                <label for="floatingInput">Quantity</label>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="form-floating">
                                <textarea name="description" class="form-control shadow-none" placeholder="Leave a comment here" id="floatingTextarea2" style="height: 100px" required></textarea>
                                <label for="floatingTextarea2">Short description</label>
                            </div>
                        </div>
                        <div class="col-12 mt-3">
                            <div class="mb-3">
                                <label for="formFile" class="form-label">Choose dog photo</label>
                                <input name="dogImageFile" class="form-control shadow-none" type="file" id="formFile">
                            </div>
                            <p class="mt-3 form-indicator text-danger d-none"><i class="bi bi-exclamation-triangle me-2"></i>Please select a proper image</p>
                        </div>
                    </div>
                    <div class="submit-btn text-center mt-3">
                        <button type="submit" class="btn btn-success w-50">Submit</button>
                        <button type="reset" class="reset-form d-none">reset</button>
                    </div>
               </form>
            </div>
            </div>
        </div>
    </div>

    <?php include "./components/scripts.php" ?>

    <script>
        let searchText = document.getElementById("searchText");
        let dataTable = document.getElementById("dataTable");

        function searchFilter(){

            let str = searchText.value.toLowerCase();
            let tr = dataTable.getElementsByTagName("tr");

            for(let i=0; i < tr.length; i++){

                let dogName = tr[i].getElementsByTagName("td")[0];

                if(dogName){

                    let data1 = dogName.textContent || dogName.innerHTML;

                    if((data1.toLowerCase().indexOf(str) > -1)){

                        tr[i].style.display = "";
                    }else{
                        tr[i].style.display = "none";
                    }
                }
            }
        }
    </script>
</body>
    <script>

        function getDogs(){
            $.ajax({
                url: "./ajax/get_dogs.php",
                method: "POST",
                success: function (data){
                    $("#dog-table").html("")
                    $("#dog-table").append(data)
                }
            })
        }

        $(document).ready(()=>{

            getDogs();

            $("#addDog").submit((e)=>{

                e.preventDefault()
                
                let formData = new FormData($("#addDog")[0])

                $.ajax({
                    url: "./ajax/add_dogs.php",
                    method: "POST",
                    data: formData,
                    contentType: false,
                    processData: false,
                    success: function(data) {

                        if(data == "uploaded successfully") {
                            $(".form-indicator").removeClass("d-flex")
                            $(".form-indicator").addClass("d-none")
                            $(".btn-close").click()
                            $(".reset-form").click()
                            getDogs();
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