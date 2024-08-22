<?php

    session_start();

    include "../../database/connection.php";


    $username = $_POST["username"];
    $password = $_POST["password"];

    $sql = "SELECT * FROM `admin_login` WHERE username='$username'";
    $result = mysqli_query($conn, $sql);
    $count = mysqli_num_rows($result);
    $pass = mysqli_fetch_array($result);

    if($count > 0){
        
        if(password_verify($password, $pass['password'])){
            echo "Login successfull";
            $_SESSION["dattaAdminSession002323"] = true;
            $_SESSION["dattaAdminUsername"] = $username;
            $_SESSION["passlen"] = strlen($password);
        }else{
            echo "Invalid password";
        }

    }else{
        echo "Invalid Username";
    }
?>
