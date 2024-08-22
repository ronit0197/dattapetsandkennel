<?php

    session_start();

    include "../../database/connection.php";

    $oldusername = $_SESSION["dattaAdminUsername"];

    $username = $_POST["username"];
    $oldpassword = $_POST["oldPassword"];
    $newpassword = $_POST["newPassword"];
    $cpassword = $_POST["confirmPassword"];

    $sql = "SELECT * FROM `admin_login` WHERE username='$oldusername'";
    $result = mysqli_query($conn, $sql);
    $display = mysqli_fetch_array($result);

    if($oldpassword == NULL && $newpassword == NULL && $cpassword == NULL){

        if($username == $display["username"]){

            echo "Nothing changed";

        }else{

            $up = "UPDATE `admin_login` SET `username`='$username',`date&time`=current_timestamp() WHERE username='$oldusername'";
            $send = mysqli_query($conn, $up) or die();

            if($send){
                echo "username changed";
                $_SESSION["dattaAdminUsername"] = $username;
            }
        }

    }else{

        if(password_verify($oldpassword, $display["password"])){

            if($newpassword == NULL && $cpassword == NULL){

                echo "new password empty";

            }else{

                if($newpassword == $cpassword){
    
                    if($username != $display["username"]){
    
                        $p = password_hash($newpassword, PASSWORD_BCRYPT);
                        $up = "UPDATE `admin_login` SET `username`='$username',`password`='$p',`date&time`=current_timestamp() WHERE username='$oldusername'";
                        $send = mysqli_query($conn, $up) or die();
    
                        if($send){
                            echo "username and password changed";
                            $_SESSION["dattaAdminUsername"] = $username;
                            $_SESSION["passlen"] = strlen($newpassword);
                        }
                    
                    }else{
    
                        $p = password_hash($newpassword, PASSWORD_BCRYPT);
                        $up = "UPDATE `admin_login` SET `password`='$p',`date&time`=current_timestamp() WHERE username='$oldusername'";
                        $send = mysqli_query($conn, $up) or die();
    
                        if($send){
                            echo "password changed";
                            $_SESSION["passlen"] = strlen($newpassword);
                        }
                    }
    
                }else{
    
                    echo "confirm new password";
    
                }
            }


        }else{

            echo "invalid password";

        }

    }


?>