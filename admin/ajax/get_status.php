<?php

    include "../../database/connection.php";

    $sql = "SELECT * FROM `site_status`";
    $result = mysqli_query($conn, $sql);
    $display = mysqli_fetch_array($result);

    if($result){

        echo $display["status"];

    }


?>