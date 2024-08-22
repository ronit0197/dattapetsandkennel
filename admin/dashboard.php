<?php
    include "redirection.php";
    include "../database/connection.php";

    $dogSql = "SELECT * FROM `dogs`";
    $dogResult = mysqli_query($conn,$dogSql);
    $dogCount = mysqli_num_rows($dogResult);
    
    $imageSql = "SELECT * FROM `galary_images`";
    $imageResult = mysqli_query($conn,$imageSql);
    $imageCount = mysqli_num_rows($imageResult);
    
    $videoSql = "SELECT * FROM `videos`";
    $videoResult = mysqli_query($conn,$videoSql);
    $videoCount = mysqli_num_rows($videoResult);
    
    $blogSql = "SELECT * FROM `blogs`";
    $blogResult = mysqli_query($conn,$blogSql);
    $blogCount = mysqli_num_rows($blogResult);
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
                <div class="row">
                    <div class="col-lg-2 mb-lg-0 mb-md-3 mb-3">
                        <div class="card text-center p-3">
                            <div class="card-image">
                                <i class="fa-solid fa-dog text-dark" style="font-size: 55px;"></i>
                            </div>
                            <div
                                class="card-title d-flex justify-content-center align-items-center border border-3 border-dark mt-2 mx-auto">
                                <h5><?php if($dogCount < 10){ echo "0".$dogCount; }else{ echo $dogCount; } ?></h5>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-2 mb-lg-0 mb-md-3 mb-3">
                        <div class="card text-center p-3">
                            <div class="card-image">
                                <i class="fa-solid fa-image text-primary" style="font-size: 55px;"></i>
                            </div>
                            <div
                                class="card-title d-flex justify-content-center align-items-center border border-3 border-primary mt-2 mx-auto">
                                <h5><?php if($imageCount < 10){ echo "0".$imageCount; }else{ echo $imageCount; } ?></h5>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-2 mb-lg-0 mb-md-3 mb-3">
                        <div class="card text-center p-3">
                            <div class="card-image">
                                <i class="fa-solid fa-video text-danger" style="font-size: 55px;"></i>
                            </div>
                            <div
                                class="card-title d-flex justify-content-center align-items-center border border-3 border-danger mt-2 mx-auto">
                                <h5><?php if($videoCount < 10){ echo "0".$videoCount; }else{ echo $videoCount; } ?></h5>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-2 mb-lg-0 mb-md-3 mb-3">
                        <div class="card text-center p-3">
                            <div class="card-image">
                                <i class="fa-solid fa-blog text-warning" style="font-size: 55px;"></i>
                            </div>
                            <div
                                class="card-title d-flex justify-content-center align-items-center border border-3 border-warning mt-2 mx-auto">
                                <h5><?php if($blogCount < 10){ echo "0".$blogCount; }else{ echo $blogCount; } ?></h5>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="container-fluid mt-4">
                    <div class="row border border-1 border-secondary p-2 rounded">
                        <div class="col-8">
                            <h1>Site status</h1>
                            <h6 class="text-success">Everything is going perfect</h6>
                        </div>
                        <div class="col-4 d-flex justify-content-end">
                            <div class="form-check form-switch">
                                <input class="form-check-input shadow-none" type="checkbox" role="switch" id="siteStatusSwitch">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <?php include "./components/scripts.php" ?>
</body>
    <script>

        function getStatus(){
            $.ajax({
                url: "./ajax/get_status.php",
                method: "POST",
                success: function (data){
                    if(data == 'on'){
                        $('#siteStatusSwitch').prop('checked', true);
                    }else{
                        $('#siteStatusSwitch').prop('checked', false);
                    }
                }
            })
        }

        $(document).ready(()=>{

            getStatus()

            function on(){
                $('#siteStatusSwitch').val('on')
            }

            function off(){
                $('#siteStatusSwitch').val('off')
            }

            $('#siteStatusSwitch').on('change', (e)=>{

                if(e.target.value == 'on'){
                    off();
                }else{
                    on();
                }

                let statusValue = e.target.value;

                $.ajax({
                    url: "./ajax/status_update.php",
                    method: "POST",
                    data: {status: statusValue},
                    success: function (data){
                        if(data == 'successfull'){
                            getStatus()
                        }
                    }
                })

            })
        })
    </script>
</html>