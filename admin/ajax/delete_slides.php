<?php

    include "../../database/connection.php";

    if(isset($_POST["delete_image"])){

        $id = $_POST["galaryImageId"];
        $image = $_POST["galaryImage"];

        $sql = "DELETE FROM `slides` WHERE id='$id'";
        $result = mysqli_query($conn, $sql);

        if($result){
            header("location: ../settings.php");
            unlink("../../".$image);
        }

    }
?>