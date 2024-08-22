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
                    <h1 class="text-danger"><i class="fa-solid fa-video me-2"></i></h1>
                </div>
                <div class="container-fluid my-5">
                    <!-- Devider start -->
                    <div class="container-fluid p-4 d-flex justify-content-start align-items-center">
                        <h5 class="devider-text me-3">Mobile Videos</h5>
                        <span class="devider"></span>
                    </div>
                    <!-- Devider end-->
                    <div class="row main-galary">

                    </div>
                    <!-- Devider start -->
                    <div class="container-fluid p-4 d-flex justify-content-start align-items-center">
                        <h5 class="devider-text me-3">Youtube Videos</h5>
                        <span class="devider"></span>
                    </div>
                    <!-- Devider end-->
                    <div class="row link-galary">

                    </div>
                </div>

                <button class="btn btn-danger add-image" id="link-add-btn"><i class="bi bi-youtube"></i></button>
                <button class="btn btn-secondary add-link" id="galary-add-btn"><i class="bi bi-folder-plus"></i></button>

                <form id="galary-form" method="POST" class="p-lg-0 p-md-2 p-2 d-none" enctype="multipart/form-data">
                    <div class="bg-light p-5 text-center mt-lg-0 mt-md-5 mt-5 rounded">
                        <input type="file" name="galary-file" class="form-control mb-2">
                        <p class="mt-3 form-indicator text-danger d-none"><i class="bi bi-exclamation-triangle me-2"></i>Please select a proper video</p>
                        <button type="submit" class="btn btn-warning mt-5 upload-btn">Upload Video<i class="bi bi-cloud-arrow-up ms-2"></i></button>
                        <button class="btn btn-secondary w-50 loading-btn mx-auto mt-5 d-none" type="button" disabled>
                            <span class="spinner-border spinner-border-sm" aria-hidden="true"></span>
                            <span role="status ms-1">Uploading...</span>
                        </button>
                        <button type="reset" class="reset-form d-none">reset</button>
                    </div>
                    <i class="bi bi-x-circle form-close"></i>
                </form>
                <form id="link-form" method="POST" class="p-lg-0 p-md-2 p-2 d-none">
                    <div class="bg-light p-5 text-center mt-lg-0 mt-md-5 mt-5 rounded">
                        <input type="text" name="link" class="form-control mb-2 shadow-none" class="youtube_link">
                        <p class="mt-3 form-indicator text-danger d-none"><i class="bi bi-exclamation-triangle me-2"></i>Please insert your link</p>
                        <button type="submit" class="btn btn-warning mt-5 upload-btn">Upload Video<i class="bi bi-cloud-arrow-up ms-2"></i></button>
                        <button type="reset" class="reset-form d-none">reset</button>
                    </div>
                    <i class="bi bi-x-circle link-close"></i>
                </form>
            </div>
        </div>
    </div>

    <?php include "./components/scripts.php" ?>
</body>

    <script>

        function getVideos(){

            $.ajax({
                url: "./ajax/get_videos.php",
                method: "GET",
                success: function(data){
                    $(".main-galary").html("")
                    $(".main-galary").append(data)
                }
            })

            $.ajax({
                url: "./ajax/get_links.php",
                method: "GET",
                success: function(data){
                    $(".link-galary").html("")
                    $(".link-galary").append(data)
                }
            })

        }

        function uploadLoader(data){

            $(".upload-btn").addClass("d-none")
            $(".loading-btn").removeClass("d-none")

            setTimeout(() => {
                if(data == "uploaded successfully"){
    
                    $(".upload-btn").removeClass("d-none")
                    $(".loading-btn").addClass("d-none")
                    $("#galary-form").removeClass("d-flex")
                    $("#galary-form").addClass("d-none")
                    $(".form-close").click()
                    $(".reset-form").click()
                    getVideos()
    
                }if(data == "invalid file"){
                    $(".form-indicator").removeClass("d-none")
                    $(".form-indicator").addClass("d-flex")
                    $(".upload-btn").removeClass("d-none")
                    $(".loading-btn").addClass("d-none")
                }
            }, 2000);

        }

        $(document).ready(()=>{

            getVideos()

            $("#galary-add-btn").click(()=>{
                $("#galary-form").removeClass("d-none")
                $("#galary-form").addClass("d-flex")
            })

            $(".form-close").click(()=>{
                $("#galary-form").removeClass("d-flex")
                $("#galary-form").addClass("d-none")
            })

            $("#link-add-btn").click(()=>{
                $("#link-form").removeClass("d-none")
                $("#link-form").addClass("d-flex")
            })

            $(".link-close").click(()=>{
                $("#link-form").removeClass("d-flex")
                $("#link-form").addClass("d-none")
            })

            // Upload local videos
            $("#galary-form").submit((e)=>{
                e.preventDefault()

                let formData = new FormData($("#galary-form")[0])

                $.ajax({
                    url: "./ajax/add_video.php",
                    method: "POST",
                    data: formData,
                    contentType: false,
                    processData: false,
                    success: function(data) {
                        uploadLoader(data);
                    }
                })
           })
           
           // Upload Youtube videos links
           $("#link-form").submit((e)=>{

            e.preventDefault()

            let formData = new FormData($("#link-form")[0])
            
            $.ajax({
                    url: "./ajax/add_link.php",
                    method: "POST",
                    data: formData,
                    contentType: false,
                    processData: false,
                    success: function(data) {
                        if(data == "successfull"){
                            $(".form-indicator").removeClass("d-flex")
                            $(".form-indicator").addClass("d-none")

                            $("#link-form").removeClass("d-flex")
                            $("#link-form").addClass("d-none")
                            getVideos()
                        }if(data == "invalid"){
                            $(".form-indicator").removeClass("d-none")
                            $(".form-indicator").addClass("d-flex")
                        }
                    }
                })

           })

        })
    </script>

</html>