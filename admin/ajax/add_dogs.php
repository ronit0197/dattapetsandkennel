<?php

    include "../../database/connection.php";

    $breed = $_POST["name"];
    $origin = $_POST["origin"];
    $sex = $_POST["sex"];
    $weight = $_POST["weight"];
    $price = $_POST["price"];
    $discount = $_POST["discount"];
    $color = $_POST["color"];
    $quantity = $_POST["quantity"];
    $description = $_POST["description"];


    $file = $_FILES['dogImageFile'];

    $filename = $file['name']; //extracting file name
    $fileerror = $file['error']; //extracting file error
    $filetemp = $file['tmp_name']; //extracting file temp_name
    $fileextention = explode(".", $filename); //extracting file extention

    $fileactualextension = strtolower(end($fileextention)); //lower casing file extention

    $randomNumber = rand(10,100000);

    $destination = "../../images/pets/".$randomNumber.$filename;
    $uplodable_image = "images/pets/".$randomNumber.$filename;

    $fileextentionsorted = array('png', 'jpg', 'jpeg', 'pdf', 'wbp'); //restrict the file types

    if(in_array($fileactualextension,$fileextentionsorted)){

        $sql = "INSERT INTO `dogs`(`breed`, `description`, `origin`, `price`, `waight`, `color`, `sex`, `image`, `discount`, `quantity`, `date&time`) VALUES ('$breed','$description','$origin','$price','$weight','$color','$sex','$uplodable_image','$discount','$quantity',current_timestamp())";
        $result = mysqli_query($conn, $sql);

        if($result){

            move_uploaded_file($filetemp, $destination);
            echo "uploaded successfully";

        }else{
            echo "not_uploded";
        }

    }else{
        echo "invalid file";
    }

?>