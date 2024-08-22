<?php

    include "../../database/connection.php";

    if(isset($_POST["delete_dog"])){

        $id = $_POST["dogId"];
        $image = $_POST["dogImage"];

        $sql = "DELETE FROM `dogs` WHERE id='$id'";
        $result = mysqli_query($conn, $sql);

        if($result){
            header("location: ../dogs.php");
            unlink("../../".$image);
        }

    }
?>