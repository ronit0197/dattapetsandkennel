<?php

    include "../../database/connection.php";

    if(isset($_POST["delete_image"])){

        $id = $_POST["galaryImageId"];
        $image = $_POST["galaryImage"];

        $sql = "DELETE FROM `galary_images` WHERE id='$id'";
        $result = mysqli_query($conn, $sql);

        if($result){
            header("location: ../images.php");
            unlink("../../".$image);
        }

    }
?>