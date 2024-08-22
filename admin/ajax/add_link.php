<?php

    include "../../database/connection.php";

    $link = $_POST["link"];

    if($link == null){
        echo "invalid";
    }else{

        $sql = "INSERT INTO `you_tube_links`(`links`) VALUES ('$link')";
        $result = mysqli_query($conn, $sql);
    
        if($result){
            echo "successfull";
        }
    }

?>