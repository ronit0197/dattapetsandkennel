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
            <div class="col-lg-10 ms-auto overflow-hidden p-4 position-relative" id="admin-content">
                <div class="d-flex justify-content-between">
                    <h1 class="text-primary"><i class="fa-solid fa-image me-2"></i></h1>
                </div>
                <div class="container-fluid my-5">
                    <div class="row main-galary">

                    </div>
                </div>
                <button class="btn btn-secondary add-image" id="galary-add-btn"><i class="bi bi-folder-plus"></i></button>
                <form id="galary-form" method="POST" class="p-lg-0 p-md-2 p-2 d-none" enctype="multipart/form-data">
                    <div class="bg-light p-5 text-center mt-lg-0 mt-md-5 mt-5 rounded">
                        <input type="file" name="galary-file" class="form-control mb-2">
                        <p class="mt-3 form-indicator text-danger d-none"><i class="bi bi-exclamation-triangle me-2"></i>Please select a proper image</p>
                        <button type="submit" class="btn btn-warning mt-5">Upload Image<i class="bi bi-cloud-arrow-up ms-2"></i></button>
                    </div>
                    <i class="bi bi-x-circle form-close"></i>
                </form>
            </div>
        </div>
    </div>

    <?php include "./components/scripts.php" ?>
</body>

    <script>

        function getImages(){

            $.ajax({
                url: "./ajax/get_galary.php",
                method: "POST",
                success: function(data){
                    $(".main-galary").html("")
                    $(".main-galary").append(data)
                }
            })
            
        }

        $(document).ready(()=>{

            getImages()

            $("#galary-add-btn").click(()=>{
                $("#galary-form").removeClass("d-none")
                $("#galary-form").addClass("d-flex")
            })

            $(".form-close").click(()=>{
                $("#galary-form").removeClass("d-flex")
                $("#galary-form").addClass("d-none")
            })

        
           $("#galary-form").submit((e)=>{
                e.preventDefault()

                let formData = new FormData($("#galary-form")[0])

                $.ajax({
                    url: "./ajax/add_galary.php",
                    method: "POST",
                    data: formData,
                    contentType: false,
                    processData: false,
                    success: function(data) {
                        if(data == "uploaded successfully"){
                            $("#galary-form").removeClass("d-flex")
                            $("#galary-form").addClass("d-none")
                            getImages()
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