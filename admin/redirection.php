<?php

session_start();

if(!isset($_SESSION["dattaAdminSession002323"]) && $_SESSION["dattaAdminSession002323"] != true){
    header("location: index.php");
}

?>