<?php

    include "../../database/connection.php";

    $status = $_POST['status'];

    $sql = "UPDATE `site_status` SET `status`='$status' WHERE id='1'";
    $result = mysqli_query($conn, $sql) or die();

    if($result){

        echo "successfull";

    }

?>