<?php

    include "../../database/connection.php";

    if(isset($_POST["delete_blog"])){

        $id = $_POST["blogId"];

        $sql = "DELETE FROM `blogs` WHERE id='$id'";
        $result = mysqli_query($conn, $sql);

        if($result){
            header("location: ../blogs.php");
        }

    }

?>