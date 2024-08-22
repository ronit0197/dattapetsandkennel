<?php

    include "../../database/connection.php";

    $file = $_FILES['galary-file'];

    $filename = $file['name']; //extracting file name
    $fileerror = $file['error']; //extracting file error
    $filetemp = $file['tmp_name']; //extracting file temp_name
    $filesize = $file['size']; //extracting file size
    $fileextention = explode(".", $filename); //extracting file extention

    $fileactualextension = strtolower(end($fileextention)); //lower casing file extention

    $fileextentionsorted = array('png', 'jpg', 'jpeg'); //restrict the file types

    if(in_array($fileactualextension,$fileextentionsorted)){
        if($fileerror === 0){

            $randomNumber = rand(10,100000);

            $destination = "../../images/galary/".$randomNumber.$filename;
            $uplodable_image = "images/galary/".$randomNumber.$filename;

            $sql = "INSERT INTO `galary_images`(`image`, `date&time`) VALUES ('$uplodable_image',current_timestamp())";
            $result = mysqli_query($conn, $sql);

            if($result){

                move_uploaded_file($filetemp, $destination);
                echo "uploaded successfully";

            }

        }else{

            echo "error!";
        }
    }else{

        echo "invalid file";
    }


?>