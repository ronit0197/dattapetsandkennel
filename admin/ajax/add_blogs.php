<?php

    include "../../database/connection.php";

    $title = $_POST["title"];
    $topic = $_POST["topic"];
    $description = $_POST["description"];

    $sql = "INSERT INTO `blogs`(`blog_title`, `blog_topic`, `blog`, `date&time`) VALUES ('$title','$topic','$description',current_timestamp())";
    $result = mysqli_query($conn, $sql) or die();

    if($result){
        echo "successfull";
    }
?>