<?php

    session_start();

    include "../../database/connection.php";


    $username = $_SESSION["dattaAdminUsername"];
    $passlen = $_SESSION["passlen"];

    // Create an associative array with the data
    $data = array(
        "username" => $username,
        "passlen" => $passlen
    );

    // Encode the array to a JSON string
    $json_data = json_encode($data);

    echo $json_data;

?>