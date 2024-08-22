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
                    <h1><i class="bi bi-gear"></i></h1>
                </div>
                <div class="card mt-5 p-3">
                    <div class="d-flex justify-content-between">
                        <div>
                            <h5>Username</h5>
                            <h6><i class="bi bi-person-circle me-3"></i>
                                <span id="user"></span>
                            </h6>
                        </div>
                        <div class="d-flex align-items-center">
                            <div class="alert alert-success alert-dismissible fade hide" role="alert">
                                <span class="alert-text">You should check in on some of those fields below.</span>
                                <button type="button" class="btn-close shadow-none" data-bs-dismiss="alert" aria-label="Close"></button>
                            </div>
                            <button class="btn btn-dark update-settings ms-3" data-bs-toggle="modal" data-bs-target="#editUserModal"><i class="bi bi-gear"></i></button>
                        </div>
                    </div>
                    <h5 class="mt-3">Password</h5>
                    <h6><i class="bi bi-key me-3"></i>
                        <span id="passlen"></span>
                    </h6>
                </div>
                <div class="container-fluid card p-2 mt-5">
                    <div class="conatiner-fluid mb-3">
                        <button class="btn btn-outline-success" id="slide-add-btn">Add slide +</button>
                    </div>
                    <div class="row slides">

                    </div>
                </div>
            </div>
        </div>
    </div>

    <form id="galary-form" method="POST" class="p-lg-0 p-md-2 p-2 d-none" enctype="multipart/form-data">
        <div class="bg-light p-5 text-center mt-lg-0 mt-md-5 mt-5 rounded">
            <input type="file" name="galary-file" class="form-control mb-2">
            <p class="mt-3 form-indicator text-danger d-none"><i class="bi bi-exclamation-triangle me-2"></i>Please select a proper image</p>
            <button type="submit" class="btn btn-warning mt-5">Upload Image<i class="bi bi-cloud-arrow-up ms-2"></i></button>
        </div>
        <i class="bi bi-x-circle form-close"></i>
    </form>

    <!-- Modal -->
    <div class="modal fade" id="editUserModal" tabindex="-1" aria-labelledby="editUserModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="editUserModalLabel">Modal title</h1>
                    <button type="button" class="btn-close btn-form-close shadow-none" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form id="editUser" method="POST">
                        <div class="form-floating mb-3">
                            <input type="text" name="username" class="form-control shadow-none" id="oldUsername" placeholder="Blog title" required>
                            <label for="floatingInput">Username</label>
                        </div>
                        <div class="form-floating mb-3">
                            <input type="password" name="oldPassword" class="form-control shadow-none" placeholder="Blog topic">
                            <label for="floatingInput">Old password</label>
                        </div>
                        <div class="form-floating mb-3">
                            <input type="password" name="newPassword" class="form-control shadow-none" placeholder="Blog topic">
                            <label for="floatingInput">New password</label>
                        </div>
                        <div class="form-floating mb-3">
                            <input type="password" name="confirmPassword" class="form-control shadow-none" placeholder="Blog topic">
                            <label for="floatingInput">Confirm new password</label>
                        </div>
                        <p class="mt-3 login-indicator text-danger d-none"><i class="bi bi-exclamation-triangle me-2"></i><span
                            class="login-text">Invalid Username</span></p>
                        <div class="submit-btn text-center mt-5">
                            <button type="submit" class="btn btn-success w-50">Change</button>
                            <button type="reset" class="reset-form d-none">reset</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <?php include "./components/scripts.php" ?>
</body>

    <script>

        function getUser(){

            $.ajax({
                url: "./ajax/get_user.php",
                method: "POST",
                success: function(data){
                    let userData = jQuery.parseJSON(data)

                    $("#user").html("")
                    $("#user").html(userData.username)

                    $("#passlen").html("")
                    for(let i=1; i<=userData.passlen; i++){
                        $("#passlen").append("*")
                    }

                    $("#oldUsername").val(userData.username)

                }
            })
        }

        function getSlides(){

            $.ajax({
                url: "./ajax/get_slides.php",
                method: "POST",
                success: function(data){
                    $(".slides").html("")
                    $(".slides").append(data)
                }
            })
        }

        $(document).ready(()=>{

            getUser()
            getSlides()

            $("#slide-add-btn").click(()=>{
                $("#galary-form").removeClass("d-none")
                $("#galary-form").addClass("d-flex")
            })

            $(".form-close").click(()=>{
                $("#galary-form").removeClass("d-flex")
                $("#galary-form").addClass("d-none")
            })

            $("#editUser").submit((e)=>{
                e.preventDefault()

                let formData = new FormData($("#editUser")[0])

                $.ajax({
                    url: "./ajax/edit_user.php",
                    method: "POST",
                    data: formData,
                    contentType: false,
                    processData: false,
                    success: function(data) {
                        if(data == "username changed"){

                            $(".btn-form-close").click()
                            $(".reset-form").click()
                            $(".alert").removeClass("hide")
                            $(".alert").addClass("show")
                            $(".alert-text").html("Username has successsfully changed")
                            $(".login-indicator").removeClass("d-flex")
                            $(".login-indicator").addClass("d-none")
                            getUser()

                        }if(data == "Nothing changed"){

                            $(".btn-form-close").click()
                            $(".reset-form").click()
                            $(".alert").removeClass("hide")
                            $(".alert").addClass("show")
                            $(".alert-text").html("Nothing is changed")
                            $(".login-indicator").removeClass("d-flex")
                            $(".login-indicator").addClass("d-none")
                            getUser()

                        }if(data == "username and password changed"){

                            $(".btn-form-close").click()
                            $(".reset-form").click()
                            $(".alert").removeClass("hide")
                            $(".alert").addClass("show")
                            $(".alert-text").html("Username and Password has successfully changed")
                            $(".login-indicator").removeClass("d-flex")
                            $(".login-indicator").addClass("d-none")
                            getUser()

                        }if(data == "new password empty"){

                            $(".login-indicator").removeClass("d-none")
                            $(".login-indicator").addClass("d-flex")
                            $(".login-text").text("Please enter a new password")
                            getUser()

                        }if(data == "confirm new password"){

                            $(".login-indicator").removeClass("d-none")
                            $(".login-indicator").addClass("d-flex")
                            $(".login-text").text("Please confirm your new password")
                            getUser()

                        }if(data == "invalid password"){

                            $(".login-indicator").removeClass("d-none")
                            $(".login-indicator").addClass("d-flex")
                            $(".login-text").text("Old password does not match")
                            getUser()

                        }if(data == "password changed"){

                            $(".btn-form-close").click()
                            $(".reset-form").click()
                            $(".alert").removeClass("hide")
                            $(".alert").addClass("show")
                            $(".alert-text").html("Password has successsfully changed")
                            $(".login-indicator").removeClass("d-flex")
                            $(".login-indicator").addClass("d-none")
                            getUser()

                        }
                    }
                })
            })

            $("#galary-form").submit((e)=>{
                e.preventDefault()

                let formData = new FormData($("#galary-form")[0])

                $.ajax({
                    url: "./ajax/add_slide.php",
                    method: "POST",
                    data: formData,
                    contentType: false,
                    processData: false,
                    success: function(data) {
                        if(data == "uploaded successfully"){
                            $("#galary-form").removeClass("d-flex")
                            $("#galary-form").addClass("d-none")
                            $(".form-indicator").addClass("d-none")
                            getSlides()
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