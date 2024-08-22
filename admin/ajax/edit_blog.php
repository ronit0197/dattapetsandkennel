<?php

    include "../../database/connection.php";

    $id = $_POST["id"];

    $title = $_POST["title"];
    $topic = $_POST["topic"];
    $description = $_POST["description"];


    $sql = "UPDATE `blogs` SET `blog_title`='$title',`blog_topic`='$topic',`blog`='$description',`date&time`=current_timestamp() WHERE id='$id'";
    $result = mysqli_query($conn, $sql) or die();

    if($result){
        echo "updated successfully";
    }
?>