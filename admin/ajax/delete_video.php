<?php

    include "../../database/connection.php";

    if(isset($_POST["delete_video"])){

        $id = $_POST["galaryVideoId"];
        $video = $_POST["galaryVideo"];

        $sql = "DELETE FROM `videos` WHERE id='$id'";
        $result = mysqli_query($conn, $sql);

        if($result){
            header("location: ../videos.php");
            unlink("../../".$video);
        }

    }

    if(isset($_POST["delete_link"])){

        $id = $_POST["galaryVideoId"];

        $sql = "DELETE FROM `you_tube_links` WHERE id='$id'";
        $result = mysqli_query($conn, $sql);

        if($result){
            header("location: ../videos.php");
        }

    }
?>