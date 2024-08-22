<?php
    
    session_start();

    if(isset($_SESSION["dattaAdminSession002323"]) && $_SESSION["dattaAdminSession002323"] == true){
        header("location: dashboard.php");
    }

?> 

<!DOCTYPE html>
<html lang="en">

<head>
    <?php include "./components/links.php" ?>
</head>

<body class="login-body">

    <form method="POST" id="login-form" class="bg-white p-4 rounded w-50">
        <img class="mb-4" src="../images/logo/Datta pets & Kennel.png" alt="Logo" width="60">
        <div class="form-floating mb-3">
            <input type="text" name="username" class="form-control shadow-none" id="floatingInput"
                placeholder="name@example.com">
            <label for="floatingInput">Username</label>
        </div>
        <div class="form-floating">
            <input type="password" name="password" class="form-control shadow-none" id="floatingPassword"
                placeholder="Password">
            <label for="floatingPassword">Password</label>
        </div>
        <p class="mt-3 login-indicator text-danger d-none"><i class="bi bi-exclamation-triangle me-2"></i><span
                class="login-text">Invalid Username</span></p>
        <div class="w-100 mt-4 d-flex">
            <button type="submit" class="btn btn-secondary w-50 login-btn mx-auto"><i class="bi bi-lock-fill me-2"></i>Log in</button>
            <button class="btn btn-secondary w-50 loading-btn d-none mx-auto" type="button" disabled>
                <span class="spinner-border spinner-border-sm" aria-hidden="true"></span>
                <span role="status ms-1">Logging in...</span>
            </button>
        </div>
    </form>

    <?php include "./components/scripts.php" ?>
</body>

<script>
    $(document).ready(() => {
        $("#login-form").submit((e) => {
            e.preventDefault()

            let formData = new FormData($("#login-form")[0])

            $.ajax({
                url: "./ajax/login.php",
                method: "POST",
                data: formData,
                contentType: false,
                processData: false,
                success: function (data) {
                    if (data == "Invalid Username") {
                        $(".login-indicator").removeClass("d-none")
                        $(".login-indicator").addClass("d-flex")
                        $(".login-text").text(data)
                    } if (data == "Invalid password") {
                        $(".login-indicator").removeClass("d-none")
                        $(".login-indicator").addClass("d-flex")
                        $(".login-text").text(data)
                    } if (data == "Login successfull") {
                        $(".login-indicator").addClass("d-none")
                        $(".login-btn").addClass("d-none")
                        $(".loading-btn").removeClass("d-none")
                        $(".loading-btn").addClass("d-block")
                        setTimeout(() => {
                            window.location = "dashboard.php"
                        }, 2000);
                    }
                }
            })
        })
    })
</script>

</html>